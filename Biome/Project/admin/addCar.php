<?php

require("connect.php");

$conn = mysqli_connect("localhost", "abc", "abc", "group3");

$sql = "SELECT * FROM  group3.cars";
$all_cars = $conn->query($sql);


if ($_POST['add_car']) {


    if (!$conn) {
        die("connection failed");
    }



    $brand = $_POST["brand"];
    $model = $_POST["model"];
    $yearCar = $_POST["yearCar"];
    $secondHand = $_POST["secondHand"];
    $image_01 = $_FILES["image_01"]["name"];
    $image_02 = $_FILES["image_02"]["name"];
    $fuelType = $_POST["fuelType"];
    $bodyType = $_POST["bodyType"];
    $Gear = $_POST["Gear"];
    $color = $_POST["color"];
    $Kilometer = $_POST["Kilometer"];
    $price = $_POST["price"];
    $cost = $_POST["cost"];



    $target_dir = "up/";
    $target_file1 = $target_dir . basename($_FILES["image_01"]["name"]);
    $target_file2 = $target_dir . basename($_FILES["image_02"]["name"]);


    move_uploaded_file($_FILES["image_01"]["tmp_name"],  $target_file1);
    move_uploaded_file($_FILES["image_02"]["tmp_name"],  $target_file2);


    $add_car = "INSERT INTO cars(brand,model,yearCar,secondHand,image_01,image_02,fuelType,bodyType,Gear,color,Kilometer,price,cost) 
    VALUES ('" . $brand . "','" . $model . "','" . $yearCar . "','" . $secondHand . "','" . $target_file1 . "','" . $target_file2 . "','" . $fuelType . "','" . $bodyType . "','" . $Gear . "','" . $color . "','" . $Kilometer . "','" . $price . "','" . $cost . "')";
    mysqli_query($conn, $add_car);

    header("Location: addCar.php");
}

?>


<html>

<head>
    <title>Add Car</title>
    <link rel="icon" href="logob.png">
    <style>
        /*Buttons*/
        .btn {
            background-color: transparent;
            right: 50px;
            border: 2px solid #EADDCA;
            box-shadow: 0 0 30px rgb(0, 0, 0, .5);
            border-radius: 25px;
            padding: 12px 15px;
            font-size: 15px;
            position: flex;
            display: inline-block;
            cursor: pointer;
            text-align: center;
            justify-content: center;
            color: #EADDCA;
        }

        .btn:hover {
            background-color: rgb(200, 200, 200);
        }


        /* Add Car  Section*/
        section {
            padding-top: 80px;
        }

        .section {
            display: flex;
            justify-content: center;
            align-items: center;
        }


        .container {
            margin: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 1500px;
            height: 300px;
            background: rgb(163, 163, 163);
            border: 2px solid lightgray;
            border-radius: 20px;
            backdrop-filter: blur(20px);
            box-shadow: 0 0 30px lightgray;
        }


        .container table tr td {
            height: 50px;
            border-spacing: 0;
            padding: 0 50px;

        }

        .inputBox span {
            font-size: 15px;
        }

        .inputBox .box {
            width: 100px;

        }

        /* Cars Section*/
        .cars {
            padding-top: 30px;
            max-width: 1100px;
            width: 95%;
            margin: 20px auto;
            display: table;
            justify-content: center;
            align-items: center;
            margin: auto;
            /* border: 2px solid black; */

        }

        .carCard {
            max-width: 100px;
            flex: 1 1 210px;
            text-align: center;
            height: 200px;
            margin: 20px;
            background: rgb(163, 163, 163);
            border: 2px solid lightgray;
            border-radius: 20px;
            backdrop-filter: blur(20px);
            box-shadow: 0 0 30px lightgray;
        }
    </style>
</head>

