
var map = L.map('map').setView([37.561, 126.986], 11);      
var geojson;
var container = $('#container');

L.tileLayer('https://{s}.tiles.mapbox.com/v3/{id}/{z}/{x}/{y}.png', {
  maxZoom: 18, 
  attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' 
  + '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' 
  + 'Imagery © <a href="http://mapbox.com">Mapbox</a>', id: 'examples.map-20v6611k' }).addTo(map);
  
/* //위성 사진
  L.tileLayer('http://xdworld.vworld.kr:8080/2d/Satellite/201301/{z}/{x}/{y}.jpeg', {
        attribution: 'Map data &copy; <a href="http://map.vworld.kr">VWORLD</a>',
        maxZoom: 18
    }).addTo(map);          
*/
// 마우스 호버 효과
var info = L.control();
var type = $('#control').find('input:checked')[0].value,
    typeText = $('#control').find('input:checked').next('label').text(),
    units = {
        'realPrice' : 'won',
        'traffic' : 'case'
    };          


info.onAdd = function (map) {
  this._div = L.DomUtil.create('div', 'info');
  this.update();
  return this._div;
};
          
info.update = function (props) {
  this._div.innerHTML = '<h4>서울 아파트:<span id="type-text">'+typeText+'</span></h4>' 
  +  (props ? '<b>' + props.name + '</b><br />' + props.density + ' ' 
  + units[type] : '구 위에 마우스를 올려보세요!');
};
          
info.addTo(map);    

//라디오 버튼 이벤트
$('#control').find('input').on('change', function(e) {
      type = $('#control').find('input:checked')[0].value;
      typeText = $('#control').find('input:checked').next('label').text();
      //$('#type-text').text(typeText);
      //$('div.legend').find('.item').not('.source').hide();
      //$('div.legend').find('.item').filter('.' + type).show();
      //////////짜잔, ajax 등장/
      if(type == 'realPrice'){
          $.ajax({
              type: "POST",
              dataType: "json",
              url: "/index.php/topic/get_real/201501", //으음..
              dataType:'json',
              success: function(result){ //we're calling the response json array 'result'
          
          $('#sibal').text(result[0].Jongno_Gu);//Test 
          
            $.each(statesData.features,function(key,value){
              //value.properties.base_year=year;
              //value.properties.base_month=month;
              switch(value.properties.name) {
              case "강동구":
                value.properties.density=result[0].Kangdong_Gu;
                break;
              case "송파구":
                value.properties.density=result[0].Songpa_Gu;
                break;
              case "강남구":
                value.properties.density=result[0].Kangnam_Gu;
                break;
              case "서초구":
                value.properties.density=result[0].Seocho_Gu;
                break;
              case "관악구":
                value.properties.density=result[0].Gwanak_Gu;
                break;
              case "동작구":
                value.properties.density=result[0].Dongjak_Gu;
                break;
              case "영등포구":
                value.properties.density=result[0].Youngdeungpo_Gu;
                break;
              case "금천구":
                value.properties.density=result[0].Geumcheon_Gu;
                break;
              case "구로구":
                value.properties.density=result[0].Gooro_Gu;
                break;
              case "강서구":
                value.properties.density=result[0].Gangseo_Gu;
                break;
              case "양천구":
                value.properties.density=result[0].Yangcheon_Gu;
                break;
              case "마포구":
                value.properties.density=result[0].Mapo_Gu;
                break;
              case "서대문구":
                value.properties.density=result[0].Seodaemun_Gu;
                break;
              case "은평구":
                value.properties.density=result[0].Eunpyeong_Gu;
                break;
              case "노원구":
                value.properties.density=result[0].Nowon_Gu;
                break;
              case "도봉구":
                value.properties.density=result[0].Dobong_Gu;
                break;
              case "강북구":
                value.properties.density=result[0].Gangbuk_Gu;
                break;
              case "성북구":
                value.properties.density=result[0].Seongbuk_Gu;
                break;
              case "중랑구":
                value.properties.density=result[0].Joongrang_Gu;
                break;
              case "동대문구":
                value.properties.density=result[0].Dongdaemun_Gu;
                break;
              case "광진구":
                value.properties.density=result[0].Gwangjin_Gu;
                break;
              case "성동구":
                value.properties.density=result[0].Seongdong_Gu;
                break;
              case "용산구":
                value.properties.density=result[0].Yongsan_Gu;
                break;
              case "중구":
                value.properties.density=result[0].Joong_Gu;
                break;
              case "종로구":
                value.properties.density=result[0].Jongno_Gu;
                break;
              default:
                break;
              }//end switch
            });//end foreach jQuery
            geojson.eachLayer(function(e){geojson.resetStyle(e);});
            info.update();
            },//success end
            error: function(result){
              console.log(result);
              alert("씨발 에러!! in 아작스!");
            }
            
              
          });//ajax end */
          $('#type-text').text(typeText);
          $('div.legend').find('.item').not('.source').hide();
          $('div.legend').find('.item').filter('.' + type).show();
        }//if end

        else if(type=='traffic'){   
          
            $.ajax({
              type: "POST",
              dataType: "json",
              url: "/index.php/topic/get_traffic/201502",
              dataType:'json',
              success: function(result){ //we're calling the response json array 'result'
          
            $('#sibal').text(result[0].Jongno_Gu);//Test 
            $.each(statesData.features,function(key,value){
              //value.properties.base_year=year;
              //value.properties.base_month=month;
              switch(value.properties.name) {
              case "영등포구":
                value.properties.density=result[0].Youngdeungpo_Gu;//
                break;
              case "강북구":
                value.properties.density=result[0].Gangbuk_Gu;//
                break;
              case "성북구":
                value.properties.density=result[0].Seongbuk_Gu;//
                break;
              case "중랑구":
                value.properties.density=result[0].Joongrang_Gu;//
                break;
              case "동대문구":
                value.properties.density=result[0].Dongdaemun_Gu;//
                break;
              case "광진구":
                value.properties.density=result[0].Gwangjin_Gu;//
                break;
              case "성동구":
                value.properties.density=result[0].Seongdong_Gu;//
                break;
              case "용산구":
                value.properties.density=result[0].Yongsan_Gu;//
                break;
              case "중구":
                value.properties.density=result[0].Joong_Gu;//
                break;
              case "종로구":
                value.properties.density=result[0].Jongno_Gu;//
                break;
              default:
                break;
              }//end switch
              });//end foreach jQuery
            geojson.eachLayer(function(e){geojson.resetStyle(e);});
            info.update();
            
            },//success end
            error: function(result){
              console.log(result);
              alert("씨발 에러!! in 아작스!");
            }
            
          });//ajax end */
          $('#type-text').text(typeText);
          $('div.legend').find('.item').not('.source').hide();
          $('div.legend').find('.item').filter('.' + type).show();
    }//else if end
    
});
  
