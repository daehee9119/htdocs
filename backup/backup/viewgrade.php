<?php
//서버이름 localhost인거 수정해야함.
$mysql_host = "mysql1.000webhost.com";
$mysql_database = "a9236188_1";
$mysql_user = "a9236188_1";
$mysql_password = "1423aa";

$connection = mysqli_connect($mysql_host,$mysql_user,$mysql_password, $mysql_database) or die('Error connecting to MySQL server.');
$query = "SELECT * FROM grade_list;";
$result = mysqli_query($connection, $query) or die('Error querying database.');
echo "<html><head><link rel='stylesheet' type='text/css' href='style.css' media='screen' />
</head><body>";
echo "<table border='2'>";
echo "<tr><td>Student_Number</td><td>Class_Name</td><td>Student_Year</td><td>Semester</td><td>Grade</td></tr>";
while($row = mysqli_fetch_array($result))
{
$mc1=$row['Student_Number'];
$mc2=$row['Class_Name'];
$mc3=$row['Student_Year'];
$mc4=$row['Semester'];
$mc5=$row['Grade'];
echo "<tr align='center'><td>";
echo "$mc1 </td><td>";
echo "$mc2 </td><td>";
echo "$mc3 </td><td>";
echo "$mc4 </td><td>";
echo "$mc5 </td></tr>";
echo "\n";

}//end while
echo "</table>";

echo "<a href='mysql.html'>go back</a>";
echo "</body></html>";
?>

