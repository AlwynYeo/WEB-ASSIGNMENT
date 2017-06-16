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
    <style>
        body {
            background-image: url("signup-background.jpg");
            background-repeat: no-repeat;
            background-size: 100% 100%;
            min-height: 1080px;
        }
    </style>
    <title>Join HistorySociety</title>
</head>
<body>
<div class="signup">
    <div class="signup-form">
        <h2>HistorySociety</h2>
        <h3>Sign up for a HistorySociety account to learn.</h3>
        <form method="post"><?php
            require('signup-backend.php');
            ?>
            <?php
            if (isset($errors["username.required"])) {
                echo "<p style='color: red'>" . $errors["username.required"];
            }
            if (isset($errors["username.length"])) {
                echo "<p style='color: red'>" . $errors["username.length"];
            }
            ?>
            </br>
            <input type="text" name="username" id="signup-username" placeholder="Username"/>
            </br>
            <?php
            if (isset($errors["username.taken"])) {
                echo "<p style='color: red'>" . $errors["username.taken"];
            }
            ?>
            <?php
            if (isset($errors["password.required"])) {
                echo "<p style='color: red'>" . $errors["password.required"];
            }
            if (isset($errors["password.length"])) {
                echo "<p style='color: red'>" . $errors["password.length"];
            }
            ?>
            </br>
            <input type="password" name="password" id="signup-password" placeholder="Password"/>
            </br>
            <?php
            if (isset($errors["password.match"])) {
                echo "<p style='color: red'>" . $errors["password.match"];
            }
            ?>
            </br>
            <input type="password" name="password_confirmation" id="password-confirmation"
                   placeholder="Retype password"/>
            </br>
            <?php
            if (isset($errors["firstname.required"])) {
                echo "<p style='color: red'>" . $errors["firstname.required"];
            }
            ?>
            </br>
            <input type="text" name="firstname" id="signup-firstname" placeholder="John"/>
            <?php
            if (isset($errors["lastname.required"])) {
                echo "<p style='color: red'>" . $errors["lastname.required"];
            }
            ?>
            </br>
            <input type="text" name="lastname" id="signup-lastname" placeholder="Doe"/>
            </br>
            <input type="submit" name="submit" id="signup-button" value="Join now"/>
        </form>
    </div>
    <a href="login.php"><p>Already have a HistorySociety account? <strong>Sign
                in</strong></p></a>
</div>
</body>
</html>