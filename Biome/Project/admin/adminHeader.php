<!DOCTYPE html>
<html>

<head>
    <title>Admin Header</title>
    <link rel="icon" href="logob.png">
    <style>
        body {
            background-color: #EADDCA;
        }

        /* Navbar */
        .navbar {
            background-color: rgb(163, 163, 163);
            overflow: hidden;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            display: flex;
            align-items: center;
            border-bottom: 2px solid lightgray;
        }

        .navbar a {
            float: left;
            display: block;
            color: black;
            text-align: center;
            padding: 3px 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            color: lightgray;
            transition: 0.2s;
        }

        .navbar img {
            border-right: 1px solid lightgray;
        }

        .button {
            margin-left: auto;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <img src="logo.png" class="logo" width="100px">
        <a href="addCar.php">Add Car</a>
        <a href="carSold.php">Cars Sold</a>
        <a href="logmeout.php" class="button"><button class="btn">Logout</button></a>
    </div>
</body>

</html>