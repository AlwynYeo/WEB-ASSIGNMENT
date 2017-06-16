<?php
session_start();
if(isset($_SESSION["logged.in"])) {
    header("Location: Economy.php");
}
?>
<!DOCTYPE html>
<head>
    <link href="stylesheet.css" type="text/css" rel="stylesheet">
    <link href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f5/History_Logo.svg/739px-History_Logo.svg.png"
          type="image" rel="icon">
    <title>Sign in to HistorySociety</title>
</head>
<body>
<div class="login">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f5/History_Logo.svg/739px-History_Logo.svg.png"
         height="5%" width="5%"/>
    <h4>HistorySociety</h4>
    <div class="login-form">
        <h2>Sign in with your HistorySociety</h2>
        <form method="post">
            <?php
            include('login-backend.php');
            ?>

            <?php
            if (isset($errors["username.required"])) {
                echo "<p style='color: red'>" . $errors["username.required"];
            }
            if(isset($errors["username.not.found"])) {
                echo "<p style='color: red'>" . $errors["username.not.found"];
            }
            ?>
            </br>
            <input type="text" name="username" id="user_login" placeholder="Username">
            </br>
            <?php
            if (isset($errors["password.required"])) {
                echo "<p style='color: red'>" . $errors["password.required"];
            }
            if(isset($errors["password.incorrect"])) {
                echo "<p style='color: red'>" . $errors["password.incorrect"];
            }
            ?>
            </br>
            <input type="password" name="password" id="user_password" placeholder="Password"/>
            </br>
            <input type="submit" name="submit" id="login-button" value="Login"/>
        </form>
    </div>
    <hr>
    <a href="signup.php"><p>Sign up for a HistorySociety account</p></a>
</div>
</body>
</html>