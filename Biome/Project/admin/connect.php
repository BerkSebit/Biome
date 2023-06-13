<?php
session_start();

if (isset($_SESSION)) {
    if (!$_SESSION["loggedin"] == "1") {
        header("Location: adminLogin.php");
    }
}
