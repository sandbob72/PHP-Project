<?php

require('dbconnect.php');

$sql = "SELECT * FROM employees";
$result=mysqli_query($con,$sql);

// $row=mysqli_fetch_array($result,MYSQLI_NUM);
// echo "รหหัสพนักงาน :".$row[0]."<br>";
// echo "ชื่อ :".$row[1]."<br>";
// echo "นามสกุล :".$row[2]."<br>";


//$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
// echo "รหหัสพนักงาน :".$row["id"]."<br>";
// echo "ชื่อ :".$row["fname"]."<br>";
// echo "นามสกุล :".$row["lname"]."<br>";

$row=mysqli_fetch_array($result,MYSQLI_BOTH);
echo "รหหัสพนักงาน :".$row["id"]."<br>";
echo "ชื่อ :".$row[1]."<br>";
echo "นามสกุล :".$row["lname"]."<br>";


?>