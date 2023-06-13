<html>

<head>
    <title>Biom-Home Page</title>
    <link rel="icon" href="images/Logob.png">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
            font-weight: bold;
            user-select: none;
            overflow: hidden;

        }

        body {
            min-width: 1500px;
        }

        nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            display: flex;
            align-items: center;
        }

        /* Images and content between navbar and footer */

        .bg {
            height: 110%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            overflow-x: hidden;
        }

        .image1 {
            background-image: url("images/anasayfa.png");
            background-size: cover;
            height: 100%;
        }

        .image2 {
            background-image: url("images/sedan.jpg");
            background-size: cover;
            height: 100%;
        }

        .image3 {
            background-image: url("images/suv.png");
            background-size: cover;
            height: 100%;
        }

        .image4 {
            background-image: url("images/hatchback.jpg");
            background-size: cover;
        }

        .image5 {
            background-image: url("images/cabrio.webp");
            background-size: cover;
        }

        .image6 {
            background-image: url("images/coupe.jpg");
            background-size: cover;
        }

        /* Main page texts  */
        section a {
            text-decoration: none;
        }


        .textLeft {
            display: flex;
            margin-top: 18%;
            margin-left: 10%;
            margin-bottom: 2%;
            justify-content: left;
            font-size: 20px;
            cursor: none;
        }



        .bg h1 {
            text-decoration: none;
            color: rgb(0, 0, 0);
        }

        .bg h1:hover {
            /* border-bottom: 3px solid #ffc300; */
            color: #ffc300;
        }

        .menu {
            font-size: 15px;
            font-weight: bold;
        }

        .btnContact {
            background-color: transparent;
            right: 50px;
            top: 25px;
            border: 2px solid rgba(86, 82, 82, 0.5);
            box-shadow: 0 0 30px rgb(0, 0, 0, .5);
            border-radius: 25px;
            padding: 12px 30px;
            text-align: center;
            display: inline-block;
            font-size: 14px;
            cursor: pointer;
            position: fixed;
            color: black;
        }

        .btnContact:hover {
            background-color: #ffc300;
            color: lightcyan;
        }

        /* Buttons */

        .button {
            background-color: transparent;
            border: 2px solid rgba(86, 82, 82, 0.5);
            box-shadow: 0 0 30px rgb(0, 0, 0, .5);
            border-radius: 25px;
            padding: 15px 32px;
            text-align: center;
            font-size: 16px;
            cursor: pointer;
            color: black;
            display: flex;
            justify-items: center;
            margin-left: 18%;
        }

        .button:hover {
            background-color: #ffc300;
            color: white;
        }

        @media only screen and (max-width:1600px) {

            .textLeft {
                display: flex;
                margin-top: 18%;
                margin-left: 8%;
                margin-bottom: 2%;
                justify-content: left;
                font-size: 20px;
                cursor: none;
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


        .footer {
            position: relative;
            height: 930px;
            top: 10px;
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
            margin-bottom: 0px;

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

    <?php include 'header.php'; ?>

    <section class="bg image1" id="section1"></section>
    <section class="bg image2" id="section2">
        <h1 class="textLeft">&nbsp;&nbsp;&nbsp;&nbsp; Ride in style, with a sedan mile by mile.</h1>
        <a href="cars.php"><button class="button">More</button></a>
    </section>
    <section class="bg image3" id="section3">
        <h1 class="textLeft">Adventure awaits, with a SUV that dominates.</h1>
        <a href="cars.php"><button class="button">More</button></a>
    </section>
    <section class="bg image4" id="section4">
        <h1 class="textLeft ">Small size, big fun, hatchback on the run.</h1>
        <a href="cars.php"><button class="button">More</button></a>
    </section>
    <section class="bg image5" id="section5">
        <h1 class="textLeft">Unleash the fun, with a cabrio let under the sun.</h1>
        <a href="cars.php"><button class="button">More</button></a>
    </section>
    <section class="bg image6" id="section6">
        <h1 class="textLeft">Sharp turns, sharp looks, a coupe that hooks.</h1>
        <a href="cars.php"><button class="button">More</button></a>
    </section>

    <?php include 'footer.php'; ?>

    <script src="script.js"></script>

</body>

</html>