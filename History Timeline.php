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
    <link href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f5/History_Logo.svg/739px-History_Logo.svg.png"
          type="image" rel="icon"/>

    <title>HistorySociety| Malaysia Timeline</title>
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
        <h2>14th century - Conversion of Malays to Islam begins.</h2>
        <p><strong>1826</strong> - British settlements of Malacca, Penang and Singapore combine to form the Colony of
            Straits Settlements, from where the British extend their influence by establishing protectorates over the
            Malay sultanates of the peninsula.</br>
            </br><strong>1895</strong> - Four Malay states combine to form the Federated Malay States.</br>
            </br><strong>1942-45</strong> - Japanese occupation.</br>
            </br><strong>1948</strong> - British-ruled Malayan territories unified under Federation of Malaya.</br>
            </br><strong>1948-60</strong> - State of emergency to counter local communist insurgency.</br>
            </br><strong>1957</strong> - Federation of Malaya becomes independent from Britain with Tunku Abdul Rahman
            as prime minister.</br>
            </br><strong>1963</strong> - British colonies of Sabah, Sarawak and Singapore join Federation of Malaya to
            form the Federation of Malaysia.</br>
            </br><strong>1965</strong> - Singapore withdraws from Malaysia, which is reduced to 13 states; communist
            insurgency begins in Sarawak.</br>
            </br><strong>1969</strong> - Malays stage anti-Chinese riots in the context of increasing frustration over
            the economic success of the ethnic Chinese.</br>
            </br><strong>1970</strong> - Tun Abdul Razak becomes prime minister following Abdul Rahman's resignation;
            forms National Front (BN) coalition.</br>
            </br><strong>Positive discrimination for Malays</strong></br>
            </br><strong>1971</strong> - Government introduces minimum quotas for Malays in business, education and the
            civil service.</br>
            </br><strong>1977</strong> - Kelantan chief minister expelled from Pan-Malaysian Islamic Party (PAS),
            triggering unrest, a national emergency and the expulsion of PAS from the BN coalition.</br>
            </br><strong>1978-89</strong> - Vietnamese refugees benefit from unrestricted asylum.</br>
            </br><strong>1981</strong> - Mahathir Mohamad becomes prime minister.</br>
            </br><strong></strong>1989</strong> - Local communist insurgents sign peace accord with government.</br>
            </br><strong>1990</strong> - Sarawak communist insurgents sign peace accord with government.</br>
            </br><strong>1993</strong> - Sultans lose legal immunity.</br>
            </br><strong>Financial crisis</strong></br>
            </br><strong>1997</strong> - Asian financial crisis spells end of decade of impressive economic growth.</br>
            </br><strong>1998</strong> - Prime Minister Mahathir Mohamad sacks his deputy and presumed successor, Anwar
            Ibrahim, on charges of sexual misconduct, against the background of differences between the two men over
            economic policy; Ibrahim arrested.</br>
            </br><strong>2000</strong> - Ibrahim is found guilty of sodomy and sentenced to nine years in prison. This
            is added to the six-year jail sentence he was given in 1999 after being found guilty of corruption following
            a controversial trial.</br>
            </br><strong>2001</strong> - Dozens arrested during worst ethnic clashes in decades between Malays and
            ethnic Indians. Demonstrations against the Internal Security Act following the detention without trial of
            supporters of Anwar Ibrahim. Malaysia, Singapore resolve long-standing disputes, agree to build a new bridge
            and tunnel.</br>
            </br><strong>Mahathir bows out</strong></br>
            </br><strong>2002</strong> August - Tough new laws against illegal immigrants come into effect, providing
            for whipping and prison terms for offenders. Laws prompt exodus of foreign workers.</br>
            </br><strong>2003</strong> October - Abdullah Ahmad Badawi takes over as prime minister as Mahathir Mohamad
            steps down after 22 years in office.</br>
            </br><strong>2004</strong> - Prime Minister Abdullah Badawi wins landslide general election victory. Former
            deputy PM Anwar Ibrahim freed after court overturns his sodomy conviction. Scores of Malaysians die in Asian
            tsunami disaster. Malaysia delays planned deportations of many thousands of illegal immigrants, most of them
            from Indonesia.</br>
            </br><strong>2005</strong> - Malaysia, Singapore settle a bitter dispute over land reclamation work in
            border waters. Round-up of illegal immigrants follows a four-month amnesty which sees an exodus of hundreds
            of thousands of illegal workers. Those remaining risk jail, a fine or whipping.</br>
            </br><strong>2006</strong> - Malaysia shelves construction of controversial bridge to Singapore. Some 60,000
            displaced by flooding in the south.</br>
            </br><strong>2007</strong> - Around 70,000 evacuated as second wave of floods hits south of country.
            Malaysia, Indonesia and Brunei Darussalam sign deal to protect 200,000 square kilometres of rainforest on
            the island of Borneo. Anwar Ibrahim's Parti Keadilan Rakyat loses a bitterly contested by-election to the
            government. The result is seen as a blow to his efforts to revive his political career.</br>
            </br><strong>2008</strong> - Prime Minister Abdullah Ahmad Badawi's National Front coalition suffers its
            worst election result in decades, losing its two-thirds parliamentary majority and control of five state
            assemblies. Opposition leader Anwar Ibrahim is arrested over allegations of sodomy, in a move that
            exacerbates political tensions.</br>
            </br><strong>Economic downturn</strong></br>
            </br><strong>2009</strong> - Malaysia bans recruitment of foreign workers to protect its citizens from
            unemployment during the economic downturn. Anwar Ibrahim's second sodomy trial begins. The government
            unveils a $16bn economic stimulus plan as it seeks to stave off a deep recession. Badawi steps down as prime
            minister and is replaced by his deputy, Najib Abdul Razak.</br>
            </br><strong>2010</strong> - Religious tensions increase following a court decision allowing non-Muslims to
            use the word Allah to refer to God. Three Malay women are flogged for extra-marital sex in the first case of
            this Islamic punishment being meted out to women in the country. Decision by Malacca state to allow underage
            marriages draws criticism from women's groups.</br>
            </br><strong>2011</strong> - Police use tear gas and water cannon to disperse thousands of people taking
            part in Kuala Lumpur rally calling for electoral reform. PM Razak announces setting-up of parliamentary
            committee to study electoral reform.</br>
            </br><strong>2012</strong> January - High Court acquits opposition leader Anwar Ibrahim of charge of
            sodomy.</br>
            </br><strong>2012</strong> February - Some 3,000 environmental activists take part in protest against
            building of rare earths refinery in Pahang state.</br>
            </br> <strong>2012</strong> June - A Malaysian court approves the extradition of Iranian Masoud
            Sedaghatzadeh to Thailand over his alleged involvement in a bomb plot targeting Israeli officials in
            February.</br>
            </br><strong>2013</strong> March - Malaysian troops attack Filipino insurgents around Lahad Datu on Borneo
            after local clashes leave about 30 people dead. The roughly 180 Filipinos are demanding the cessation of
            part of Sabah state to the defunct Sultanate of Sulu.</br>
            </br><strong>2013</strong> May - Ruling National Front coalition retains power in national elections, albeit
            with reduced majority. Opposition supporters allege fraud.</br>
            </br><strong>2013</strong> October - Appeal court rules non-Muslims cannot use the word Allah to refer to
            God even in their own faiths, overturning a 2009 lower court ruling.</br>
            </br><strong>2014</strong> January - Government bans Comango broad civil rights coalition on grounds that
            most of its constituent groups are not registered and some promote "rights counter to Islam" such as
            homosexuality.</br>
            </br><strong>2014</strong> March - Government and Malaysia Airlines face international criticism over
            handling of Flight MH370, which goes missing en route to China in unexplained circumstances. The plane is
            believed to have crashed in the southern Indian Ocean, but an extensive search turns up no sign of
            wreckage.</br>
            </br> <strong>2014</strong> June - Malaysia's highest rejects a challenge to the ban on Christians using the
            word "Allah" to refer to God, in a highly divisive legal case.</br>
            </br><strong>2014</strong> July - Malaysian Airlines flight MH17 travelling from Amsterdam to Kuala Lumpur
            crashes in eastern Ukraine, close to the border with Russia, with the loss of all 298 people on board. The
            two sides in the Ukrainian conflict accuse each other of shooting the plane down. The incident and its
            aftermath spark international outrage and condemnation.</br>
            </br><strong>2014</strong> September - Malaysia says the findings of a Dutch report into the crash of a
            Malaysia Airlines flight over eastern Ukraine suggests the plane had been shot down.</br>
            </br><strong>2015</strong> February - Opposition leader Anwar Ibrahim is jailed for five years after failing
            to win an appeal against a sodomy conviction.</br>
            </br> <strong>2015</strong> March - Opposition Pan-Malaysian Islamic Party (PAS) seeks parliament's approval
            to expand hudud laws, a strict Islamic penal code which permits punishments such as flogging, stoning and
            public execution, in the northeastern state of Kelantan.</br>
            </br><strong>2015</strong> March - Police arrest opposition politician Nurul Izzah Anwar, the eldest
            daughter of jailed opposition leader Anwar Ibrahim, for alleged sedition over a speech she made in
            parliament.</br>
            </br><strong>2015</strong> April - Anwar Ibrahim is denied royal pardon to overturn sodomy conviction and
            loses his seat as an MP.</br>
            </br>Lower house of parliament passes controversial anti-terrorism bill that allows suspects to be held
            indefinitely without trial, and toughens penalties for sedition.</br>
            </br><strong>2015</strong> May - Malaysia and Indonesia agree to rescue and provide temporary shelter to
            Rohingya migrants fleeng Myanmar by boat, after weeks of mounting humanitarian crisis.</br>
            </br><strong>2015</strong> June - The Wall Street Journal alleges that close to $700m (£490m) from the
            sovereign wealth fund 1MDB was deposited in Prime Minister Najib Razak's personal bank account.</br>
            </br><strong>2016</strong> January - Anti-Corruption Commission announces appeal after attorney-general
            clears Prime Minister Najib Razak of wrongdoing in relation to the 1MDB financial scandal.</br>
            </br><strong>2016</strong> July - US Department of Justice says it is seizing more than $1bn (£761m) in
            assets associated with funds misappropriated from the 1MDB fund.</br>
            </br> <strong>2016</strong> November - Thousands of anti-government protesters take to the streets of Kuala
            Lumpur to demand the resignation of Prime Minister Najib Razak over his alleged links to a corruption
            scandal.</br>
            </br><strong>2016</strong> December - Sultan Muhammad V is sworn in as the new king, succeeding Sultan Abdul
            Halim Mu'adzam Shah.</br>
            </br><strong>2017</strong> February - Kim Jong-nam, the estranged brother of North Korean leader Kim
            Jong-un, is killed with a nerve agent at a Malaysian airport.</p>
    </div>
</div>
</br>
</br>
<footer><strong>Designed by</br><a href="https://www.facebook.com/alwyn.yeo">ALWYN YEO</a>,<a
                href="https://www.facebook.com/Mickeyjunwei?fref=ts">CHAN JUN WEI</a> and <a
                href="https://www.facebook.com/yee.shin.39">Lee Shin Yee</a></strong></footer>
</body>
</html>