<?php

require('dbconnect.php');

$sql = "SELECT * FROM employees";
$result=mysqli_query($con,$sql);

$count=mysqli_num_rows($result); //จำนวนแถวที่ดึงมาจากฐานข้อมูล


for($i=0;$i<$count;$i++){
    $row=mysqli_fetch_object($result);
    echo "รหหัสพนักงาน :".$row->id."<br>";
    echo "ชื่อ :".$row->fname."<br>";
    echo "นามสกุล :".$row->lname."<br>";
    echo "<hr>";
}

?>