$('#control').buttonset();


          
          
// 농도에 따른 색깔 선정
var getColor = {
      
        traffic: function (d) {
            return  d > 1000 ? '#FFF' :
                    d > 80   ? '#800026' :
                    d > 60   ? '#BD0026' :
                    d > 50   ? '#E31A1C' :
                    d > 40   ? '#FC4E2A' :
                    d > 30   ? '#FD8D3C' :
                    d > 20   ? '#FEB24C' :
                    d > 10   ? '#FED976' :
                               '#FFEDA0';
        },
        realPrice: function (d) {
            return  d > 7000 ? '#800026' :
                    d > 6000 ? '#BD0026' :
                    d > 5000 ? '#E31A1C' :
                    d > 4000 ? '#FC4E2A' :
                    d > 3000 ? '#FD8D3C' :
                    d > 2000 ? '#FEB24C' :
                    d > 1000 ? '#FED976' :
                               '#FFEDA0';
        }
}       
          
function style(feature) {
    
    return {
      weight: 2,
      opacity: 1,
      color: 'white',
      dashArray: '3',
      fillOpacity: 0.7,
      fillColor: getColor[type](feature.properties.density),
      
    };
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
          

//      
////
function resetHighlight(e) {
  geojson.resetStyle(e.target);
  info.update();
}
          
var popup = L.popup();

function onMapClick(e) {
  var layer = e.target;
    popup
    .setLatLng(e.latlng)
    .setContent('<div id="chart_div" style="width:500px; height:300px;"></div>')
    .openOn(map);
  drawChart(layer.feature.properties);
}
          
function onEachFeature(feature, layer) {
  layer.on({
  mouseover: highlightFeature,
  mouseout: resetHighlight,
  click: onMapClick
  });
}
          
geojson = L.geoJson(statesData, {
      style: style,
      onEachFeature: onEachFeature
      }).addTo(map);
          
map.attributionControl.addAttribution('data &copy; <a href="http://www.r-one.co.kr/rone/">부동산통계정보시스템</a>');
          
          
var legend = L.control({position: 'bottomright'});

legend.onAdd = function (map) {
    
      var div = L.DomUtil.create('div', 'info legend'),
          grades = {},
          labels = [];
          
          grades['realPrice'] = [0, 1000, 2000, 3000, 4000, 5000, 6000, 7000];
          grades['traffic'] = [0, 10, 20, 30, 40, 50, 60, 80];
  
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


function legendAdd(){
  $('div.legend').find('.item').not('.source').hide();
$('div.legend').find('.item').filter('.' + type).show();
}

legendAdd();