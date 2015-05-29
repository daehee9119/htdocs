<?php
//서버이름 localhost인거 수정해야함.
$mysql_host = "mysql1.000webhost.com";
$mysql_database = "a9236188_1";
$mysql_user = "a9236188_1";
$mysql_password = "1423aa";

$connection = mysqli_connect($mysql_host,$mysql_user,$mysql_password, $mysql_database) or die('Error connecting to MySQL server.');
$new_mc1=$_POST['grade'];
$new_mc2=$_POST['number'];
$new_mc3=$_POST['subject'];

if($new_mc1==null||$new_mc2==null||$new_mc3==null)
{
die('Error inserting null');
}

if($new_mc1<0)
{
	die('Error inserting incorrect value to grade');
}


$query = "UPDATE grade_list SET Grade='$new_mc1' WHERE Student_Number='$new_mc2' AND Class_Name='$new_mc3';";
$result = mysqli_query($connection, $query) or die('Error querying database.');
echo "<html><head><link rel='stylesheet' type='text/css' href='style.css' media='screen' />
</head><body>";
echo "<h2>Successfully inserted<br>";
echo "<a href='mysql.html'>go back</a>";
echo "</body></html>";

mysqli_close($connection);
?>