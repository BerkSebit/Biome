<?php
session_start();
$_SESSION["loggedin"] = "0";

//session_unset();
//session_destroy();
header("Location: adminLogin.php");

?>