<?php
//서버이름 localhost인거 수정해야함.

$mysql_host = "mysql1.000webhost.com";
$mysql_database = "a9236188_1";
$mysql_user = "a9236188_1";
$mysql_password = "1423aa";

$connection = mysqli_connect($mysql_host,$mysql_user,$mysql_password, $mysql_database) or die('Error connecting to MySQL server.');
$query = "SELECT * FROM student_list;";
$result = mysqli_query($connection, $query) or die('Error querying database.');
echo "<html><head><link rel='stylesheet' type='text/css' href='style.css' media='screen' />
</head><body>";
echo "<table border='2'>";
echo "<tr><td><b>Student</b></td><td><b>Student_Number</b></td></tr>";
while($row = mysqli_fetch_array($result))
{
$mc1=$row['Name'];
$mc2=$row['Student_Number'];
echo "<tr><td>";
echo "$mc1 </td><td>";
echo "$mc2 </td></tr>";
echo "\n";

}//end while
echo "</table>";

echo "<a href='mysql.html'>go back</a>";
echo "</body></html>";
?>