<?php
session_start();
?>
<!DOCTYPE html>
<head>
    <link href="stylesheet.css" type="text/css" rel="stylesheet">
    <link href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f5/History_Logo.svg/739px-History_Logo.svg.png"
          type="image" rel="icon">

    <title>HistorySociety | Home</title>
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
    <div class="image">
        <a href="british-homepage.php"><img
                    src="http://www.england.net/files/England_vs_the_United_Kingdom.jpg"
                    height="320px" width="100%"></a>
    </div>
    <div class="caption">
        <h1><a href="british-homepage.php">Alternative Titles: Britain, Great Britain, U.K., United Kingdom of Great
                Britain and Northern Ireland</a></h1>
    </div>
    </br>
    <hr>
    <div class="image_">
        <a href="japan-homepage.php"><img
                    src="http://d1zlh37f1ep3tj.cloudfront.net/wp/wblob/54592E651337D2/D1B/14E42D/VvEImIWEAHMvN4QrlHSzpg/Japan_Logo.png"
                    height="250px" width="70%"></a>
    </div>
    <div class="text">
        <a href="japan-homepage.php"><p>Japan | Facts and
                History</p></a>
    </div>
    <hr>
    <div class="image_">
        <a href="msia-homepage.php"><img
                    src="https://vectorise.net/vectorworks/logos/Malaysia%20&%20Negeri/download/Bendera%20Malaysia%20wave.png"
                    height="250px" width="70%"></a>
    </div>
    <div class="text">
        <a href="msia-homepage.php"><p>
                Malaysia : History</p></a>
    </div>
    <hr>
    <div class="image_">
        <a href="aus-homepage.php"><img
                    src="http://www.oakent.com.au/AustralianLogo%5B1%5D.jpg"
                    height="250px" width="70%"></a>
    </div>
    <div class="text">
        <a href="aus-homepage.php"><p>AUSTRALIA'S HISTORY</p></a>
    </div>
</div>
</br>
</br>
<footer><strong>Designed by</br><a href="https://www.facebook.com/alwyn.yeo">ALWYN YEO</a>,<a
                href="https://www.facebook.com/Mickeyjunwei?fref=ts">CHAN JUN WEI</a> and <a
                href="https://www.facebook.com/yee.shin.39">Lee Shin Yee</a></strong></footer>
</div>
</body>
</html>