<?php

$servername = "localhost";
$username = "root";
$passwd = "1234";
$database = "db";


$conn = mysqli_connect($servername, $username, $passwd, $database);
if ($conn->connect_error) {
    print "fail " . $conn->connect_error;
} else
    $conn->query("SET NAMES utf8");  //支援中文

$sql = "select * from price where brand='華碩'";
mysqli_query($conn, $sql);
?>