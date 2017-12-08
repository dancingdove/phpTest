<?php

//if (isset($_GET["cName"]) &&
//        isset($_GET["cSex"]) &&
//        isset($_GET["cBirthday"]) &&
//        isset($_GET["cEmail"]) &&
//        isset($_GET["cPhone"]) &&
//        isset($_GET["cAddr"]) &&
//        isset($_GET["cID"])) {
//    
//    require_once '../connMysql.php';
//
//    $sql = "UPDATE `students` SET "
//            . "`cName`='" . $_GET["cName"] . "',"
//            . "`cSex`='" . $_GET["cSex"] . "',"
//            . "`cBirthday`='" . $_GET["cBirthday"] . "',"
//            . "`cEmail`='" . $_GET["cEmail"] . "',"
//            . "`cPhone`='" . $_GET["cPhone"] . "',"
//            . "`cAddr`='" . $_GET["cAddr"]
//            . "' WHERE `cID` = '" . $_GET["cID"] . "'";
//    
//    mysqli_query($conn, $sql);
//    mysqli_close($conn);
//    print "OK";
//}
?>

<?php

if (isset($_POST["cName"]) &&
        isset($_POST["cSex"]) &&
        isset($_POST["cBirthday"]) &&
        isset($_POST["cEmail"]) &&
        isset($_POST["cPhone"]) &&
        isset($_POST["cAddr"]) &&
        isset($_POST["cID"])) {
    
    require_once '../connMysql.php';

    $sql = "UPDATE `students` SET "
            . "`cName`='" . $_POST["cName"] . "',"
            . "`cSex`='" . $_POST["cSex"] . "',"
            . "`cBirthday`='" . $_POST["cBirthday"] . "',"
            . "`cEmail`='" . $_POST["cEmail"] . "',"
            . "`cPhone`='" . $_POST["cPhone"] . "',"
            . "`cAddr`='" . $_POST["cAddr"]
            . "' WHERE `cID` = '" . $_POST["cID"] . "'";
    
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    print "OK";
}
?>