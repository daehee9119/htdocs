<!DOCTYPE html>
<html lang="en">
<head>  
  <meta content="text/html; charset=utf-8" http-equiv="content-type">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="../static/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="../static/lib/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

  <link href='http://fonts.googleapis.com/earlyaccess/nanumgothic.css' >
  <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
  <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
  <script src="../js/jquery-1.9.1.min.js"></script>  
  <script src="../jquery-ui-/jquery-ui.js" ></script>
  <script src="../JQRange/jQDateRangeSlider-withRuler-min.js"></script>
  <link rel="stylesheet" href="../JQRange/css/iThing.css" type="text/css" />
  <link rel="stylesheet" type="text/css" href="../css/main.css" />
  <link rel="stylesheet" type="text/css" href="../css/Aristo.css" />
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.css" />
  <link rel="stylesheet" type="text/css" href="../js/leaflet/leaflet.css" />
  <link rel="icon" href="../image/sunglasses.ico">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,400,700" />
  <link rel="stylesheet" type="text/css" href="../js/piling/jquery.pagepiling.css" />
  <link rel="stylesheet" type="text/css" href="../css/demo.css" />

  <!--[if IE]>
    <script type="text/javascript">
       var console = { log: function() {} };
    </script>
  <![endif]-->

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

  <script type="text/javascript" src="../js/piling/jquery.pagepiling.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {

      /*
      * Plugin intialization
      */
        $('#pagepiling').pagepiling({
          menu: '#menu',
          anchors: ['page1', 'page2', 'page3', 'page4'],
          sectionsColor: ['white', '#ee005a', '#2C3E50', '#39C'],
          navigation: {
            'position': 'right',
            'tooltips': ['Page 1', 'Page 2', 'Page 3', 'Pgae 4']
          },
          afterRender: function(){
            $('#pp-nav').addClass('custom');
          },
          afterLoad: function(anchorLink, index){
            if(index>1){
              $('#pp-nav').removeClass('custom');
            }else{
              $('#pp-nav').addClass('custom');
            }
          }
      });


      /*
        * Internal use of the demo website
        */
        $('#showExamples').click(function(e){
        e.stopPropagation();
        e.preventDefault();
        $('#examplesList').toggle();
      });

      $('html').click(function(){
        $('#examplesList').hide();
      });
      });
    </script>

  <title>Main Page</title>
  
</head>
<body>
  <div id="pagepiling">