<?php

require('dbconnect.php');

$sql = "SELECT * FROM employees";
$result=mysqli_query($con,$sql);

$row=mysqli_fetch_assoc ($result);

echo "รหหัสพนักงาน :".$row["id"]."<br>";
echo "ชื่อ :".$row["fname"]."<br>";
echo "นามสกุล :".$row["lname"]."<br>";

$row=mysqli_fetch_assoc ($result);

echo "รหหัสพนักงาน :".$row["id"]."<br>";
echo "ชื่อ :".$row["fname"]."<br>";
echo "นามสกุล :".$row["lname"]."<br>";

?>