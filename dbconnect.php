<?php 
session_start();
    $host = "localhost";
    $user = "620112230005";
    $passwd = "NVrYawyszI5Z4iop";
    $db = "620112230005__fiscal";

    $connect=mysqli_connect("$host","$user","$passwd","$db") or die("เกิดข้อผิดพลาดเกิดขึ้น");
?>