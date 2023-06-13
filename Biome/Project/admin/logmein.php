<?php
session_start();
$un = $_POST["username"];
$pass = $_POST["pass"];

if ($un == "abc" && $pass == "abc") {
    $_SESSION["loggedin"] = "1";
    $_SESSION["name"] = $un;
    setcookie("username", $un, time() + 300);
    header("Location: addCar.php");
} else {
    $_SESSION["loggedin"] = "0";
    header("Location: adminLogin.php");
}
