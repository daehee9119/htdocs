<?php
//서버이름 localhost인거 수정해야함.
$mysql_host = "mysql1.000webhost.com";
$mysql_database = "a9236188_1";
$mysql_user = "a9236188_1";
$mysql_password = "1423aa";

$connection = mysqli_connect($mysql_host,$mysql_user,$mysql_password, $mysql_database) or die('Error connecting to MySQL server.');
$new_mc1=$_POST['studentname'];
$new_mc2=$_POST['studentnumber'];

if($new_mc1==null||$new_mc2==null)
{
die('Error inserting null');
}


$query = "INSERT INTO student_list(Name,Student_Number) VALUES('$new_mc1','$new_mc2');";
$result = mysqli_query($connection, $query) or die('Error querying database.');
echo "<html><head><link rel='stylesheet' type='text/css' href='style.css' media='screen' />
</head><body><div id='menu'></div><div id='contents'><div class='right'>";
echo "<h1>Successfully inserted";
echo "<a href='mysql.html'>go back</a></h1>";
echo "</div></div></body></html>";

mysqli_close($connection);
?>