<body>
    <?php include 'adminHeader.php'; ?>
    <!-- add cars section starts -->

    <section class="section">
        <form action="addCar.php" method="post" enctype="multipart/form-data">
            <div class="container">
                <table border="0" cellspacing="0" cellpading="0">
                    <tr>
                        <td>
                            <div class="inputBox">
                                <span>Make (required)</span>
                                <input type="text" required placeholder="Enter brand" name="brand" class="box">
                            </div>
                        </td>
                        <td>
                            <div class="inputBox">
                                <span>Model (required)</span>
                                <input type="text" required placeholder="Enter model" name="model" class="box">
                            </div>
                        </td>
                        <td>
                            <div class="inputBox">
                                <span>Year (required)</span>
                                <input type="number" min="1950" max="2024" required placeholder="Enter year" name="yearCar" class="box">
                            </div>
                        </td>
                        <td>
                            <div class="inputBox">
                                <span>Gear&nbsp;(required)</span>
                                <select name="Gear" required class="box">
                                    <option selected value="Automatic">Automatic</option>
                                    <option value="Manual">Manual</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="inputBox">
                                <span>Image&nbsp;01&nbsp;(required)</span>
                                <input type="file" name="image_01" class="box" required accept="image/jpg , image/jpeg , image/png , image/webp">
                            </div>
                        </td>
                        <td>
                            <div class="inputBox">
                                <span>Image&nbsp;02&nbsp;(required)</span>
                                <input type="file" name="image_02" class="box" required accept="image/jpg , image/jpeg , image/png , image/webp">
                            </div>
                        </td>
                        <td>
                            <div class="inputBox">
                                <span> Second&nbsp;Hand&nbsp;(required)</span>
                                <select name="secondHand" class="box" required>
                                    <option selected value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="inputBox">
                                <span>Fuel&nbsp;Type&nbsp;(required)</span>
                                <select name="fuelType" required class="box">
                                    <option selected value="Gasoline">Gasoline</option>
                                    <option value="Electric">Electric</option>
                                    <option value="Diesel">Diesel</option>
                                    <option value="Hybrid">Hybrid</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="inputBox">
                                <span>Body&nbsp;Type&nbsp;(required)</span>
                                <select name="bodyType" required class="box">
                                    <option selected value="Sedan">Sedan</option>
                                    <option value="SUV">SUV</option>
                                    <option value="Hatchback">Hatchback</option>
                                    <option value="Cabrio">Cabrio</option>
                                    <option value="Coupe">Coupe</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="inputBox">
                                <span>Color (required)</span>
                                <select name="color" required class="box">
                                    <option selected value="White">White</option>
                                    <option value="Black">Black</option>
                                    <option value="Pink">Pink</option>
                                    <option value="Green">Green</option>
                                    <option value="Red">Red</option>
                                    <option value="Silver">Silver</option>
                                    <option value="Yellow">Yellow</option>
                                    <option value="Orange">Orange</option>
                                    <option value="Gold">Gold</option>
                                    <option value="Blue">Blue</option>
                                    <option value="Brown">Brown</option>
                                    <option value="Purple">Purple</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="inputBox">
                                <span>Kilometer&nbsp;(required)</span>
                                <input type="number" min="0" max="999999999" required placeholder="Enter kilometer " name="Kilometer" class="box">
                            </div>
                        </td>
                        <td>
                            <div class="inputBox">
                                <span>Price (required)</span>
                                <input type="number" min="0" max="9999999999" required placeholder="Enter price" name="price" class="box">
                            </div>
                        </td>
                        <td>
                            <div class="inputBox">
                                <span>Cost (required)</span>
                                <input type="number" min="0" max="9999999999" required placeholder="Enter cost" name="cost" class="box">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="7" align="center">
                            <input type="submit" value="Add Car" name="add_car" class="btn">
                        </td>
                    </tr>
                </table>
            </div>
        </form>

    </section>

    <!-- add cars section ends -->

    <!-- car's stock  section starts -->


    <section class="cars">
        <h1 align="center" style="font-size:30px;">Stock</h1>
        <?php
        while ($row = mysqli_fetch_assoc($all_cars)) {

        ?>

            <table class="carCard" border="0">
                <tr>
                    <td> <img src="<?php echo $row["Image_01"]; ?>  " alt="" width="600px"> </td>
                    <td> <img src="<?php echo $row["Image_02"]; ?> " alt="" width="600px"> </td>
                    <td>
                        <table class="innerTable" border="0" cellspacing="5" cellpading="5">
                            <tr>
                                <td colspan="2"><span id="dot">Brand&nbsp;:</span>&nbsp;<?php echo $row["brand"]; ?></td>
                            </tr>
                            <tr>

                                <td colspan="2"><span id="dot">Model&nbsp;:</span>&nbsp;<?php echo $row["model"]; ?></td>
                            </tr>
                            <tr>

                                <td colspan="2"><span id="dot">Year&nbsp;:</span>&nbsp;<?php echo $row["yearCar"]; ?></td>
                            </tr>
                            <tr>
                                <td colspan="2"><span id="dot">Fuel&nbsp;Type&nbsp;:</span>&nbsp;<?php echo $row["fuelType"]; ?></td>
                            </tr>
                            <tr>
                                <td colspan="2"><span id="dot">Body&nbsp;Type&nbsp;:</span>&nbsp;<?php echo $row["bodyType"]; ?></td>
                            </tr>
                            <tr>
                                <td colspan="2"><span id="dot">Gear&nbsp;:</span>&nbsp;<?php echo $row["Gear"]; ?></td>
                            </tr>
                            <tr>
                                <td colspan="2"><span id="dot">Color&nbsp;:</span>&nbsp;<?php echo $row["color"]; ?></td>
                            </tr>
                            <tr>
                                <td colspan="2"><span id="dot">Second&nbsp;Hand&nbsp;:</span>&nbsp;<?php echo $row["secondHand"]; ?></td>
                            </tr>
                            <tr>
                                <td colspan="2"><span id="dot">Kilometer&nbsp;:</span>&nbsp;<?php echo $row["Kilometer"]; ?></td>
                            </tr>
                            <tr>
                                <td colspan="2"><span id="dot">Price&nbsp;:</span>&nbsp;<?php echo $row["price"]; ?>&nbsp;₺</td>
                            </tr>
                            <tr>
                                <td colspan="2"><span id="dot">Cost&nbsp;:</span>&nbsp;<?php echo $row["cost"]; ?>&nbsp;₺</td>
                            </tr>
                            <tr>
                                <td><br></td>
                                <td><br></td>
                            </tr>
                            <tr>
                                <td>
                                    <form action="delete.php" method="post">

                                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">

                                        <button class="btn" name="delete">DELETE</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="sold.php" method="post">

                                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">

                                        <button class="btn" name="sold">&nbsp;&nbsp;SOLD&nbsp;&nbsp;</button>
                                    </form>
                                </td>

                            </tr>
                        </table>
                </tr>
            </table>

        <?php
        }

        ?>

    </section>
    <!-- car's stock  section ends -->
</body>

</html>