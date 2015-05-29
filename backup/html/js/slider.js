// JavaScript Document
(function($){
	
	var current, year, month, day, days, i, j;
  	current = new Date();
  	year = (year) ? year : current.getFullYear();
	month = (month) ? month : current.getMonth();
  	var k = year-2008;
	var defaultYear = year-k;
	
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
  })(jQuery);