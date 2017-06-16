<?php
session_start();
?>
<!DOCTYPE html>
<head>
    <link href="stylesheet.css" type="text/css" rel="stylesheet"/>
    <link href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f5/History_Logo.svg/739px-History_Logo.svg.png"
          type="image" rel="icon"/>
    <title>historySociety | Malaysia</title>
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
    <div class="timeline-">
        <h1>Australia’s early history</h1>
        <p>Australia’s Aboriginal people have the oldest continuous culture on Earth. They are believed to have arrived
            here by boat at least 50,000 years ago.
            </br></br>At the time of European settlement there were up to one million Aboriginal people living across
            the continent as hunters and gatherers. They were scattered in 500 different clans, or ‘nations’, speaking
            about 700 languages. Each clan had a spiritual connection with their land, but travelled widely to trade and
            find water and seasonal produce, as well as for ritual gatherings.
            </br></br>Despite the diversity of their homelands – from outback deserts to tropical rainforest and
            snow-capped mountains – all Aboriginal people share the belief in the Dreaming, or ‘Tjukurrpa’. According to
            Aboriginal myth, the ancestor spirits forged all aspects of life and continue to link the past, present, the
            people and the land. Dreaming stories describe the journeys of spiritual ancestors and are told through
            song, dance, painting and storytelling.
            </br></br>There are many opportunities to explore Australia’s Indigenous culture, significantly in northern
            Australia. Take a tour through the world-famous Kakadu National Park, which is home to more than 5,000 sites
            of rock art dating back 20,000 years. Or join a Dreamtime walk, guided by the Kuku Yalanji people, through
            the lush rainforests of Mossman Gorge, 80 kilometres north of Cairns.
            </br></br><strong>Britain’s colonisation of Australia</strong>
            </br></br>A number of European explorers sailed the coast of Australia, then known as New Holland, during
            the 17th century. But it wasn’t until 1770 that Captain James Cook chartered the east coast and claimed it
            for Britain. The new outpost was put to use as a penal colony and on 26 January 1788, the First Fleet of 11
            ships – carrying 1,500 people, half of them convicts – arrived in Sydney Harbour. When penal transportation
            ended in 1868, more than 160,000 men and women had come to Australia as convicts.
            </br></br>While free settlers began to flow in from the early 1790s, life for prisoners was harsh. Male
            re-offenders were brutally flogged and could be hanged for crimes as petty as stealing. Women were
            outnumbered five to one and lived under constant threat of sexual exploitation.
            </br></br>The colonisation of Australia had a devastating impact on the Aboriginal people, with
            dispossession of their land, illness and death from introduced diseases and huge disruption of their
            traditional lifestyles and practices.
            </br></br><strong>Squatters migrate across the continent</strong>
            </br></br> By the 1820s, many soldiers, officers and emancipated convicts had turned land they received from
            the government into flourishing farms. News of Australia’s cheap land and bountiful work was bringing more
            and more boatloads of migrants from Britain. Settlers, or ‘squatters’, began to move deeper into Aboriginal
            territories – often armed – in search of pasture and water for their stock.
            </br></br>In 1825, a party of soldiers and convicts settled in the territory of the Yuggera people, close to
            modern-day Brisbane. Perth was settled by English gentlemen in 1829, and in 1835 a squatter sailed to Port
            Phillip Bay and chose the location for Melbourne. At the same time a private British company, proud to have
            no convict links, settled Adelaide in South Australia.
            </br></br>Gold fever brings wealth, migrants and rebellion
            </br></br>Gold was discovered in New South Wales and central Victoria in 1851, luring thousands of hopefuls
            from the other states. They were joined by boatloads of prospectors from China and a chaotic carnival of
            entertainers, publicans, illicit liquor-sellers, and quacks from across the world.
            </br></br>In Victoria, the British governor imposed mining licenses on goldfield workers, which led to the
            violent, anti-authoritarian struggle of the Eureka Stockade in 1854. The miners lost the battle, but were
            granted more rights and in 1854 a bill was passed, giving the right to vote and stand for parliament to any
            digger who owned a miner’s licence. Many historians regard this as the beginning of Australian democracy.
            </br></br><strong>Australia becomes a nation</strong>
            </br></br>Australia’s six states became a nation under a single constitution on 1 January 1901. Today people
            from more than 200 countries make up the Australian community, and more than 300 languages are spoken in
            Australian homes.
            </br></br><strong>Australians go to war</strong>
            </br></br>The First World War had a devastating effect on Australia. There were less than three million men
            in 1914, and around 420,000 of them volunteered for service in the war. An estimated 60,000 died and tens of
            thousands were wounded in action. In response, the Australian Government established the ‘Soldier Settler
            Scheme’, providing farmland and funds to returning soldiers.
            </br></br>The end of war heralded the ‘Roaring Twenties’ and a whirlwind of new cars, American jazz and
            movies as well as fervour for the British Empire. When the Great Depression hit in 1929, social and economic
            divisions widened and many Australian financial institutions collapsed. Sport was the national distraction
            and sporting heroes, such as racehorse champion Phar Lap and cricketer Donald Bradman, gained near-mythical
            status.
            </br></br>During the Second World War, Australian forces made a significant contribution to the Allied
            victory in Europe, Asia and the Pacific. The generation that fought in the war and survived came out of it
            with a sense of pride.
            </br></br>New Australians arrive to a post-war boom
            </br></br>During the war many new occupations opened to women, and the number of women employed grew
            quickly. When WWII ended in 1945, hundreds of thousands of migrants from across Europe and the Middle East
            arrived in Australia, many finding jobs in the booming manufacturing sector.
            </br></br>Australia’s economy flourished throughout the 1950s with major nation-building projects such as
            the Snowy Mountains Hydroelectric Scheme and the Sydney Opera House. International demand grew for
            Australia’s major exports of metals, wools, meat and wheat and suburban Australia also prospered. The rate
            of home ownership rose dramatically from barely 40 per cent in 1947 to more than 70 per cent by the 1960s.
            </br></br><strong>Australia loosens up</strong>
            </br></br>Australians were swept up in the revolutionary atmosphere of the 1960s. Australia’s new ethnic
            diversity, increasing independence from Britain and popular resistance to the Vietnam War all contributed to
            an atmosphere of political, economic and social change.
            </br></br>In 1967, Australians voted overwhelmingly ‘yes’ in a national referendum to let the federal
            government make laws on behalf of Aboriginal Australians and include them in future censuses. The result was
            the culmination of a strong reform campaign by both Aboriginal and white Australians.
            </br></br>In 1972, the Australian Labor Party under the idealistic leadership of Gough Whitlam was elected
            to power, ending the post-war domination of the Liberal and Country Party coalition. Over the next three
            years, his new government ended conscription, abolished university fees, introduced free universal health
            care, abandoned the White Australia policy, embraced multiculturalism and introduced no-fault divorce and
            equal pay for women.
            </br></br>However, by 1975, inflation and scandal led to the Governor-General dismissing the government. In
            the subsequent general election, the Labor Party suffered a major defeat and the Liberal–National Coalition
            ruled until 1983.
            </br></br><strong>Since the 1970s: Australian politics</strong>
            </br></br>Between 1983 and 1996, the Hawke–Keating Labor governments introduced a number of economic
            reforms, such as deregulating the banking system and floating the Australian dollar.
            </br></br>In 1996 a Coalition Government led by John Howard won the general election and was re-elected in
            1998, 2001 and 2004. The Liberal–National Coalition Government enacted several reforms, including changes in
            the taxation and industrial relations systems.
            </br></br>In 2007 the Labor Party, led by Kevin Rudd, was elected with an agenda to reform Australia’s
            industrial relations system, cut greenhouse emissions and implement a national curriculum in education.
            Three years later, Rudd was challenged by Julia Gillard who was to become the first female Prime Minister of
            Australia.
            </br></br>In 2013 the new Coalition government was sworn in, led by Tony Abbott. In September 2015 Abbott
            was defeated in a leadership ballot by Malcolm Turnbull, who was re-elected in a general election in July
            2016.</p>
    </div>
    </br>
    </br>
</div>
</br>
</br>
<footer><strong>Designed by</br><a href="https://www.facebook.com/alwyn.yeo">ALWYN YEO</a>,<a
                href="https://www.facebook.com/Mickeyjunwei?fref=ts">CHAN JUN WEI</a> and <a
                href="https://www.facebook.com/yee.shin.39">Lee Shin Yee</a></strong></footer>
</body>
</html>