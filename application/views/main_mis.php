<html>
<head>
  
  <meta content="text/html; charset=utf-8" http-equiv="content-type">
  <link href='http://fonts.googleapis.com/earlyaccess/nanumgothic.css' >
  <link rel="stylesheet" type="text/css" href="../css/style_mis.css" />
  <link rel="icon" href="/image/sunglasses.ico">
  <title>Main Page</title>
  <?php
    var_dump($listr);
    var_dump($listb);
  ?>
</head>
<body>

<div id="wrap">    
    <div id="header">
        <div class="header_container">
            <h1><a href="http://daehee9119.hostei.com">My Homepage</a></h1>
            <h2>Manage = Plan + Execute + Control</h2>
            <div class ="icon">
                <ul>
                    <li class="icon_tit1">
                        <a href="https://www.facebook.com/profile.php?id=100004066069185" title="Facebook" target="_blank">
                            <span class="blind">facebook</span>
                        </a>
                    </li>
                </ul>
            </div><!--icon end-->
        </div><!--header_container end-->
        </div><!--header end-->
        
        <div id="contents">
            
            <div id="cont_tit">
                <div class="tit_container">
                    <h2>"What does not destroy me, makes me stronger."</h2>
                </div><!--tit_container end-->
            </div><!--cont_tit end-->
        
            <div id="cont_cont">    
                    <div class="cont_container">
                        <div class="contents_item column1">
                            <h3 class="icon1">
                                    <span class="icon_img blind">아이콘 이미지</span>
                                
                             </h3>
                             <p class="icon_desc">독후감상문</p>
                             
                             <!--notice-->
                             <div class="notice_book">
                                <div>
                                    <h3>Book Review</h3>
                                    <ul>
                                    <?php foreach($listb as $listitem): ?>
                                    <li><?=anchor('test/view/'.$listitem['no'].'/1',$listitem['content'])?></li>
                                    <?php endforeach; ?>
                                    </ul>

                                    <a href="test/write" title="쓰기" class="more">
                                        <span class="blind">더보기</span>
                                    </a>
                                </div>
                             </div><!--notice end-->
                        </div><!--contents_item column1 end-->
                        
                        <div class="contents_item column2">
                            <h3 class="icon2">
                                <a href="">
                                    <span class="icon_img blind">아이콘 이미지</span>
                                </a>
                             </h3>
                             <p class="icon_desc">현재와 미래의 이력서</p>
                             
                             <!--notice-->
                             <div class="notice_resume">
                                <h3>Resume</h3>
                                <ul>
                                    <?php foreach($listr as $listitem): ?>
                                    <li><?=anchor('test/view/'.$listitem['no'].'/2',$listitem['content'])?></li>
                                    <?php endforeach; ?>
                                    </ul>

                                    <a href="test/write" title="쓰기" class="more">
                                        <span class="blind">더보기</span>
                                    </a>
                             </div><!--notice_resume end-->
                        </div><!--contends_item column2 end-->
                        
                        
                    </div><!--cont_container end-->
            </div><!--cont_cont end-->
        </div><!---contents end-->
<div id="footer">
        <div class="footer_container">
            <ul>
                <li><a href=""><strong>사이트 제작자 : daehee</strong></a></li>
                <li><a href="">목적 : Theory of MIS's PJT</a></li>
                <li><a href="">이력서</a></li>
                <li><a href="">독후감상문</a></li>
            </ul>
        </div><!--foote_container end-->
    </div><!--footer end-->
    
</div><!--wrap div end-->

</body>
</html>
        