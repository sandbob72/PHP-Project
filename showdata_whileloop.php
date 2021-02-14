<?php

require('dbconnect.php');

$sql = "SELECT * FROM employees";
$result=mysqli_query($con,$sql);

$count=mysqli_num_rows($result); //จำนวนแถวที่ดึงมาจากฐานข้อมูล


while($row=mysqli_fetch_row($result)){
    echo "รหหัสพนักงาน :".$row[0]."<br>";
    echo "ชื่อ :".$row[1]."<br>";
    echo "นามสกุล :".$row[2]."<br>";
}

?>