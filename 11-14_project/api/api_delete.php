<?php

//if (isset($_POST["cID"])) {
//    require_once '../connMysql.php';
//    $sql = "DELETE FROM `students` WHERE `cID` = " . $_POST["cID"];
////    print $sql;
//    mysqli_query($conn, $sql);
//    mysqli_close($conn);
//    print "OK";
//}
?>

<?php

if (isset($_GET["cID"])) {
    require_once '../connMysql.php';
    $sql = "DELETE FROM `students` WHERE `cID` = " . $_GET["cID"];
//    print $sql;
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    print "OK";
}
?>