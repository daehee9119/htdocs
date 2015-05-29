// JavaScript Document
(function($){

    $(document).ready(function(){
      $("#slider").dateRangeSlider({
        bounds: {min: new Date(2013, 1), max: new Date(2015, 2)},
        defaultValues: {min: new Date(2015, 1), max: new Date(2015,1)},
			arrows:false,
		valueLabels:"hide",
		//durationIn:1000,
		//durationOut:1000,
		range:{min:{months:1}, max: {months:1}},
		step:{months:1},
		formatter:function(val){
        	var month = val.getMonth() + 1,
	        year = val.getFullYear();
	        return year + "Y " + month+"M";
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
      alert("슬라이더 그리기!");
      console.log(result);
    });//ready function

$("#slider").bind("valuesChanging", function(e, data){
	  var dateValues = $("#slider").dateRangeSlider("values").min;
	  
      var month = (dateValues.getMonth() + 1 < 10) ? '0' + (dateValues.getMonth() + 1) : dateValues.getMonth() + 1,									 
          year = dateValues.getFullYear();
	  var dbdate=year+""+month;
	  $('#dateval').text(year+"."+month);
	  var type = $('#control').find('input:checked')[0].value;
	  alert("slider change");
	  //////////짜잔, ajax 등장/
	   	if(type=='realPrice'){   
	   		alert("slider traffic");
	      	$.ajax({
	            type: "POST",
				dataType: "json",
	            url: "/index.php/topic/get_real/" + dbdate, //으음..
				dataType:'json',
	            success: function(result){ //we're calling the response json array 'result'
					
					$('#sibal').text(result[0].Jongno_Gu);//Test 
	        
	  				$.each(statesData.features,function(key,value){
	  					value.properties.base_year=year;
	  					value.properties.base_month=month;
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
	          layer.eachLayer(function(e){layer.resetStyle(e);});
	          info.update();
	          },
	          error: function(result){
	            console.log(result);
	            alert("에러!! in 아작스!");
	          }
	          
	            
	        });//ajax end */
        }//if end

        else if(type=='traffic'){   
        	alert("slider traffic");
	          $.ajax({
	            type: "POST",
	            dataType: "json",
	            url: "/index.php/topic/get_traffic/" + dbdate,
	            dataType:'json',
	            success: function(result){ //we're calling the response json array 'result'
	        
	          $('#sibal').text(result[0].Jongno_Gu);//Test 
	          $.each(statesData.features,function(key,value){
	            value.properties.base_year=year;
	            value.properties.base_month=month;
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
	          layer.eachLayer(function(e){layer.resetStyle(e);});
	          info.update();
	          },
	          error: function(result){
	            console.log(result);
	            alert("에러!! in 아작스!");
	          }
	          
	        });//ajax end */
		}//else if end

  });
  })(jQuery);