<?php

require("connect.php");

$conn = mysqli_connect("localhost", "abc", "abc", "group3");

$sql = "SELECT * FROM  group3.soldcars";
$all_cars = $conn->query($sql);

?>

<html>

<head>
    <title>Cars Sold</title>
    <link rel="icon" href="Logob.png">
    <style>
        h1 {
            margin-top: 90px;
        }

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

    <h1 align="center" style="font-size:30px;">Sold Cars</h1>

    <!-- Sold cars section starts -->

    <section class="cars">
        <?php
        while ($row = mysqli_fetch_assoc($all_cars)) {

        ?>
            <table class="carCard" border="0">
                <tr>
                    <td> <img src="<?php echo $row["Image_01"]; ?>  " alt="" width="500px"> </td>
                    <td> <img src="<?php echo $row["Image_02"]; ?> " alt="" width="500px"> </td>
                    <td>
                        <table class="innerTable" border="0" cellspacing="5" cellpading="5">
                            <tr>
                                <td>
                                    <h2>Profit&nbsp;:&nbsp;<?php echo $row["price"] - $row["cost"]; ?>&nbsp;₺</h2>
                                </td>
                            </tr>
                            <tr>
                                <td><b><span id="dot">Sold&nbsp;Date&nbsp;:</span>&nbsp;</b></td>
                            </tr>
                            <tr>
                                <td><b><?php echo $row["date"]; ?></b></td>
                            </tr>
                            <tr>
                                <td><span id="dot">Brand&nbsp;:</span>&nbsp;<?php echo $row["brand"]; ?></td>
                            </tr>
                            <tr>

                                <td><span id="dot">Model&nbsp;:</span>&nbsp;<?php echo $row["model"]; ?></td>
                            </tr>
                            <tr>

                                <td><span id="dot">Year&nbsp;:</span>&nbsp;<?php echo $row["yearCar"]; ?></td>
                            </tr>
                            <tr>
                                <td><span id="dot">Fuel&nbsp;Type&nbsp;:</span>&nbsp;<?php echo $row["fuelType"]; ?></td>
                            </tr>
                            <tr>
                                <td><span id="dot">Body&nbsp;Type&nbsp;:</span>&nbsp;<?php echo $row["bodyType"]; ?></td>
                            </tr>
                            <tr>
                                <td><span id="dot">Gear&nbsp;:</span>&nbsp;<?php echo $row["Gear"]; ?></td>
                            </tr>
                            <tr>
                                <td><span id="dot">Color&nbsp;:</span>&nbsp;<?php echo $row["color"]; ?></td>
                            </tr>
                            <tr>
                                <td><span id="dot">Second&nbsp;Hand&nbsp;:</span>&nbsp;<?php echo $row["secondHand"]; ?></td>
                            </tr>
                            <tr>
                                <td><span id="dot">Kilometer&nbsp;:</span>&nbsp;<?php echo $row["Kilometer"]; ?></td>
                            </tr>
                            <tr>
                                <td><span id="dot">Price&nbsp;:</span>&nbsp;<?php echo $row["price"]; ?>&nbsp;₺</td>
                            </tr>
                            <tr>
                                <td><span id="dot">Cost&nbsp;:</span>&nbsp;<?php echo $row["cost"]; ?>&nbsp;₺</td>
                            </tr>
                        </table>
                </tr>
            </table>
        <?php
        }

        ?>
    </section>

    <!-- Sold cars section ends -->

</body>

</html>