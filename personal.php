<?php
include 'connection.php';
include 'login.php';
$sql= "SELECT * from student_tbl where mobilenum = ?";
$nimal= mysqli_query($ok ,$sql);
 ?>