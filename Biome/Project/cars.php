<?php

$conn = mysqli_connect("localhost", "abc", "abc", "group3");
$sql = "SELECT * FROM  group3.cars";
$all_cars = $conn->query($sql);

?>

<html>

<head>
    <title>Biome-Cars</title>
    <link rel="icon" href="images/Logob.png">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        /* Navbar  - Contact button*/
        nav {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            display: flex;
            align-items: center;
        }

        .menu {
            font-size: 15px;
            font-weight: bold;
        }

        .btnContact {
            background-color: transparent;
            border: 2px solid rgba(86, 82, 82, 0.5);
            box-shadow: 0 0 30px rgb(0, 0, 0, .5);
            border-radius: 25px;
            padding: 12px 30px;
            text-align: center;
            display: inline-block;
            margin-right: 50px;
            font-size: 14px;
            cursor: pointer;
            color: black;
        }

        .btnContact:hover {
            background-color: #ffc300;
            color: lightcyan;
        }

        #section {
            overflow-x: hidden;
            background-image: url(images/Background.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }


        /* filter section*/
        .filter {
            padding-top: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
        }


        .container {
            margin: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 1350px;
            height: 250px;
            background: transparent;
            /* border: 2px solid #b2caeb; */
            border: 1px solid #b2caeb;
            box-shadow: 0px 1px 2px lightcyan;
            border-radius: 20px;
            backdrop-filter: blur(20px);
            /* box-shadow: 0 0 30px #b2caeb; */

        }


        ::placeholder {
            color: black;
        }

        table .label {
            color: lightcyan;
        }

        table .box {
            background: none;
            border: none;
            outline: none;
            width: 140px;

        }


        #dot {
            color: black;
            font-size: large;
        }

        .btn {
            background-color: transparent;
            text-align: center;
            border-radius: 25px;
            cursor: pointer;
            display: inline-block;
            border: 1px solid #b2caeb;
            box-shadow: 0px 1px 2px white;
            padding: 10px 40px;
            color: lightcyan;
        }

        .btn:hover {
            color: black;
            border: 0;
        }

        /* cars section*/
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
            flex: 1 1 210px;
            text-align: center;
            display: flex;
            align-items: stretch;
            margin: 20px;
            border: 2px solid #b2caeb;
            box-shadow: 0px 1px 2px white;
            backdrop-filter: blur(20px);
        }

        .innerTable {
            border-left: 1px solid #b2caeb;
            box-shadow: -2px 0px 1px 1px #b2caeb;
        }

        .innerTable tr td {
            color: lightcyan;
            font-size: medium;
        }

        /*navbar*/
        nav {
            min-width: 1500px;
            /* desktop screen*/
        }

        .logo {
            width: 154px;
            height: 100px;
            cursor: pointer;
            margin-left: 50px;
        }


        nav ul {
            flex: auto;
            text-align: center;
        }

        nav ul li {
            display: inline-block;
            margin: 10px 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: black;
        }


        .menu li a:hover {
            color: #ffc300;
        }

        @media only screen and (max-width:1250px) {

            .btnContact {
                display: none;
            }
        }

        /* Footer */
        * {
            margin: 0;
            padding: 0;
        }

        .footer {
            position: relative;
            height: 930px;
            background-color: #5a6263;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .footer .table1 {
            width: 300px;
            height: 600px;
            display: flexbox;
            justify-content: center;
            align-items: center;
            margin-bottom: 100px;

        }

        .table1 ul li a {
            text-decoration: none;
            color: black;
        }

        .footer tr td,
        .footer ul li {

            list-style: none;
            cursor: pointer;
        }

        /* Footer Responsive */

        @media only screen and (max-width: 1000px) {
            .footer {
                min-height: 600px;
            }

            .table1 {
                font-size: 10px;
            }

            .table1 .logo {
                width: 150px;
            }

            .table1 img {
                width: 10px;
            }


            .table1 iframe {
                width: 500px;
                height: 200px;
            }
        }
    </style>
</head>

