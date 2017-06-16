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
    <link href="stylesheet.css" type="text/css" rel="stylesheet">
    <link href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f5/History_Logo.svg/739px-History_Logo.svg.png"
          type="image" rel="icon">
    <style>

    </style>
    <title>HistorySociety | Events</title>
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
    <div class="date-stat-page">
        <script type="text/javascript">
            var Today = new Date();
            var day = Today.getDate();
            var month = Today.getMonth() + 1;
            var year = Today.getFullYear();
            document.write("Today's date " + day + "/0" + month + "/" + year);
        </script>
    </div>
    <div class="image_">
        <a href="british-events.php"><img
                    src="http://www.educationalfootprints.com/wp-content/uploads/2014/08/HistoryCourseOxfordCourse.jpg"
                    height="250px" width="70%"></a>
    </div>
    <div class="text">
        <a href="british-events.php"><p>British Historical Events</p></a>
    </div>
    <hr>
    <div class="image_">
        <a href="japan-events.php"><img
                    src="https://timetunnels.files.wordpress.com/2013/12/remote_image_1326101201.jpg"
                    height="250px" width="70%"></a>
    </div>
    <div class="text">
        <a href="japan-events.php"><p>Japan Historical Events</p></a>
    </div>
    <hr>
    <div class="image_">
        <a href="msia-events.php"><img
                    src="http://malaysiatruelyasia.weebly.com/uploads/1/9/8/0/19808403/6767634_orig.png"
                    height="250px" width="70%"></a>
    </div>
    <div class="text">
        <a href="msia-events.php"><p>Malaysia Historical Events</p></a>
    </div>
</div>
</br>
</br>
<footer><strong>Designed by</br><a href="https://www.facebook.com/alwyn.yeo">ALWYN YEO</a>,<a
                href="https://www.facebook.com/Mickeyjunwei?fref=ts">CHAN JUN WEI</a> and <a
                href="https://www.facebook.com/yee.shin.39">Lee Shin Yee</a></strong></footer>
</body>
</html>