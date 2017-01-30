<?php
session_start();
if (isset($_SESSION["manager"])) {
header("location: http://www.zuluirminger.com/SchoolAdmin/index.php");
exit();
}
?>

<?php
if (isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["role"])) {
$manager = preg_replace('#[^A-Za-z0-9]#i', '', $_POST["username"]);
$password = preg_replace('#[^A-Za-z0-9]#i', '', $_POST["password"]);
$role = preg_replace('#[^A-Za-z0-9]#i', '', $_POST["role"]);
include "adminscripts/connect_to_mysql.php";
$sql = mysql_query("SELECT id FROM Users WHERE username='$manager' AND password='$password' AND role='$role' LIMIT 1");
$existCount = mysql_num_rows($sql);
if (($existCount == 1) && ($role == 'IT Technician')) {
    while ($row = mysql_fetch_array($sql)) {
        $id = $row["id"];
    }
    $_SESSION["id"] = $id;
    $_SESSION["manager"] = $manager;
    $_SESSION["password"] = $password;
    $_SESSION["role"] = $role;
    header("location: http://www.zuluirminger.com/SchoolAdmin/index.php");
} else {
    echo 'Your login details were incorrect. Please try again <a href="http://www.zuluirminger.com/SchoolAdmin/index.php">here</a>';
    exit();
}
}
?>

<?php
if (isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["role"])) {
$manager = preg_replace('#[^A-Za-z0-9]#i', '', $_POST["username"]);
$password = preg_replace('#[^A-Za-z0-9]#i', '', $_POST["password"]);
$role = preg_replace('#[^A-Za-z0-9]#i', '', $_POST["role"]);
include "adminscripts/connect_to_mysql.php";
$sql = mysql_query("SELECT id FROM Users WHERE username='$manager' AND password='$password' AND role='$role' LIMIT 1");
$existCount = mysql_num_rows($sql);
if (($existCount == 1) && ($role == 'Student')) {
    while ($row = mysql_fetch_array($sql)) {
        $id = $row["id"];
    }
    $_SESSION["id"] = $id;
    $_SESSION["manager"] = $manager;
    $_SESSION["password"] = $password;
    $_SESSION["role"] = $role;
    header("location: http://www.zuluirminger.com/SchoolAdmin/student/index.php");
} else {
    echo 'Your login details were incorrect. Please try again <a href="http://www.zuluirminger.com/SchoolAdmin/index.php">here</a>';
    exit();
}
}
?>