<body>


    <?php include 'header.php' ?>


    <!-- filter section starts -->
    <section id="section">

        <section class="filter">
            <form action="cars.php" method="post" enctype="multipart/form-data">
                <div class="container">
                    <table cellspacing="25" cellpading="25" border="0">
                        <tr>
                            <td rowspan="4"></td>
                            <td class="label">Make&nbsp;<span id="dot">:</span></td>
                            <td><input type="text" placeholder="Enter car brand" name="brand" class="box"></td>
                            <td class="label">Year&nbsp;<span id="dot">:</span></td>
                            <td><input type="number" min="1950" max="2024" placeholder="Enter car year" name="yearCar" class="box"></td>
                            <td class="label">Fuel&nbsp;Type&nbsp;<span id="dot">:</span></td>
                            <td>
                                <select name="fuelType" class="box">
                                    <option value="">Not Selected</option>
                                    <option value="Gasoline">Gasoline</option>
                                    <option value="Electric">Electric</option>
                                    <option value="Diesel">Diesel</option>
                                    <option value="Hybrid">Hybrid</option>
                                </select>
                            </td>
                            <td class="label">Kilometer&nbsp;<span id="dot">:</span></td>
                            <td>
                                <select name="sortKilometer" class="box">
                                    <option selected value="blank">Not Selected</option>
                                    <option value="lth">Low to High</option>
                                    <option value="htl">High to Low</option>
                                </select>
                            </td>
                            <td class="label">Price&nbsp;Sorting&nbsp;<span id="dot">:</span></td>
                            <td align="right" colspan="11">
                                <select name="sort" class="box">
                                    <option selected value="blank">Not Selected</option>
                                    <option value="lth">Low to High</option>
                                    <option value="htl">High to Low</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="label">Model&nbsp;<span id="dot">:</span></td>
                            <td><input type="text" placeholder="Enter model" name="model" class="box"></td>
                            <td class="label">Color&nbsp;<span id="dot">:</span></td>
                            <td>
                                <select name="color" class="box">
                                    <option value="">Not Selected</option>
                                    <option value="White">White</option>
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
                            </td>
                            <td class="label">Body&nbsp;Type&nbsp;<span id="dot">:</span></td>
                            <td>
                                <select name="bodyType" class="box">
                                    <option value="">Not Selected</option>
                                    <option value="Sedan">Sedan</option>
                                    <option value="SUV">SUV</option>
                                    <option value="Hatchback">Hatchback</option>
                                    <option value="Cabrio">Cabrio</option>
                                    <option value="Coupe">Coupe</option>
                                </select>
                            </td>
                            <td class="label">Gear&nbsp;<span id="dot">:</span></td>
                            <td>
                                <select name="Gear" class="box">
                                    <option value="">Not Selected</option>
                                    <option value="Automatic">Automatic</option>
                                    <option value="Manual">Manual</option>
                                </select>
                            </td>
                            <td class="label" colspan="2">Second Hand&nbsp;<span id="dot">:</span>
                            </td>
                            <td> <select name="secondHand" class="box">
                                    <option value="">Not Selected</option>
                                    <option value="Yes">Yes</option>
                                    <option value="NO">No</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td align="center" colspan="11">
                                <input type="submit" value="Search" name="search" class="btn">
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </section>

        <!-- filter section ends -->

        <!-- car section starts -->

        <section class="cars">
            <?php

            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search'])) {

                $brand = $_POST['brand'];
                $yearCar = $_POST['yearCar'];
                $fuelType = $_POST['fuelType'];
                $model = $_POST['model'];
                $color = $_POST['color'];
                $bodyType = $_POST['bodyType'];
                $Gear = $_POST['Gear'];
                $secondHand = $_POST['secondHand'];
                $sort = $_POST['sort'];
                $sortKilometer = $_POST['sortKilometer'];



                $sql = "SELECT * FROM group3.cars WHERE 1=1  ";
                if (!empty($brand)) {
                    $sql .= " AND brand = '$brand'";
                }
                if (!empty($yearCar)) {
                    $sql .= " AND yearCar = $yearCar";
                }
                if (!empty($fuelType)) {
                    $sql .= " AND fuelType = '$fuelType'";
                }
                if (!empty($model)) {
                    $sql .= " AND model = '$model'";
                }
                if (!empty($color)) {
                    $sql .= " AND color = '$color'";
                }
                if (!empty($bodyType)) {
                    $sql .= " AND bodyType = '$bodyType'";
                }
                if (!empty($Gear)) {
                    $sql .= " AND Gear = '$Gear'";
                }
                if (!empty($secondHand)) {
                    $sql .= " AND secondHand = '$secondHand'";
                }
                if ($sort == 'lth') {
                    $sql .= " ORDER BY price ASC";
                } elseif ($sort == 'htl') {
                    $sql .= " ORDER BY price DESC";
                } elseif ($sortKilometer == 'lth') {
                    $sql .= "ORDER BY Kilometer ASC";
                } elseif ($sortKilometer == 'htl') {
                    $sql .= "ORDER BY Kilometer DESC";
                } else {
                    $sql .= " ORDER BY id";
                }
            }
            $result = mysqli_query($conn, $sql);


            if (mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_assoc($result)) {

            ?>

                    <table class="carCard" border="0">
                        <tr>
                            <td> <img src=" admin/<?php echo $row["Image_01"]; ?>  " alt="" width="600px"> </td>
                            <td> <img src=" admin/<?php echo $row["Image_02"]; ?> " alt="" width="600px"> </td>
                            <td>
                                <table class="innerTable" border="0" cellspacing="3" cellpading="3">
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
                                </table>
                        </tr>
                    </table>

            <?php
                }
            } else {

                echo "Car is not matching. Please do another search.";
            }
            ?>



        </section>

    </section>

    <!-- car section ends -->


    <?php include "footer.php" ?>

</body>

</html>