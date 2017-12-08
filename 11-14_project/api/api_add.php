<?php

if (isset($_GET["cName"]) && isset($_GET["cSex"]) && isset($_GET["cBirthday"]) && isset($_GET["cEmail"]) && isset($_GET["cPhone"]) && isset($_GET["cAddr"])) {
    require_once '../connMysql.php';

    $sql = "INSERT INTO `students`(`cName`, `cSex`, `cBirthday`, `cEmail`, `cPhone`, `cAddr`) VALUES (";
    $sql .= "'" . $_GET["cName"] . "',"
            . "'" . $_GET["cSex"] . "',"
            . "'" . $_GET["cBirthday"] . "',"
            . "'" . $_GET["cEmail"] . "',"
            . "'" . $_GET["cPhone"] . "',"
            . "'" . $_GET["cAddr"] . "')";
//print $sql;
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    print "ok";
}
?>

<?php

if (isset($_GET["cName"]) && isset($_GET["cSex"]) && isset($_GET["cBirthday"]) && isset($_GET["cEmail"]) && isset($_GET["cPhone"]) && isset($_GET["cAddr"])) {
    require_once '../connMysql.php';

    $sql = "INSERT INTO `students`(`cName`, `cSex`, `cBirthday`, `cEmail`, `cPhone`, `cAddr`) VALUES (";
    $sql .= "'" . $_POST["cName"] . "',"
            . "'" . $_POST["cSex"] . "',"
            . "'" . $_POST["cBirthday"] . "',"
            . "'" . $_POST["cEmail"] . "',"
            . "'" . $_POST["cPhone"] . "',"
            . "'" . $_POST["cAddr"] . "')";
//print $sql;
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    print "ok";
}
?>