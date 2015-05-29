<html>
<head>
  
  <meta content="text/html; charset=utf-8" http-equiv="content-type">
  <link href='http://fonts.googleapis.com/earlyaccess/nanumgothic.css' >
  <link rel="stylesheet" type="text/css" href="../../css/style_get.css" />
  <link rel="icon" href="/image/sunglasses.ico">
  <title>Main Page</title>

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
                        
                    </div><!--contents_item column1 end-->
                    
                    <div class="contents_item column2">
                        <table>
                            <tr>
                                <td>글번호</td>
                                <td><?=$item['no']?></td>
                            </tr>
                            <tr>
                                <td>제목</td>
                                <td><?=$item['content']?></td>
                            </tr>
                            <tr>
                                <td>조회수</td>
                                <td><?=$item['view']?></td>
                            </tr>
                            <tr>
                                <td>내용</td>
                                <td><?=$item['memo']?></td>
                            </tr>
                            <tr>
                                <td colspan="2"><a href="daehee9119.hostei.com">목록</a></td>
                            </tr>
                        </table>        

                    </div><!--contends_item column2 end-->
                    
                    
                </div><!--cont_container end-->
        </div><!--cont_cont end-->
    </div><!---contents end-->