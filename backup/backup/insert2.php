<?php
//서버이름 localhost인거 수정해야함.
$mysql_host = "mysql1.000webhost.com";
$mysql_database = "a9236188_1";
$mysql_user = "a9236188_1";
$mysql_password = "1423aa";

$connection = mysqli_connect($mysql_host,$mysql_user,$mysql_password, $mysql_database) or die('Error connecting to MySQL server.');
$new_mc1=$_POST['number'];
$new_mc2=$_POST['subject'];
$new_mc3=$_POST['year'];
$new_mc4=$_POST['semester'];
$new_mc5=$_POST['grade'];

if($new_mc1==null||$new_mc2==null||$new_mc3==null||$new_mc4==null||$new_mc5==null)
{
die('Error inserting null');
}
if($new_mc3!='1'&&$new_mc3!='2'&&$new_mc3!='3'&&$new_mc3!='4')
{
	die('Error inserting incorrect value to year');
}
if($new_mc4!='1'&&$new_mc4!='2')
{
	die('Error inserting incorrect value to semester');
}

if($new_mc5<0)
{
	die('Error inserting incorrect value to grade');
}


$query = "INSERT INTO grade_list(Student_Number,Class_Name,Student_Year,Semester,Grade) VALUES('$new_mc1','$new_mc2','$new_mc3','$new_mc4','$new_mc5');";
$result = mysqli_query($connection, $query) or die('Error querying database.');
echo "<html><head><link rel='stylesheet' type='text/css' href='style.css' media='screen' />
</head><body><div id='menu'></div><div id='contents'><div class='right'>";
echo "<h2>Successfully inserted<br>";
echo "<a href='mysql.html'>go back</a>";
echo "</div></div></body></html>";

mysqli_close($connection);
?>