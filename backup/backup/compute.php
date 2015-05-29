<?php
//서버이름 localhost인거 수정해야함.
$mysql_host = "mysql1.000webhost.com";
$mysql_database = "a9236188_1";
$mysql_user = "a9236188_1";
$mysql_password = "1423aa";

$connection = mysqli_connect($mysql_host,$mysql_user,$mysql_password, $mysql_database) or die('Error connecting to MySQL server.');
$number=$_POST['number'];
$query = "SELECT Grade FROM grade_list WHERE Student_Number='$number';";
$result = mysqli_query($connection, $query) or die('Error querying database.');
$sum=0;
$count=0;

if($number==null)
{
	die('Error null');
}


while($row = mysqli_fetch_array($result))
{

$value=$row['Grade'];
if($value!=0)
	{
	$sum += $value;
		$count++;
	}//end if
}//end while
$avg = $sum/$count;
echo "<html><head><link rel='stylesheet' type='text/css' href='style.css' media='screen' />
</head><body>";
echo "<h2>The average grade is $avg";

echo "<a href='mysql.html'><br>go back</a>";
echo "</body></html>";

?>