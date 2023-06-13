<?php
$conn = mysqli_connect("localhost", "abc", "abc", "group3");
$sql = "SELECT * FROM  group3.news";
$all_news = $conn->query($sql);

if (!$conn) {
    die("connection failed");
}

?>

<html>

<head>
    <title>News</title>
    <link rel="icon" href="images/Logob.png">

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            min-width: 1500px;
        }

        html {
            box-sizing: border-box;
            font-size: 62.5%;
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

        .btnContact :hover {
            background-color: #ffc300;
            color: lightcyan;
        }

        /* News section*/

        #section {
            overflow-x: hidden;
            background-image: url(images/Background.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }

        #title h1 {
            padding-top: 150px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: x-large;
        }

        .newsSection {
            padding-top: 50px;
            height: auto;
            margin-left: 270px;
            display: inline-block;
            justify-content: center;
            align-items: center;
        }

        .newsCard {
            margin: auto;
            display: flex;
            justify-content: center;
            align-items: stretch;
            max-width: 550px;
            height: 950px;
            background: transparent;
            border: 1px solid white;
            box-shadow: 0px 1px 5px white;
            border-radius: 20px;
            backdrop-filter: blur(20px);
        }

        .newsCard img {
            border-radius: 20px;
            margin: 0;
            padding: 0;
        }

        .newsCard .heading {
            margin: 10px;
            padding: 10px;
            font-size: larger;
        }

        .newsCard .exp {
            padding: 10px;
        }

        @media only screen and (max-width:1600px) {

            .newsSection {
                padding-top: 50px;
                height: auto;
                margin-left: 150px;
                display: inline-block;
                justify-content: center;
                align-items: center;
            }

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
    <section id="section">
        <section id="title">
            <h1>Latest News</h1>
        </section>
        <?php
        if (mysqli_num_rows($all_news) > 0) {

            while ($row = mysqli_fetch_assoc($all_news)) {

        ?>
                <section class="newsSection">

                    <table class="newsCard" border="0">
                        <tr>
                            <td align="center"><img src="<?php echo $row["img"]; ?>  " alt="" width="550px"></td>
                        </tr>
                        <tr>
                            <td class="heading" align="center"><b><?php echo $row["heading"]; ?></b></td>
                        </tr>
                        <tr>
                            <td class="exp"><?php echo $row["explanation"]; ?></td>
                        </tr>
                    </table>

                </section>
        <?php
            }
        } else {

            echo "There is not any news . Please try it another time.";
        }
        ?>

    </section>

    <?php include "footer.php" ?>

</body>

</html>