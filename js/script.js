
(function($){
			
var spinner,
        spinnerOpts = {
          lines: 13, // The number of lines to draw
          length: 7, // The length of each line
          width: 4, // The line thickness
          radius: 10, // The radius of the inner circle
          corners: 1, // Corner roundness (0..1)
          rotate: 0, // The rotation offset
          color: '#000', // #rgb or #rrggbb
          speed: 1, // Rounds per second
          trail: 60, // Afterglow percentage
          shadow: false, // Whether to render a shadow
          hwaccel: false, // Whether to use hardware acceleration
          className: 'spinner', // The CSS class to assign to the spinner
          zIndex: 2e9, // The z-index (defaults to 2000000000)
          top: 'auto', // Top position relative to parent in px
          left: 'auto' // Left position relative to parent in px
        };
    
$(document)
      .ajaxSend(function () {
        if ( ! spinner) {
          spinner = new Spinner(spinnerOpts).spin(document.getElementById('map'));
        } else {
          spinner.spin(document.getElementById('map'));
        }
      })
      .ajaxComplete(function (event, xhr, options) {
        if (spinner) {
          spinner.stop();
        }
});

var chartData = {};			
	districts = [
		'강동구',
		'송파구',
		'강남구',
		'서초구',
		'관악구',
		'동작구',
		'영등포구',
		'금천구',
		'구로구',
		'강서구',
		'양천구',
		'마포구',
		'서대문구',
		'은평구',
		'노원구',
		'도봉구',
		'강북구',
		'성북구',
		'중랑구',
		'동대문구',
		'광진구',
		'성동구',
		'용산구',
		'중구',
		'종로구',
	];		
var todayDateObj = new Date(+(new Date()) - 86400000), 
	todayDateStr = (makeDateString(todayDateObj))[0],
	targetDateObj = todayDateObj,
	targetDateStr = todayDateStr,
	seoulDistricts,
	layer,
    map,
	container = $('#container');


var getColor= {
	traffic: function (d) {
		return 	d > 80 ? '#800026' :
				d > 60 ? '#BD0026' :
				d > 50 ? '#E31A1C' :
				d > 40 ? '#FC4E2A' :
				d > 30 ? '#FD8D3C' :
				d > 20 ? '#FEB24C' :
				d > 10 ? '#FED976' :
						 '#FFEDA0';
	},
	realPrice: function (d) {
		return 	d > 7000 ? '#800026' :
				d > 6000 ? '#BD0026' :
				d > 5000 ? '#E31A1C' :
				d > 4000 ? '#FC4E2A' :
				d > 3000 ? '#FD8D3C' :
				d > 2000 ? '#FEB24C' :
				d > 1000 ? '#FED976' :
						   '#FFEDA0';
	}
};



function drawMap(date){
	alert("1drawmap으로 들어옴");
	if(!chartData[date]){
		chartData[date] = {};
		var requestURL = 'footer.php?date='+date;
		$.getJSON(requestURL, function(data){
			
			for(var i=0; i<25; i++){
				chartData[date][data.features.row[i]] = data.features.row[i];
			}
				drawMap2(date);
			
		});
	}
	else {
		drawMap2(date);
	}
}

function drawMap2(date){
	//if(! seoulDistricts){
		alert("2drawmap2으로 들어옴");
		$.getJSON('../js/seoul.json', function(data){
			//seoulDistricts = data;
			var len = data.features.length;

			for(var i=0;i<len;i++){
				$.extend(data.features[i].properties, chartData[date][data.features[i].properties.name]);
			}
			drawColor(data);
		});
	/*}else {

		var data = seoulDistricts;
		var len = data.features.length;

		for(var j=0; j<len; j++){
			$.extend(data.features[j].properties, chartData[date][data.features[j].properties.name]);
		}
		
		drawColor(data);
	}*/
}

function drawColor(data){
	alert("3drawcolor으로 들어옴");
	if(!data){
		return alert("들어온게 없다");
	}
	if(map && layer){
		map.removeLayer(layer);
		return alert("레이어 제거");
	}
	layer = L.geoJson(data.features, {
		style: style,
		onEachFeature : onEachFeature
	}).addTo(map);
	
	$('div.legend').find('.item').not('.source').hide();
    $('div.legend').find('.item').filter('.' + type).show();
}

var popup = L.popup();

function onEachFeature(feature, layer) {
	layer.on({
	mouseover: highlightFeature,
	mouseout: resetHighlight,
	click: onMapClick
	});
}

function highlightFeature(e) {
		var layer = e.target;
					
		layer.setStyle({
			weight: 5,
			color: '#666',
			dashArray: '',
			fillOpacity: 0.7
		});
					
		if (!L.Browser.ie && !L.Browser.opera) {
			layer.bringToFront();
		}
					
		info.update(layer.feature.properties);
}
					
function resetHighlight(e) {
	layer.resetStyle(e.target);
	info.update();
}

function onMapClick(e) {
	var layer = e.target;
    popup
		.setLatLng(e.latlng)
        .setContent('<div id="chart_div" style="width:500px; height:300px;"></div>')
        .openOn(map);
	drawChart(layer.feature.properties);
}

function style(feature) {
	var type = $('#control').find('input:checked')[0].value;

		return {
			fillColor: getColor[type](feature.properties[type]),
			weight: 2,
			opacity: 1,
			color: 'white',
			dashArray: '3',
			fillOpacity: 0.7
		};
}

function makeDateString(dateObj){
	var year = dateObj.getFullYear(),
		month = dateObj.getMonth()+1 < 10 ? '0'+(dateObj.getMonth+1) : dateObj.getMonth+1,
		dateStr = year+''+month;

		return [dateStr, year, month];
}

function sliderChangeCb(dataValues){
	//var dateObj = new Date(+(todayDateObj) - (365-value)*86400000),
	//	dateStr = (makeDataString(dateObj))[0];
	var year = dateValues.getFullYear(),
		month = dateValues.getMonth() + 1,
		dateStr = year+''+month;

		container.trigger('dataChange', [dateStr]);
}

//슬라이더 이벤트
container.on('dataChange', function(e, dateStr){
	targetDateObj = new Date(dateStr.substr(0,4), dateStr.substr(4,2));
	targetDateStr = (makeDateString(targetDateObj))[0];

	//showDate(dateStr);
	drawMap(dateStr);
});


//라디오 버튼 이벤트 
$('#control').find('input').on('change', function(){
	type = $('#control').find('input:checked')[0].value;
	typeText = $('#control').find('input:checked').next('label').text();
	$('#type-text').text(typeText);

	drawMap(targetDateStr);
});

$('#control').buttonset();

//슬라이더 
$(document).ready(function(){
      $("#slider").dateRangeSlider({
        bounds: {min: new Date(2013,2), max: new Date(year,month)},
        defaultValues: {min: new Date(2013, 2), max: new Date(year,month)},
    		valueLabels:"change",
    		durationIn:1000,
    		durationOut:1000,
    		range:{min:{months:1}, max: {months:1}},
    		step:{months:1},
        /*
        slide: function(event, ui){
            sliderChangeCb(ui.value);
        },
        change: function(){
            sliderChangeCb(ui.value);
        },
        */
    		formatter:function(val){
            var month = val.getMonth() + 1,
              year = val.getFullYear();
            return year + "년 " + month+"월";
          },
        scales: [{
          next: function(val){
            var next = new Date(val);
            return new Date(next.setMonth(next.getMonth() + 1));
          },
          label: function(val){
            return "";
          }
        }]//scales
      });//dateRangeSlider arguments
    });//ready function

$("#slider").bind("valuesChanging", function(e, data){
      var dateValues = $("#slider").dateRangeSlider("values").min;
      var month = dateValues.getMonth() + 1,
      year = dateValues.getFullYear();
      sliderChangeCb(dataValues);
      $('#dateval').text(year+" . " + month);
  });
$('#slider').dateRangeSlider({
      slide: function(event, ui) {
        sliderChangeCb(ui.value);
      },
      change: function(event, ui) {
        sliderChangeCb(ui.value);
      }
});


map = L.map('map').setView([37.561, 126.986], 11);			
						
L.tileLayer('https://{s}.tiles.mapbox.com/v3/{id}/{z}/{x}/{y}.png', {
	maxZoom: 18, attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' 
	+ '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' 
	+ 'Imagery © <a href="http://mapbox.com">Mapbox</a>', id: 'examples.map-20v6611k' 
}).addTo(map);

var info = L.control();
var type = $('#control').find('input:checked')[0].value,
    typeText = $('#control').find('input:checked').next('label').text(),
    units = {
        'realPrice': 'won',
        'traffic': 'case'
    };
					
info.onAdd = function (map) {
	this._div = L.DomUtil.create('div', 'info');
	this.update();
	return this._div;
};
					
info.update = function (props) {
	this._div.innerHTML = '<h4>서울 아파트:<span id="type-text">'+typeText+'</span></h4>' +  (props ?
		'<b>' + props.name + '</b><br />' + props.density + ' '+units[type]
		+' / m<sup>2</sup>': '구 위에 마우스를 올려보세요!');
};
					
info.addTo(map);							
					
var legend = L.control({position: 'bottomright'});

legend.onAdd = function (map) {

	var div = L.DomUtil.create('div', 'info legend'),
		grades = {},
		labels = [];
		//from, to;

		grades['realPrice'] = [0, 1000, 2000, 3000, 4000, 5000, 6000, 7000];
		grades['traffic'] = [0, 10, 20, 30, 40, 50, 60, 80];
		/*
		for(var type in grades){
			div.innerHTML += '<div class="item unit '+type+'">단위:'+ units[type]+'</div>';
			for (var i = 0; i < grades.length; i++) {
				div.innerHTML += '<div class = "item "'+type+''
				from = grades[type][i];
				to = grades[type][i + 1];

				labels.push(
					'<i style="background:' + getColor[type](from + 1) + '"></i> ' +
					from + (to ? '&ndash;' + to : '+'));
			}
		}*/

	//div.innerHTML = labels.join('<br>');
	for (var type in grades) {
        div.innerHTML += '<div class="item unit ' + type + '">아파트: ' + units[type] + '</div>';
        for (var i = 0; i < grades[type].length; i++) {
            div.innerHTML +=
                '<div class="item ' + type + '"><i style="background-color:' + getColor[type](grades[type][i]) + '"></i> ' +
                grades[type][i] + (grades[type][i + 1] ? ' &ndash; ' + grades[type][i + 1] + '</div>' : '+</div>');
        }
      }
      
	return div;
};					

legend.addTo(map);

//showDate(todayDateStr);
//makeSliderDates(todayDateObj);
drawMap(targetDateStr);

})(window.jQuery);