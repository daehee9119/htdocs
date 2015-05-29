<?php
//서버이름 localhost인거 수정해야함.
$mysql_host = "localhost";
$mysql_database = "scott";
$mysql_user = "scott";
$mysql_password = "tiger";

$connection = mysqli_connect($mysql_host,$mysql_user,$mysql_password, $mysql_database) or die('Error connecting to MySQL server.');
$query = "SELECT * FROM house;";
$result = mysqli_query($connection, $query) or die('Error querying database.');
echo "<html><head>kkk"
?>


<?php
echo"</head><body>";
echo "한글확인";
 
echo "<table border='2'><tr align='center'><tr><td>날짜</td><td>노원구</td><td>마포구</td><td>은평구</td></tr>";
while($row = mysqli_fetch_array($result))
{
$mc1=$row['날짜'];
$mc2=$row['노원구'];
$mc3=$row['마포구'];
$mc4=$row['은평구'];
echo "<tr align='center'><td>";
echo "$mc1 </td><td>";
echo "$mc2 </td><td>";
echo "$mc3 </td><td>";
echo "$mc4 </td></tr>";
echo "\n";

}//end while
echo "</table>";

echo "<a href='mysql.html'>go back</a>";
?>
<div id="slider" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false">
<a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 53.021978021978%;">
</a></div>


</body></html>

