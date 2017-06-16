<?php
session_start();
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f5/History_Logo.svg/739px-History_Logo.svg.png" type="image" rel="icon">
    <title>HistorySociety | United Kingdom</title>
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
        <a href="History%20Timeline.php">
            <li>History Timeline</li>
        </a>
        <a href="Events.php">
            <li>Events</li>
        </a>
    </ul>
</div>
<div class="container">
    <div class="timeline-">
    <h1>United Kingdom</h1>
    </br>
    </br>
    <p>WRITTEN BY: Ralph Charles Atkins, Sheppard Sunderland Frere, John S. Morrill, Michael Charles Prestwich, Mark A.
        Kishlansky, Linda J. Colley and more</br>LAST UPDATED: 6-10-2017 </p>
        <p><strong>United Kingdom</strong>, island country located off the northwestern coast of mainland Europe. The
            United
            Kingdom comprises the whole of the island of Great Britain—which contains England, Wales, and Scotland—as
            well
            as the northern portion of the island of Ireland. The name Britain is sometimes used to refer to the United
            Kingdom as a whole. The capital is London, which is among the world’s leading commercial, financial, and
            cultural centres. Other major cities include Birmingham, Liverpool, and Manchester in England, Belfast and
            Londonderry in Northern Ireland, Edinburgh and Glasgow in Scotland, and Swansea and Cardiff in
            Wales.</br></br>
            The origins of the United Kingdom can be traced to the time of the Anglo-Saxon king Athelstan, who in the
            early
            10th century ce secured the allegiance of neighbouring Celtic kingdoms and became “the first to rule what
            previously many kings shared between them,” in the words of a contemporary chronicle. Through subsequent
            conquest over the following centuries, kingdoms lying farther afield came under English dominion. Wales, a
            congeries of Celtic kingdoms lying in Great Britain’s southwest, was formally united with England by the
            Acts of
            Union of 1536 and 1542. Scotland, ruled from London since 1603, formally was joined with England and Wales
            in
            1707 to form the United Kingdom of Great Britain. (The adjective “British” came into use at this time to
            refer
            to all the kingdom’s peoples.) Ireland came under English control during the 1600s and was formally united
            with
            Great Britain through the Act of Union of 1800. The republic of Ireland gained its independence in 1922, but
            six
            of Ulster’s nine counties remained part of the United Kingdom as Northern Ireland. Relations between these
            constituent states and England have been marked by controversy and, at times, open rebellion and even
            warfare.
            These tensions relaxed somewhat during the late 20th century, when devolved assemblies were introduced in
            Northern Ireland, Scotland, and Wales. Nonetheless, even with the establishment of a power-sharing assembly
            after referenda in both Northern Ireland and the Irish republic, relations between Northern Ireland’s
            unionists
            (who favour continued British sovereignty over Northern Ireland) and nationalists (who favour unification
            with
            the republic of Ireland) remained tense into the 21st century.</br></br>
            The United Kingdom has made significant contributions to the world economy, especially in technology and
            industry. Since World War II, however, the United Kingdom’s most prominent exports have been cultural,
            including
            literature, theatre, film, television, and popular music that draw on all parts of the country. Perhaps
            Britain’s greatest export has been the English language, now spoken in every corner of the world as one of
            the
            leading international mediums of cultural and economic exchange.</br></br>The United Kingdom retains links
            with parts
            of its former empire through the Commonwealth. It also benefits from historical and cultural links with the
            United States and is a member of the North Atlantic Treaty Organization (NATO). Moreover, the United Kingdom
            became a member of the European Union in 1973. Many Britons, however, were sometimes reluctant EU members,
            holding to the sentiments of the great wartime prime minister Winston Churchill, who sonorously remarked,
            “We
            see nothing but good and hope in a richer, freer, more contented European commonalty. But we have our own
            dream
            and our own task. We are with Europe, but not of it. We are linked, but not comprised. We are interested and
            associated, but not absorbed.” Indeed, in June 2016, in a referendum on whether the United Kingdom should
            remain
            in the EU, 52 percent of British voters chose to leave. That set the stage for the U.K. to become the first
            country to do so, pending the negotiations between the U.K. and the EU on the details of the
            separation.</br></br><strong>Land</strong></br></br>The United Kingdom comprises four geographic and
            historical
            parts—England, Scotland, Wales, and
            Northern Ireland. The United Kingdom contains most of the area and population of the British Isles—the
            geographic term for the group of islands that includes Great Britain, Ireland, and many smaller islands.
            Together England, Wales, and Scotland constitute Great Britain, the larger of the two principal islands,
            while
            Northern Ireland and the republic of Ireland constitute the second largest island, Ireland. England,
            occupying
            most of southern Great Britain, includes the Isles of Scilly off the southwest coast and the Isle of Wight
            off
            the southern coast. Scotland, occupying northern Great Britain, includes the Orkney and Shetland islands off
            the
            northern coast and the Hebrides off the northwestern coast. Wales lies west of England and includes the
            island
            of Anglesey to the northwest.</br></br>Apart from the land border with the Irish republic, the United
            Kingdom is
            surrounded by sea. To the south of England and between the United Kingdom and France is the English Channel.
            The
            North Sea lies to the east. To the west of Wales and northern England and to the southeast of Northern
            Ireland,
            the Irish Sea separates Great Britain from Ireland, while southwestern England, the northwestern coast of
            Northern Ireland, and western Scotland face the Atlantic Ocean. At its widest the United Kingdom is 300
            miles
            (500 km) across. From the northern tip of Scotland to the southern coast of England, it is about 600 miles
            (1,000 km). No part is more than 75 miles (120 km) from the sea. The capital, London, is situated on the
            tidal
            River Thames in southeastern England.</br></br>he archipelago formed by Great Britain and the numerous
            smaller
            islands is as irregular in shape as it is diverse in geology and landscape. This diversity stems largely
            from
            the nature and disposition of the underlying rocks, which are westward extensions of European structures,
            with
            the shallow waters of the Strait of Dover and the North Sea concealing former land links. Northern Ireland
            contains a westward extension of the rock structures of Scotland. These common rock structures are breached
            by
            the narrow North Channel.</br></br>On a global scale, this natural endowment covers a small
            area—approximating that
            of the U.S. state of Oregon or the African country of Guinea—and its internal diversity, accompanied by
            rapid
            changes of often beautiful scenery, may convey to visitors from larger countries a striking sense of
            compactness
            and consolidation. The peoples who, over the centuries, have hewed an existence from this Atlantic extremity
            of
            Eurasia have put their own imprint on the environment, and the ancient and distinctive palimpsest of their
            field
            patterns and settlements complements the natural diversity.</br></br><strong>Relief</strong></br></br>
            Great Britain is traditionally divided into a highland and a lowland zone. A line running from the mouth of
            the
            River Exe, in the southwest, to that of the Tees, in the northeast, is a crude expression of this division.
            The
            course of the 700-foot (213-metre) contour, or of the boundary separating the older rocks of the north and
            west
            from the younger southeastern strata, provides a more accurate indication of the extent of the highlands.
        </p>
    </div>
    </br>
</div>
</br>
</br>
<footer><strong>Designed by</br><a href="https://www.facebook.com/alwyn.yeo">ALWYN YEO</a>,<a
                href="https://www.facebook.com/Mickeyjunwei?fref=ts">CHAN JUN WEI</a> and <a
                href="https://www.facebook.com/yee.shin.39">Lee Shin Yee</a></strong></footer>
</body>
</html>