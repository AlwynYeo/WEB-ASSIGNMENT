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
    <title>HistorySociety | Japan Timeline</title>
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
    <div class="timeline">
        <a href="History Timeline.php">
            <input type="button" value="Malaysia"/></a>
        <a href="british-timeline.php">
            <input type="button" value="British"/></a>
        <a href="japan-timeline.php">
            <input type="button" value="Japan"/></a>
        </br>
        </br>
    </div>
    <div class="timeline-">
        <h1>A chronology of key events:</h1>
        <p><strong>1853</strong> - US fleet forces Japan to open up to foreign influence after over 200 years of
            self-imposed isolation.</br>
            </br><strong>1868</strong> - End of centuries of rule by Shogun military caste, Empire of Japan proclaimed,
            and country enters period of rapid industrialisation and trading dominance over East Asia.</br>
            </br><strong>1894-95</strong> - Japan goes to war with China, and its better-equipped forces win victory in
            just nine months. China cedes Taiwan and permits Japan to trade on mainland.</br>
            </br><strong>1904</strong> - Japan becomes first Asian country in modern times to defeat an European power
            when it routs Russia in Manchuria.</br>
            </br> <strong>1910</strong> - Japan annexes Korea after three years of fighting, becoming one of the world's
            leading powers.</br>
            </br><strong>1914</strong> - Japan joins World War I on the side of Britain and her allies, gaining some
            Pacific islands from Germany at the end of the war.</br>
            </br><strong>918-1922</strong> - Japan tries to establish buffer zone against Bolshevik regime in Russia's
            Pacific provinces, forced out by British and US diplomatic pressure and domestic opposition.</br>
            </br><strong>1923</strong> - Earthquake in Tokyo region kills more than 100,000 people.</br>
            </br>British Empire ends 21-year alliance with Japan, signalling Western and US apprehension of Japan's
            growing power in East Asia.</br>
            </br><strong>1925</strong> - Universal male suffrage is instituted. The electorate increases fivefold.</br>
            </br><strong>Ultra-nationalism and war</strong></br>
            </br><strong>Late 1920s</strong> - Extreme nationalism begins to take hold in Japan as world economic
            depression hits. The emphasis is on a preservation of traditional Japanese values, and a rejection of
            "Western" influence.</br>
            </br><strong>1931</strong> - Japanese army invades Chinese province of Manchuria, installs puppet
            regime.</br>
            </br><strong>1932</strong> - Prime Minister Inukai Tsuyoshi killed during failed coup by nationalist army
            officers. Military holds increasing influence in the country.</br>
            </br><strong>1936</strong> - Japan signs alliance with Nazi Germany.</br>
            </br><strong>1937</strong> - Japan goes to war with China, capturing Shanghai, Beijing and Nanjing amid
            atrocities like the "Rape of Nanjing", in which up to 300,000 Chinese civilians were killed.</br>
            </br><strong>1939</strong> - Outbreak of Second World War in Europe. With fall of France in 1940, Japan
            moves to occupy French Indo-China.</br>
            </br><strong>Attack on Pearl Harbor</strong></br>
            </br><strong>1941</strong> - Japan launches a surprise attack on US Pacific fleet at Pearl Harbor, Hawaii.
            US and main allies declare war on Japan.</br>
            </br><strong>1942</strong> - Japan occupies succession of countries, including Philippines, Dutch East
            Indies, Burma and Malaya. In June, US aircraft carriers defeat the Japanese at the Battle of Midway. The US
            begins a strategy of "'island-hopping", cutting the Japanese support lines as its forces advance.</br>
            </br><strong>1944</strong> - US forces are near enough to Japan to start bombing raids on Japanese
            cities.</br>
            </br><strong>Hiroshima and Nagasaki</strong></br>
            </br><strong>1945</strong>: US drops atomic bomb on Hiroshima</br>
            </br><strong>945: Atom bomb hits Nagasaki</strong></br>
            </br><strong>1945</strong> - US planes drop two atomic bombs on Hiroshima and Nagasaki in August. Emperor
            Hirohito surrenders and relinquishes divine status. Japan placed under US military government. All Japanese
            military and naval forces disbanded.</br>
            </br><strong>1947</strong> - New constitution comes into force, establishes parliamentary system with all
            adults eligible to vote. Japan renounces war and pledges not to maintain land, sea or air forces for that
            purpose. Emperor granted ceremonial status.</br>
            </br><strong>1951</strong> - Japan signs peace treaty with US and other nations. To this day, there is no
            peace treaty with Russia, as the legal successor to the Soviet Union.</br>
            </br><strong>Independence</strong></br>
            </br><strong>1952</strong> - Japan regains independence. US retains several islands for military use,
            including Okinawa.</br>
            </br><strong>1955</strong> - Liberal Democratic Party (LDP) formed. Apart from brief interludes, party
            governs into 21st century.</br>
            </br><strong>1956</strong> - Japan joins United Nations.</br>
            </br><strong>1964</strong> - Olympic Games held in Tokyo.</br>
            </br><strong>1972</strong> - Japanese prime minister visits China and normal diplomatic relations are
            resumed. Japan subsequently closes embassy in Taiwan.</br>
            </br>Okinawa is returned to Japanese sovereignty, but US retains bases there.</br>
            </br><strong>1982</strong> - Japanese car firm Honda opens its first plant in the US.</br>
            </br><strong>1989</strong> - Emperor Hirohito dies, succeeded by Akihito.</br>
            </br><strong>1993</strong> July - Elections held against a background of bribery scandals and economic
            decline see the LDP ousted for the first time since 1955. A seven-party coalition takes power.</br>
            </br><strong>1993</strong> August - Government issues historic "Kono statement" apologising for Japanese
            military's war-time use of sex slaves.</br>
            </br><strong>1994</strong> - The anti-LDP coalition collapses. An administration supported by the LDP and
            the Socialists takes over.</br>
            </br><strong>Natural and man-made disasters</strong></br>
            </br><strong>1995</strong> January - An earthquake hits central Japan, killing thousands and causing
            widespread damage. The city of Kobe is hardest hit.</br>
            </br><strong>1995</strong> March - A religious sect, Aum Shinrikyo, releases the deadly nerve gas sarin on
            the Tokyo underground railway system. Twelve people are killed and thousands are injured.</br>
            </br>Rape of a local schoolgirl by US servicemen based on Okinawa sparks mass protests demanding the
            removal of US forces from the island.</br>
            </br><strong>1997</strong> - The economy enters a severe recession.</br>
            </br><strong>2001</strong> March - A Japanese court overturns compensation order for Korean women forced to
            work as sex slaves during WW II.</br>
            </br><strong>Koizumi at helm</strong></br>
            </br><strong>2001</strong> April - Junichiro Koizumi becomes new LDP leader and prime minister.</br>
            </br><strong>2001</strong> April - Trade dispute with China after Japan imposes import tariffs on Chinese
            agricultural products. China retaliates with import taxes on Japanese vehicles and other manufactured
            goods.</br>
            </br><strong>2001</strong> August- Koizumi pays homage at the Yasukuni shrine dedicated to the country's war
            dead, provoking protests from Japan's neighbours. The memorial also honours war criminals.</br>
            </br><strong>2001</strong> October - Koizumi visits Seoul and offers an apology for the suffering South
            Korea endured under his country's colonial rule.</br>
            </br><strong>2002</strong> September - Koizumi becomes the first Japanese leader to visit North Korea. North
            Korean leader Kim Jong-il apologises for abductions of Japanese citizens in 1970s and 1980s and confirms
            that eight of them are dead. Five Japanese nationals return home.</br>
            </br><strong>2003</strong> December - Government announces decision to install "purely defensive" US-made
            missile shield.</br>
            </br><strong>Iraq deployment</strong></br>
            </br><strong>2004</strong> February - Non-combat soldiers arrive in Iraq in first Japanese deployment in
            combat zone since World War II.</br>
            </br><strong>2005</strong> September - PM Koizumi wins a landslide victory in early general elections.</br>
            </br><strong>2006</strong> July - The last contingent of Japanese troops leaves Iraq.</br>
            </br><strong>Abe takes over</strong></br>
            </br><strong>2006</strong> September - Shinzo Abe succeeds Junichiro Koizumi as prime minister.</br>
            </br><strong>2006</strong> December - Parliament approves the creation of a fully-fledged defence ministry,
            the first since World War II.</br>
            </br><strong>2007</strong> April - Wen Jiabao becomes first Chinese prime minister to address the Japanese
            parliament. Mr Wen says both sides have succeeded in warming relations.</br>
            </br><strong>2007</strong> August - On the 62nd anniversary of Japan's surrender in World War II, almost
            the entire cabinet stays away from the Yasukuni shrine. Prime Minister Abe says he has no plans to visit the
            shrine for as long as the issue continues to be a diplomatic problem.</br>
            </br><strong>Abe steps down</strong></br>
            </br><strong>2007</strong> September - Prime Minister Shinzo Abe resigns, is replaced by Yasuo
            Fukuda.</br>
            </br><strong>2008</strong> June - Japan and China reach a deal for the joint development of a gas field in
            the East China Sea, resolving a four-year-old dispute.</br>
            </br><strong>2008</strong> September - Prime Minister Yasuo Fukuda resigns. Former foreign minister Taro
            Aso appointed as new premier.</br>
            </br><strong>2008</strong> November - General Toshio Tamogami, head of Japan's air force, loses his job
            after writing an essay seeking to justify Japan's role in the second world war.</br>
            </br><strong>2009</strong> February - Economics Minister Kaoru Yosano says Japan is facing worst economic
            crisis since World War II, after figures show its economy shrank by 3.3% in last quarter.</br>
            </br><strong>LDP defeated</strong></br>
            </br><strong>2009</strong> August - Opposition Democratic Party of Japan (DPJ) wins general election by a
            landslide, ending more than 50 years of nearly unbroken rule by the Liberal Democratic Party.</br>
            </br><strong>2009</strong> September - DPJ leader Yukio Hatoyama elected PM at head of coalition with
            Social Democratic Party and People's New Party.</br>
            </br><strong>2010</strong> June - Prime Minister Hatoyama quits over failure to close US military base on
            Okinawa. Finance Minister Naoto Kan takes over.</br>
            </br><strong>2010</strong> July - Ruling coalition loses majority in elections to the upper house of
            parliament.</br>
            </br><strong>Economic woes</strong></br>
            </br><strong>2011</strong> February - Japan is overtaken by China as world's second-largest economy.</br>
            </br><strong>2011</strong> March - Huge offshore earthquake and subsequent tsunami devastate miles of
            shoreline. Damage to the Fukushima nuclear plant causes a radiation leak that leaves extensive areas
            uninhabitable and contaminates food supplies.</br>
            </br><strong>2011</strong> August - Following severe criticism of his handling of the aftermath of the
            Fukushima nuclear crisis, Prime Minister Naoto Kan steps down. He is succeeded by Yoshihiko Noda.</br>
            </br><strong>2011</strong> December - The government announces a relaxation of Japan's self-imposed ban on
            arms exports. It says the move will allow the country to supply military equipment for humanitarian
            missions.</br>
            </br>strong>2012</strong> June - The lower house of parliament approves a bill to double sales tax, in
            order to make up the income tax shortfall caused by an ageing population. The governing Democratic Party
            splits, but retains its lower house majority.</br>
            </br><strong>2012</strong> July - Japan restarts the Ohi nuclear reactor, the first since the meltdown at
            the Fukushima power plant last year, amid local protests.</br>
            </br><strong>Islands rows</strong></br>
            </br><strong>2012</strong> August - Japan's economic growth slows to 0.3% from 1% in the second quarter as
            eurozone crisis hits exports and domestic consumption.</br>
            </br>Japan recalls its ambassador to Seoul in protest at a visit to the Liancourt Rocks by South
            Korean President Lee Myung-bak. Both countries claim the islets, which Japan calls Takeshima and South Korea
            calls Dokdo.</br>
            </br><strong>2012</strong> September - China cancels ceremonies to mark the 40th anniversary of restored
            diplomatic relations with Japan because of a public flare-up in a dispute over ownership of a group of
            islands in the East China Sea administered by Japan as the Senkaku Islands and claimed by China as the
            Diaoyu Islands. Taiwan also claims the islands.</br>
            </br><strong>Abe returns</strong></br>
            </br><strong>2012</strong> December - Opposition conservative Liberal Democratic Party wins landslide in
            early parliamentary elections. Former prime minister Shinzo Abe forms government on pledge of stimulating
            economic growth.</br>
            </br><strong>2013</strong> May - Exports rise 10.1% - the fastest annual rate since 2010 - thanks to
            weaker yen, boosting Prime Minister Abe's economic recovery plan.</br>
            </br><strong>2013</strong> July - Prime Minister Abe's coalition wins upper house elections, giving him
            control of both houses of parliament - a first for a prime minister in six years.</br>
            </br><strong>2013</strong> September - Tokyo is chosen to host the 2020 Olympics.</br>
            </br><strong>New security strategy</strong></br>
            </br><strong>2013</strong> December - Japan approves the relocation of a US military airbase on its
            southern island of Okinawa. The base, which houses over 25,000 US troops, will be relocated to a less
            densely populated part of the island.</br>
            </br>Japan's cabinet approves a new national security strategy and increased defence spending in a move
            widely seen as aimed at China.</br>
            </br><strong>2014</strong> July - Japan's government approves a landmark change in security policy, paving
            the way for its military to fight overseas.</br>
            </br>A judicial panel recommends that three former executives of the TEPCO utility - which runs the
            damaged Fukushima nuclear plant - be indicted on criminal charges for their role in the 2011 disaster.</br>
            </br><strong>2014</strong> December - The LDP-led government retains its large parliamentary majority in
            snap elections called by Prime Minister Shinzo Abe to seek a fresh mandate for his economic policies, after
            Japan's economy slips back into recession mid-year.</br>
            </br><strong>2015</strong> February - Economy re-emerges from recession in last quarter of 2014, although
            growth remains sluggish.</br>
            </br><strong>2015</strong> July - Lower house of parliament backs bills allowing troops to fight overseas
            for first time since Second World War, prompting protests at home and criticism from China.</br>
            </br><strong>2015</strong> August - Japan restarts first nuclear reactor at Sendai plant, under new safety
            rules following 2011 Fukushima disaster.</br>
            </br><strong>2016</strong> April - At least 44 people die and more than 1,000 are injured as a result of
            two major earthquakes on the southern island of Kyushu.</br>
            </br>These and major aftershocks also leave at least 100,000 people displaced.</br>
            </br><strong>2016</strong> August - Emperor Akihito indicates his readiness to abdicate in a rare video
            message to public.</p>
    </div>
</div>
</br>
</br>
<footer><strong>Designed by</br><a href="https://www.facebook.com/alwyn.yeo">ALWYN YEO</a>,<a
                href="https://www.facebook.com/Mickeyjunwei?fref=ts">CHAN JUN WEI</a> and <a
                href="https://www.facebook.com/yee.shin.39">Lee Shin Yee</a></strong></footer>
</body>
</html>