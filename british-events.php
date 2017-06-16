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
    </br>
    <h1>BEAUTIFUL BRITAIN</h1>
    <div class="timeline-">
        <p><strong>On This Day 15th June</strong>
            </br></br>1215 King John agreed to put his royal seal on the Magna Carta, or Great
            Charter of English liberties, at Runnymede, near Windsor. The document was the first to be forced onto an
            English King by a group of his subjects. It was essentially a peace treaty between John and his barons,
            guaranteed the nobles their feudal privileges and promised to maintain the nation's laws.
            </br></br>1330 The birth of Edward the Black Prince, eldest son of Edward III. He
            married his cousin Joan, ‘The Fair Maid of Kent’, who gave him two sons, one of whom was the future Richard II.
            </br></br>1381 Wat Tyler - leader of the Peasants' Revolt, was killed at Smithfield in
            London. Richard II had agreed to meet the leaders of the revolt, and listen to their demands. What was said
            between Tyler and the king is largely conjecture but by all accounts the unarmed Tyler was suddenly attacked
            without warning and killed by the Lord Mayor of London, Sir William Walworth, and John Cavendish, a member of
            the king's group. This unprovoked betrayal of the truce flag and Tyler's killing threw the people into a panic.
            Not being organized as a military force, they broke ranks and began to flee for their lives.
            </br></br>1825 The foundation stone of the New London Bridge was laid by ‘the grand
            old’ Duke of York. It now spans an artificial lake in Arizona.
            </br></br>1860 British nurse Florence Nightingale, famous for tending British wounded
            during the Crimean War, opened a school for nurses at St Thomas's Hospital in London.
            </br></br>1876 The opening of the Newcastle Swing Bridge,designed and constructed by Sir W.G.
            Armstrong who lived at Cragside. The bridge was first used for road traffic On This Day in
            1876 and opened for river traffic on the 17th July in the same year. At the time of its construction it was the
            world's largest swing bridge.
            </br></br>1909 Representatives from England, Australia and South Africa met at Lords
            and formed the Imperial Cricket Conference. It was renamed the International Cricket Conference in 1965. The ICC
            has 105 members including 10 Full Members that play official Test matches.
            </br></br>1910 British explorer Captain Robert Scott set sail on his expedition to
            reach the South Pole. This Antarctic 100 memorial at Cardiff Bay overlooks the point from
            which Scott's ship the SS Terra Nova left Cardiff on its ill-fated voyage.
            </br></br>1911 The birth of the Reverend Wilbert Vere Awdry, English Anglican cleric, railway enthusiast, and
            children's author. He was the creator of Thomas the Tank Engine, the central figure in his acclaimed railway
            stories. Awdry was born at Ampfield vicarage near Romsey and his father was vicar of Ampfield church.
            </br></br>1928 The House of commons voted to fix the date of Easter. However, a clause
            in the Bill allowed the consideration of the opinions of all the major churches and the Act was never put in
            force.
            </br></br>1929 British made Bentleys occupied the first four places at the finish of
            the Le Mans 24 hour race in France.
            </br></br>1940 World War II: Operation Ariel began and allied troops started to
            evacuate France, following Germany's takeover of Paris and most of the nation.
            </br></br>1971 Opposition grew to Education Secretary Margaret Thatcher's plans to end
            free school milk for children over the age of seven and some Labour controlled councils threatened to put up the
            rates in order to continue supplying free milk.
            </br></br>1993 James Hunt, English racing driver and 1976 Formula One world champion
            died from a heart attack, aged 45. His charisma and charm both on and off the track brought a whole new fanbase
            to the sport of Formula One.
            </br></br>1996 An IRA bomb, the biggest ever to go off on the British mainland,
            devastated the centre of Manchester. Miraculously no-one was killed but 200 people were taken to hospital. The
            explosion caused £100 million worth of damage.
            </br></br>1998 Britain introduced a £2 coin.
            </br></br>2013 Twenty-seven people were treated in hospital after an amphibious tourist
            craft sank in Liverpool's Albert Dock. It was the second sinking involving one of the vessels. Six days later
            the firm went into administration. In 2012 the Queen
            and Prince Philip had been given a tour of the dock on one of the vehicles during her Diamond Jubilee tour.</p>
    </div>
</div>
</br>
</br>
<footer><strong>Designed by</br><a href="https://www.facebook.com/alwyn.yeo">ALWYN YEO</a>,<a
                href="https://www.facebook.com/Mickeyjunwei?fref=ts">CHAN JUN WEI</a> and <a
                href="https://www.facebook.com/yee.shin.39">Lee Shin Yee</a></strong></footer>
</body>
</html>