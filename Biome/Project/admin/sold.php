<?php

$conn = mysqli_connect("localhost", "abc", "abc", "group3");

if (isset($_POST['sold'])) {

    $id = $_POST['id'];

    $sql = "SELECT * FROM  group3.cars WHERE `id`='$id'";
    $all_cars = $conn->query($sql);
    $row = mysqli_fetch_assoc($all_cars);


    $brand = $row["brand"];
    $model = $row["model"];
    $yearCar = $row["yearCar"];
    $secondHand = $row["secondHand"];
    $Image_01 = mysqli_fetch_assoc($conn->query("SELECT `Image_01` FROM  group3.cars WHERE `id`='$id' "))["Image_01"];
    $Image_02 = mysqli_fetch_assoc($conn->query("SELECT `Image_02` FROM  group3.cars WHERE `id`='$id'"))["Image_02"];
    $fuelType = $row["fuelType"];
    $bodyType = $row["bodyType"];
    $Gear = $row["Gear"];
    $color = $row["color"];
    $Kilometer = $row["Kilometer"];
    $price = $row["price"];
    $cost = $row["cost"];
    $date = date("Y-m-d H:i:s");


    $sold_car = "INSERT INTO soldcars(brand,model,yearCar,secondHand,image_01,image_02,fuelType,bodyType,Gear,color,Kilometer,price,cost,date) 
    VALUES ('" . $brand . "','" . $model . "','" . $yearCar . "','" . $secondHand . "','" . $Image_01 . "','" . $Image_02 . "','" . $fuelType . "','" . $bodyType . "','" . $Gear . "','" . $color . "','" . $Kilometer . "','" . $price . "','" . $cost . "','" . $date . "')";
    mysqli_query($conn, $sold_car);


    // Delete Sold car from stock

    $id = $_POST['id'];
    $delete = mysqli_query($conn, "DELETE FROM `cars` WHERE `id`='$id'");

    header("Location: carSold.php");
}
