<?php

if (isset($_GET["userid"]) && isset($_GET["temperature"])) {
    require_once 'connMysql.php';
    $sql_query = "SELECT * FROM `temperature_db` WHERE `userID`=" . $_GET["userid"];

//print $sql_query;

    $ret = mysqli_query($conn, $sql_query);
    if (mysqli_num_rows($ret) > 0) {
        print "0";
    } else {
        date_default_timezone_set('Asia/Taipei');
        $sql = "INSERT INTO `temperature_db` (`userID`,`temperature`,`datetime`) VALUES (";
        $sql .= "'" . $_GET["userid"] . "',";
        $sql .= "'" . $_GET["temperature"] . "',";
        $sql .= "'" . date("Y/m/d H:i:s") . "')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            print "1";
        } else {
            print "3";
        }
    }

    mysqli_close($conn);
//print "新增成功";
}
?>