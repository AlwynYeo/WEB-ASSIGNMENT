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
    <title>HistorySociety | Japan Events</title>
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
    </br>
    <h1>Important Dates in Japan</h1>
    <div class="timeline-">
        <p><strong>660 BC</strong> According to myth, Jimmu Tenno became the first Emperor of Japan.

            </br></br><strong>~AD 552</strong> Buddhism came to Japan from China and Korea.

            </br></br><strong>646</strong> The Taika Reform began.

            </br></br><strong>794</strong> Emperor Kammu set up his capital in Heiankyo.

            </br></br><strong>1192</strong> Yoritomo became the first Shogun.

            </br></br><strong>1543</strong> Portuguese sailors became the first Europeans to reach Japan.

            </br></br><strong>1592 and 1597</strong> Japan tried to conquer Korea.

            </br></br><strong>1603</strong> The Tokugawa family of Shoguns took control of the government.

            </br></br><strong>1639</strong> The government forced all European traders except the Dutch
            to leave Japan.

            </br></br><strong>1853 and 1854</strong> Commodore Matthew C. Perry of the United States
            visited Japan and opened two ports to U.S. trade.

            </br></br><strong>1867</strong> Emperor Mutsuhito regained his power from the Shogun.

            </br></br><strong>1894-1895</strong> Japan won the Chinese-Japanese War and took
            over Taiwan.

            </br></br><strong>1904-1905</strong> Japan defeated Russia in the
            Russo-Japanese War.

            </br></br><strong>1914-1918</strong> Japan joined the Allies in World War
            I.

            </br></br><strong>1923</strong> An earthquake devastated Tokyo and
            Yokohama.

            </br></br><strong>1931</strong> Japan seized the Chinese province
            of Manchuria.

            </br></br><strong>1937</strong> Japan began a war with China.
            The fighting became part of World War II.

            </br></br><strong>1941</strong> Japan attacked the United
            States at Pearl Harbor in Hawaii.

            </br></br><strong>1945</strong> The United States
            dropped atomic bombs on Hiroshima and
            Nagasaki. Japan surrendered to the
            Allies, and the Allied occupation of
            Japan began.

            </br></br><strong>1947</strong> Japan's
            democratic constitution went into
            effect.

            </br></br><strong>1951</strong> Japan signed
            a general peace treaty and a
            security treaty with the United
            States.

            </br></br><strong>1952</strong> The
            Allied occupation of Japan
            ended.

            </br></br><strong>1956</strong> Japan
            became a member of the
            United Nations.

            </br></br><strong>1960</strong>
            Japan signed a
            Treaty of Mutual
            Cooperation and
            Security with the
            United States.

            </br></br><strong>1964</strong>
            The Olympic Games
            were held in Tokyo.

            </br></br><strong>1970</strong>
            Japan launched its
            first space
            satellite.

            </br></br><strong>1972</strong>The
            United States
            returned Okinawa to
            Japan.</p>
    </div>
</div>
</br>
</br>
<footer><strong>Designed by</br><a href="https://www.facebook.com/alwyn.yeo">ALWYN YEO</a>,<a
                href="https://www.facebook.com/Mickeyjunwei?fref=ts">CHAN JUN WEI</a> and <a
                href="https://www.facebook.com/yee.shin.39">Lee Shin Yee</a></strong></footer>
</body>
</html>