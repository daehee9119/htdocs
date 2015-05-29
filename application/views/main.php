
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,400,700" />
    <link rel="stylesheet" type="text/css" href="../js/jquery.pagepiling.css" />
    <link rel="stylesheet" type="text/css" href="../css/demo.css" />
  
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
    <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
    <script src="../js/jquery-1.9.1.min.js"></script>  
    <script src="../jquery-ui-/jquery-ui.js" ></script>
    
    <link rel="stylesheet" href="../JQRange/css/iThing.css" type="text/css" />
    <!--라디오 버튼 꾸미기-->
    <link rel="stylesheet" type="text/css" href="../css/Aristo.css" />
    <link rel="stylesheet" type="text/css" href="../css/main.css" />
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
   <link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.css" />
    <link rel="icon" href="../image/sunglasses.ico">
    <!--[if IE]>
        <script type="text/javascript">
             var console = { log: function() {} };
        </script>
    <![endif]-->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

    <script type="text/javascript" src="../js/jquery.pagepiling.min.js"></script>
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
                    'tooltips': ['Home', 'About Pjt', 'Features', 'Feedback']
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

</head>
<body>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

<iframe src="http://ghbtns.com/github-btn.html?user=anqsdwe&repo=html&type=watch&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="152" height="20" id="starGithub"></iframe>

    <ul id="menu">
        <li data-menuanchor="page1" class="active"><a href="#page1">HOME</a></li>
        <li data-menuanchor="page2"><a href="#page2">ABOUT PJT</a></li>
        <li data-menuanchor="page3"><a href="#page3">FEATURES</a></li>
    </ul>


    <div id="pagepiling">
        <div class="section" id="section1">
            <h1>2015 KOOKMIN UNIVERSITY CAPSTONE DESIGN</h1>
            <p>검색 트래픽 데이터와 서울 아파트 매매가격간의 상관관계</p>
            <img src="imgs/pagePiling-plugin.gif" alt="pagePiling" />
            <br />

            <div id="download"><a href="https://github.com/alvarotrigo/pagePiling.js/archive/master.zip">Download</a></div><br />

            <p id="donations">FOR THE LAST PRESENTATION</p>
        </div><!--section1-->

        <div class="section" id="section2">
            <div class="intro">
                <div id="colors"></div>
                <h1>jQuery plugin</h1>
                <p>Pile your sections one over another and access them scrolling or by URL!</p>
                <div id="markup">
                    <script src="https://gist.github.com/alvarotrigo/4a87a4b8757d87df8a72.js"></script>
                </div>
            </div>
        </div><!--section2-->

        <div class="section" id="section3">
            <div class="intro">
                <div id="container">

                <div id="control">
                <input type="radio" id="radio1" name="type" value="realPrice" checked><label for="radio1">아파트 매매가</label>
                <input type="radio" id="radio2" name="type" value="traffic"><label for="radio2">검색지수</label>
                </div><!--control end-->

                <div id="slider-container">
                    <div id="slider">
                    <!--<span id="dateval" style="font-size:20px;color:white;">2013 . 2</span>-->
                    </div>
            
                </div><!--slider_container end-->
            
                <div id="map"></div>
      
            </div><!--container end-->
            </div>
        </div>



    <div id="infoMenu">
        <ul>
            <li><a href="#">Made by Fantastic Apartment</a></li>
            <li>
                <a href="#" id="showExamples">Contact</a>
                <div id="examplesList">
                    <div class="column">
                        <h3>DEVELOPER</h3>
                        <ul>
                            <li><a href="https://www.facebook.com/profile.php?id=100004066069185" target="_blank">김대희</a></li>
                            <li><a href="https://www.facebook.com/jeongman.an.5" target="_blank">안정만</a></li>
                        </ul>
                    </div>

                    <div class="column">
                        <h3>DATA ANALYST</h3>
                        <ul>
                            <li><a href="https://www.facebook.com/junho.song.75839" target="_blank">송준호</a></li>
                            <li><a href="https://www.facebook.com/jeongman.an.5" target="_blank">안정만</a></li>
                        </ul>
                    </div>

                    <div class="column">
                        <h3>DESIGNER & DC</h3>
                        <ul>
                            <li><a href="https://www.facebook.com/hg.joe.9" target="_blank">조현걸</a></li>
                        </ul>
                    </div>
                </div>

            </li>
            <li><a href="https://github.com/anqsdwe/html" target="_blank">Documentation</a></li>
        </ul>
    </div>
    <script src="../JQRange/jQDateRangeSlider-withRuler-min.js"></script>
    <script type="text/javascript" src="../js/slider.js"></script>
    <script type="text/javascript" src="../js/seoul.js"></script>
    <script type="text/javascript" src="../js/jquery-ui-1.10.2.custom.min.js"></script>
    <script type="text/javascript" src="../js/script.js"></script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="../js/chart.js"></script>
</body>
</html>
