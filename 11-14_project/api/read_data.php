<?php
require_once '../connMysql.php';
$sql = "SELECT * FROM `students` ORDER BY `cID`";

if ($result = mysqli_query($conn, $sql)) {
    while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
        $json_arr[] = $row;
    }
    $json_result = json_encode($json_arr,JSON_UNESCAPED_UNICODE);
    print $json_result;
} else {
    print "false";
}

mysqli_close($conn);
?>