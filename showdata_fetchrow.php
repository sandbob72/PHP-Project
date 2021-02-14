<?php

require('dbconnect.php');

$sql = "SELECT * FROM employees";
$result=mysqli_query($con,$sql);

$row=mysqli_fetch_row($result);

echo "รหหัสพนักงาน :".$row[0]."<br>";
echo "ชื่อ :".$row[1]."<br>";
echo "นามสกุล :".$row[2]."<br>";

$row=mysqli_fetch_row ($result);

echo "รหหัสพนักงาน :".$row[0]."<br>";
echo "ชื่อ :".$row[1]."<br>";
echo "นามสกุล :".$row[2]."<br>";
?>
