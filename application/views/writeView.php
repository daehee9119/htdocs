<html>
<head>
  
  <meta content="text/html; charset=utf-8" http-equiv="content-type">
  <link href='http://fonts.googleapis.com/earlyaccess/nanumgothic.css' >
  <link rel="stylesheet" type="text/css" href="../../css/style_get.css" />
  <link rel="icon" href="/image/sunglasses.ico">
  <title>Main Page</title>

<script type="text/javascript">

    function post_to_url(path, params, method) {
        var select = document.getElementById("exam");
        var value = select.options[select.selectedIndex].value;
        var url = path+selected.value;
        alert(url);
        method = method || "post";
        var form = document.createElement("form");
        form.setAttribute("method", method);
        form.setAttribute("action", url);
        //input type hidden name(key) value(params[key]);
        for(var key in params) {
            var hiddenField = document.createElement("input");
            hiddenField.setAttribute("type", "hidden");
            hiddenField.setAttribute("name", key);
            hiddenField.setAttribute("value", params[key]);
            form.appendChild(hiddenField);
        }
        document.body.appendChild(form);
        form.submit();
        
    }
</script>

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
                        <form name="wform" method="post" action="test/writepost/">
                            <table style="margin-left:200px">
                                <tr>
                                    <td>제목</td>
                                    <td><input type="text" name="cont" size="39"></td>
                                </tr>

                                <tr>
                                    <td>내용</td>
                                    <td>
                                        <textarea name="memo" cols=60 rows=14 size="39"></textarea>
                                    </td>
                                </tr>
                            </table>

                            <table class="write_table">
                                <tr>
                                    <td>
                                        <p align="right">
                                            <b>
                                            <input type=button value="등록" onClick="post_to_url('test/writepost/',{'test':'ming'});" 
                                            style="width:75; margin-left:370px; margin-top:20px; font-family:돋움; background-color:#eff7f9; border:1 solid #A0DBE4">

                                            </b>
                                        </p>
                                    </td>
                                    <td>
                                        <select name="select" size="5" id="exam">
                                            <option value="1">book</option>
                                            <option value="2">resume</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div><!--contents_item column1 end-->
                    
                </div><!--cont_container end-->
        </div><!--cont_cont end-->
    </div><!---contents end-->