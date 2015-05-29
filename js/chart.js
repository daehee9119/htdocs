// JavaScript Document
google.load("visualization", "1", {packages:["linechart"]});
//google.setOnLoadCallback(drawChart);
function drawChart(d) {
    var year, month,data;
    
    year = d.base_year;
    month = d.base_month;
    var nname = d.name_eng;
     /////////짜잔, ajax 등장/
     $.ajax({
            type: "POST",
            dataType: "json",
            url: "/index.php/topic/get_json_gchart/"+year+"/"+d.name_eng,//으음..
            dataType:'json',
            success:
              function(result) //we're calling the response json array 'result'
            {
            data = new google.visualization.DataTable();
            data.addColumn('string','Year/Month');
            data.addColumn('number','예측 실거래가');
            data.addColumn('number','실거래가');
            var i=1;
            $.each(result,function(key,value){
            data.addRows([[year+'/'+(i++),  parseInt(value[d.name_eng.concat("p")]),  parseInt(value[d.name_eng])]]); 
            });
            
            var options = {
              title: d.name+'예측 그래프',
              hAxis: {title: 'Year/Month',  titleTextStyle: {color: '#333'}},
              vAxis: {minValue: 2000}
            };

            var chart = new google.visualization.AreaChart(
              document.getElementById('chart_div')
            );
            chart.draw(data, options);


          },//end success
            error: function(result){console.log(result);alert('dname: '+nname);}
            
    });//end ajax
////

}     //end drawchart