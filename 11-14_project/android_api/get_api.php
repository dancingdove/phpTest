<?php
if (isset($_GET["userid"]) && isset($_GET["temperature"])) {
require_once 'connMysql.php';
date_default_timezone_set('Asia/Taipei');

$sql = "INSERT INTO `temperature_db` (`userID`,`temperature`,`datetime`) VALUES (";
$sql .= "'" . $_GET["userid"] . "',";
$sql .= "'" . $_GET["temperature"] . "',";
$sql .= "'" . date("Y/m/d H:i:s") . "')";
//print $sql;

mysqli_query($conn, $sql);

mysqli_close($conn);
print "新增成功";
}
?>
