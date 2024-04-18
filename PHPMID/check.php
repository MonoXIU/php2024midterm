<?php
session_start();

$mychID = "chair"; 
$mychPWD = "123";

$myreID = "reviewer"; 
$myrePWD = "234";

$myauID = "author";
$myauPWD = "345";

$id = $_POST["id"];
$pwd = $_POST["pwd"];
$selectedRole = $_POST["role"]; 

function setLoginCookie($username) {
    setcookie("username", $username, time() + (86400 * 7), "/");
}

if (($mychID == $id) && ($mychPWD == $pwd) && ($selectedRole == "Chair")) {
    $_SESSION["login"] = "ch";
    setLoginCookie($id);
    header("Location: chair.php");
} else if (($myreID == $id) && ($myrePWD == $pwd) && ($selectedRole == "Reviewer")) {
    $_SESSION["login"] = "re";
    setLoginCookie($id);
    header("Location: reviewer.php");
} else if (($myauID == $id) && ($myauPWD == $pwd) && ($selectedRole == "Author")) {
    $_SESSION["login"] = "au";
    setLoginCookie($id);
    header("Location: author.php");
} else {
    $_SESSION["login"] = "No";
    header("Location: fail.php");
}
?>