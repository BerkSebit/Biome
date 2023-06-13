<?php

$conn = mysqli_connect("localhost", "abc", "abc", "group3");

if (isset($_POST['delete'])) {

    $id = $_POST['id'];

    $delete = mysqli_query($conn, "DELETE FROM `cars` WHERE `id`='$id'");
}
header("Location: addCar.php");
