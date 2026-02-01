<!DOCTYPE HTML>
<html>
<head>
<title> STUDENT SORTED RECORDS </title>
</head>
<body>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="STUDENTDB";
$conn=mysqli_connect($servername,$username,$password,$dbname) or
die(mysqli_connect_error());
$sql = "SELECT * FROM STUDENT";
$result=mysqli_query($conn,$sql);
echo "<br>";
echo "<center><h1> BEFORE SORTING </h1></center>";
echo "<table border='1' align='center'>";
echo "<tr>";
echo "<th>USN</th><th>NAME</th><th>CITY</th></tr>";
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result))
{
echo "<tr>";
echo "<td>".$row["USN"]."</td>";
echo "<td>".$row["NAME"]."</td>";
echo "<td>".$row["CITY"]."</td></tr>";
}
echo "</table>";
}
else
{
echo "<h1>Table Is Empty</h1>";
echo "</table>";
}
$sql = "SELECT * FROM STUDENT order by USN";
$result=mysqli_query($conn,$sql);
echo "<br>";
echo "<center><h1> AFTER SORTING </h1></center>";
echo "<table border='1' align='center'>";
echo "<tr>";
echo "<th>USN</th><th>NAME</th><th>CITY</th></tr>";
echo "<br>";
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result))
{
echo "<tr>";
echo "<td>".$row["USN"]."</td>";
echo "<td>".$row["NAME"]."</td>";
echo "<td>".$row["CITY"]."</td></tr>";
}
echo "</table>";
}
else
{
echo "<h1>Table Is Empty</h1>";
echo "</table>";
}
echo "</table>";
?>
</body>
</html>