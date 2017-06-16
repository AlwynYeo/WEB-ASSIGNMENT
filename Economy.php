<?php
session_start();
require("check_auth.php");
if (empty($userLoggedin)) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<head>
    <link href="stylesheet.css" type="text/css" rel="stylesheet"/>
    <link href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f5/History_Logo.svg/739px-History_Logo.svg.png" type="image" rel="icon"/>

    <title>HistorySociety | Economy</title>
    <div class="time">
        <p id="demo"></p>
        <script type="text/javascript">
            var myVar = setInterval(myTimer, 1000);

            function myTimer() {
                var d = new Date();
                var n = d.toLocaleTimeString();
                document.getElementById("demo").innerHTML = n;
            }
        </script>
    </div>
</head>
<body>
<div class="title">
    <a href="HomePage.php"><h1>HistorySociety</h1></a>

</div>
<?php if (empty($_SESSION["logged.in"])): ?>
    <a href="signup.php" class="navigation-authentication">Sign up</a>
    <a href="login.php" class="navigation-authentication">Sign in</a>
<?php else : ?>
    <a href="logout.php" class="navigation-authentication">Sign out of <?php echo $_SESSION["logged.in"]; ?></a>
<?php endif; ?>
<div class="navigation">
    <ul>
        <a href="HomePage.php">
            <li>Home</li>
        </a>
        <a href="Economy.php">
            <li>Economy</li>
        </a>
        <a href="History Timeline.php">
            <li>History Timeline</li>
        </a>
        <a href="Events.php">
            <li>Events</li>
        </a>
    </ul>
</div>
<div class="container">
    <div class="image2">
        <a href="british-economy.php"><img
                    src="https://quickonomics.com/wp-content/uploads/2016/09/uk2016-820x410.png"
                    height="250px" width="70%"></a>
    </div>
    <div class="caption">
        <h1><a href="british-economy.php">British | Economy</a></h1>
    </div>
    </br>
    <hr>
    <div class="image2">
        <a href="japan-economy.php"><img
                    src="http://img.freepik.com/free-icon/yen-commercial-tag_318-37790.jpg?size=338&ext=jpg"
                    height="250px" width="70%"></a>
    </div>
    <div class="text">
        <a href="japan-economy.php"><p>Japan | Economy</p></a>
    </div>
    <hr>
    <div class="image2">
        <a href="msia-economy.php"><img
                    src="https://previews.123rf.com/images/dny3d/dny3d1009/dny3d100900023/7742167-3d-man-with-a-red-economy-logo-Stock-Photo.jpg"
                    height="250px" width="70%"></a>
    </div>
    <div class="text">
        <a href="msia-economy.php"><p>
                Malaysia : Economy</p></a>
    </div>
    <hr>
</div>
</br>
</br>
<footer><strong>Designed by</br><a href="https://www.facebook.com/alwyn.yeo">ALWYN YEO</a>,<a
                href="https://www.facebook.com/Mickeyjunwei?fref=ts">CHAN JUN WEI</a> and <a
                href="https://www.facebook.com/yee.shin.39">Lee Shin Yee</a></strong></footer>
</body>
</html>