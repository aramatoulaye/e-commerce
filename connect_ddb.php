<?php
$host="localhost";
$user="root";
$password="";
$db="crud";
$con = mysqli_connect($host, $user, $password, $db);
if (!$con ){
    die("connection failed: " . mysqli_connect_errno());
}
?>
