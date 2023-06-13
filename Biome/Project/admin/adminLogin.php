<!DOCTYPE html>
<html>

<head>
    <title>Admin Login</title>
    <link rel="icon" href="logob.png">
    <style>
        * {
            background-color: rgb(163, 163, 163);
        }

        html {
            font-size: 60%;
            overflow-x: hidden;
            overflow-y: hidden;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 400px;
            height: 470px;
            background: transparent;
            border: 2px solid lightgray;
            border-radius: 20px;
            backdrop-filter: blur(20px);
            box-shadow: 0 0 30px lightgray;
        }

        .container input {
            width: 100%;
            height: 100%;
            background: transparent;
            border: none;
            outline: none;
        }

        .inputBox td {
            position: relative;
            width: 100%;
            height: 50px;
            border-bottom: 2px solid rgb(0, 0, 0);
        }
    </style>

</head>

<body>

    <div class="container">
        <form action="logmein.php" method="post" align='center' enctype="multipart/form-data">
            <table border="0">
                <tr align="center">
                    <td> <img src="/Project/images/logo.png" alt="logo" width="200px"> </td>
                </tr>
                <tr class="inputBox">
                    <td><input type="text" name="username" placeholder="Name" id="name" minlength="3" maxLength="40" required <?php
                                                                                                                                if (isset($_COOKIE['username'])) {
                                                                                                                                    echo ('value="' . $_COOKIE['username'] . '"');
                                                                                                                                } ?>>
                    </td>
                </tr>
                <tr class="inputBox">
                    <td><input type="password" name="pass" placeholder="Password" id="password" minlength="3" maxLength="15" required>
                    </td>
                </tr>
                <tr>
                    <td><br><br></td>
                </tr>
                <tr>
                    <td><br><input type="submit" value="Login" class="loginBtn"></td>
                </tr>
            </table>
        </form>
    </div>

</body>

</html>