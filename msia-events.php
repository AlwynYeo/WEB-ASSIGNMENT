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
    <h1>Historical Events</h1>
    <div class="timeline-">
        <p><strong>1511-07-25</strong> Portuguese forces under <strong>Afonso de Albuquerque</strong> first assault the
            prosperous trading city of Malacca, Malay Peninsula
            </br></br>Admiral and Duke of Goa Afonso de Albuquerque
            </br></br>Admiral and Duke of Goa
            </br></br><strong>Afonso de Albuquerque</strong>
            </br></br><strong>1786-08-11</strong> Captain Francis Light establishes the British colony of Penang in
            Malaysia
            </br></br><strong>1816-10-21</strong> The Penang Free School is founded in George Town, Penang, Malaysia, by
            the Rev Hutchings. It is the oldest English-language school in Southeast Asia.
            </br></br><strong>1817-01-22</strong> British freighter Diana sinks off Malaya
            </br></br><strong>1923-04-06</strong> The first Prefects Board in Southeast Asia is formed in Victoria
            Institution, Malaysia.
            </br></br><strong>1934-09-01</strong> SMJK Sam Tet was founded by Father Fourgs from the St. Michael Church,
            Ipoh, Perak, Malaysia.
            </br></br><strong>1941-12-10</strong> British battleship Prince of Wales and battlecruiser Repulse (Force Z
            ) sunk following Japanese aerial attacks off Malaya. 840 men die
            </br></br><strong>1942-01-11</strong> Japan conquers Kuala Lumpur, Malaya
            </br></br><strong>1946-04-01</strong> The Malayan Union is formed as a federation of the Malay states and
            the Straits Settlements of Penang and Malacca
            </br></br><strong>1946-05-11</strong> United Malays National Organisation is created.
            </br></br><strong>1948-02-01</strong> Nine Malay sultanates and two British Straits Settlements (Penang and
            Malacca) form the <strong>Federation of Malaya</strong>
            </br></br>Malaysia's Founding Father Tunku Abdul Rahman
            </br></br>Malaysia's Founding Father
            </br></br><strong>Tunku Abdul Rahman</strong>
            </br></br><strong>1948-12-12</strong> Malayan Emergency: Batang Kali Massacre - 14 members of the Scots
            Guards stationed in Malaysia allegedly massacre 24 unarmed civilians and set fire to the village.
            </br></br><strong>1949-12-04</strong> Duncan Stewart, 2nd British Governor of Sarawak is fatally stabbed in
            the streets of Sibu by Malay student Rosli Dhoby with help from Morshidi Sidek with the goal of helping
            neighbouring Indonesia to take over British Sarawak
            </br></br><strong>1950-06-03</strong> French expedition reaches top of Himalayan peak of Annapurna in Nepal
            </br></br><strong>1957-08-27</strong> The Constitution of Malaysia comes into force.
            </br></br><strong>1957-08-31</strong> Federation of Malaya gains independence from Great Britain
            </br></br><strong>1959-04-16</strong> Datu Abdul Rozak inaugurated as premier of Malaysia federation
            </br></br><strong>1963-09-16</strong> Federation of Malaysia formed by Malaya, Singapore, British North
            Borneo (Sabah) and Sarawak
            </br></br><strong>1964-07-21</strong> Race riots in Singapore between Chinese and Malay groups, 23 killed,
            454 injured
            </br></br><strong>1964-09-02</strong> Indonesian paratroopers lands in Malaysia
            </br></br><strong>1964-09-03 2nd incident</strong> that year of race riots in Singapore between Chinese and
            Malay, 13 people killed, 106 injured
            </br></br><strong>1965-08-07 Lee Kuan Yew</strong>, Prime Minister of Singapore signs a separation agreement
            with Malaysia, after 2 years of political union
            </br></br>Founder of Modern Singapore Lee Kuan Yew
            </br></br><strong>Founder of Modern Singapore</strong>
            </br></br><strong>Lee Kuan Yew</strong>
            </br></br><strong>1965-08-09</strong> Singapore separates from the Federation of Malaysia and gains its
            independence
            </br></br><strong>1967-08-08</strong> Indonesia, Malaysia, Philippines, Singapore & Thailand meet to form
            Association of South East Asian Nations (ASEAN)
            </br></br><strong>1969-05-13</strong> Race riots, later known as the May 13 Incident, take place in Kuala
            Lumpur, Malaysia.
            </br></br><strong>1970-09-23</strong> Abdul Razak bin Hussain becomes premier of Malaysia
            </br></br><strong>1972-02-01</strong> Kuala Lumpur becomes a city by a royal charter granted by the Yang
            di-Pertuan Agong of Malaysia.
            </br></br><strong>1975-06-30</strong> Heavyweight <strong>Muhammad Ali</strong> defeats Joe Bugner in
            Malaysia
            </br></br>Heavyweight Boxing Champion Muhammad Ali
            </br></br>Heavyweight Boxing Champion
            </br></br><strong>Muhammad Ali</strong>
            </br></br><strong>1982-07-05</strong> ICC Trophy record p/ship, 257 Schoonheim/Liffman, Hol v Malay
            </br></br><strong>1988-07-31</strong> 32 people are killed and 1,674 injured when a bridge at the Sultan
            Abdul Halim ferry terminal collapses in Butterworth, Malaysia.
            </br></br><strong>1994-04-25</strong> King Azlan Shah of Malaysia resigns
            </br></br><strong>1998-06-27</strong> Opening of the Kuala Lumpur International Airport in
            Malaysia.
            </br></br><strong>1998-09-11</strong> 16th Commonwealth Games open in Kuala Lumpur,
            Malaysia making Malaysia the first Asian country to host the games
            </br></br><strong>2003-10-31</strong> Mahathir bin Mohamad resigns as Prime
            Minister of Malaysia and is replaced by Deputy Prime Minister
            Abdullah Ahmad Badawi, marking an end to Mahathir's 22 years in
            power.
            </br></br><strong>2004-03-21</strong> In Malaysia, the 11th Federal
            and State elections are held, returning the ruling coalition
            Barisan Nasional to power with an increased majority.
            </br></br><strong>2004-12-26</strong> 9.3 magnitude
            earthquake creates a tsunami causing devastation in
            Sri Lanka, India, Indonesia, Thailand, Malaysia, the
            Maldives and edges of the Indian Ocean, killing
            230,000 people
            </br></br><strong>2008-05-23</strong> The
            International Court of Justice (ICJ) awards
            Middle Rocks to Malaysia and Pedra Branca
            (Pulau Batu Puteh) to Singapore, ending a
            29-year territorial dispute between the two
            countries.
            </br></br><strong>2008-11-13</strong> Equity
            research by Deutsche Bank states
            that Indonesia, Malaysia, Thailand
            and the Philippines should not
            experience a recession, despite
            potential harm to economic growth
            from falling commodity prices and
            possible weaker exports
            </br></br><strong>2009-03-04</strong>
            Malaysia has a 50% chance of
            slipping into the recession
            as growth is expected to
            reach just 0.5% for the
            year, announces the
            executive director Datuk
            Mohamed Ariff Abdul Kareem
            of the Malaysian Institute
            of Economic Research
            </br></br><strong>2010-01-17</strong>
            A dragon boat from
            Chung Ling High
            School capsizes and
            collides with a
            tugboat amid strong
            currents in Penang,
            Malaysia, killing 6
            people and injuring
            12
            </br></br><strong>2013-03-01</strong>
            14 people
            are killed
            in the Lahad
            Datu
            standoff
            between
            Malaysian
            government
            and rebel
            forces
            </br></br>
            <strong>2013-08-21</strong>
            37
            people
            are
            killed
            and
            16
            are
            injured
            in a
            bus
            crash
            near
            Chin
            Swee
            Temple,
            Malaysia
            </br></br>
            <strong>2014-03-08</strong>
            Malaysia
            Airlines
            Flight
            370
            with
            239
            people
            loses
            contact
            and
            disappears,
            prompting
            the
            most
            expensive
            search
            effort
            in
            history
            </br></br>
            <strong>2014-07-17</strong>
            Malaysia
            Airlines
            Flight
            17
            is
            shot
            down
            over
            Eastern
            Ukraine
            by
            a
            Buk
            surface-to-air
            missile
            launched
            from
            pro-Russian
            separatist-controlled
            territory,
            killing
            all
            283
            passengers
            and
            15
            crew
            on
            board
            </br></br>
            <strong>2014-10-16</strong>
            New
            Zealand,
            Malaysia,
            Angola,
            Spain
            and
            Venezuela
            are
            elected
            to
            the
            United
            Nations
            Security
            Council
            </br></br>
            <strong>2015-01-29</strong>
            Malaysia
            officially
            declares
            the
            disappearance
            of
            missing
            flight
            MH370
            an
            accident
            </br></br>
            <strong>2015-08-30</strong>
            Former
            Malaysian
            Prime
            Minister
            Mahathir
            Mohamad
            calls
            for
            the
            removal
            of
            current
            Prime
            Minister
            Najib
            Razak
            during
            2nd
            day
            of
            street
            protests
            </br></br>
            <strong>2016-04-07</strong>
            Longest-ever
            captured
            python
            found
            on
            Penang
            in
            Malaysia
            (26ft/8m)
            </br></br>
            <strong>2016-12-23</strong>
            United
            Nations
            Security
            Council
            adopts
            a
            landmark
            resolution
            demanding
            a
            halt
            to
            all
            Israeli
            settlement
            in
            Palestinian
            territory
            occupied
            since
            1967.
            Resolution
            2334
            was
            moved
            by
            New
            Zealand,
            Malaysia,
            Senegal
            and
            Venezuela
            and
            passed
            14-0
            with
            a
            US
            abstention
            .
            </br></br>
            <strong>2017-03-15</strong>
            Disney
            refuses
            to
            cut
            gay
            moment
            in
            film
            "Beauty
            and
            the
            Beast"
            for
            Malaysian
            censors,
            instead
            pulls
            film
            from
            Malaysia
            </br></br>
            <strong>Famous
                Birthdays</strong>
            </br></br>
            <strong>1506-04-07</strong>
            Francis
            Xavier,
            saint/Jesuit
            missionary
            to
            India,
            Malaya,
            &
            Japan
            </br></br>
            <strong>1855-12-10</strong><strong>
                Henry
                Nicholas
                Ridley,
                West
                Harling
                Hall,
                Norfolk,
                U.K.,
                Botanist
                (Malay
                Peninsula
                rubber
                industry)
                </br></br>
                <strong>1903-02-08
                    Tunku
                    Abdul
                    Rahman</strong>,
                Malaysia's
                founding
                father,
                1st
                Prime
                Minister
                of
                Malaya
                (1957-63)
                and
                Malaysia
                (1963-70),
                born
                in
                Alor
                Star,
                Kedah
                (d.
                1990)
                </br></br>
                Malaysia's
                Founding
                Father
                Tunku
                Abdul
                Rahman
                </br></br>
                Malaysia's
                Founding
                Father
                </br></br>
                <strong>Tunku
                    Abdul
                    Rahman</strong>
                </br></br>
                <strong>1916-11-23</strong>
                Michael
                Gough,
                English
                actor
                (Hammer
                Horror
                Films,
                Search
                for
                the
                Nile),
                born
                in
                Kuala
                Lumpur,
                British
                Malaya
                (d.
                2011)
                </br></br>
                <strong>1917-12-10</strong>
                Sultan
                Yahya
                Petra,
                King
                of
                Malaysia
                (d.
                1979)
                </br></br>
                <strong>1918-05-13</strong>
                John
                Johnston,
                British
                diplomat
                (Rhodesia,
                Malaysia)
                </br></br>
                <strong>1919-11-20</strong>
                Dulcie
                Gray,
                Kuala
                Lampur,
                Malaysia,
                actress
                (Mine
                Own
                Executioner)
                </br></br>
                <strong>1920-11-25</strong>
                Tuanku
                Syed
                Putra
                ibni
                Almarhum
                Syed
                Hassan
                Jamalullail,
                King
                of
                Malaysia
                (d.
                2000)
                </br></br>
                <strong>1922-03-11</strong>
                Abdul
                Razak
                bin
                Hussain,
                premier
                of
                Malaysia
                (1970-77)
                </br></br>
                <strong>1924-12-25</strong>
                Henry
                Sy
                Sr.
                Chinese
                Malay
                businessman
                'Philippines
                Retail
                King'
                in
                Amoy
                China
                </br></br>
                <strong>1925-12-20</strong>
                Datuk
                Seri
                Mahathir
                bin
                Mahamad,
                premier
                of
                Malaysia
                (1981-
                )
                </br></br>
                <strong>1927-10-01</strong>
                Sandy
                Gall,
                Malaysian-born
                British
                journalist
                and
                newscaster
                </br></br>
                <strong>1930-05-29</strong>
                Eddy
                Choong,
                Penang,
                Malaysia,
                Chinese
                badminton
                player,
                (d.
                2013)
                </br></br>
                <strong>1930-10-24</strong>
                Sultan
                Ahmad
                Shah,
                King
                of
                Malaysia
                </br></br>
                <strong>1931-12-24</strong>
                Jill
                Bennett,
                Malaysian
                actress
                (Lady
                Jane,
                Concrete
                Jungle),
                born
                in
                Penang
                </br></br>
                <strong>1939-11-26</strong>
                Abdullah
                Ahmad
                Badawi,
                Malaysian
                politician
                </br></br>
                <strong>1960-12-08</strong>
                Lim
                Guan
                Eng,
                Secretary-General
                of
                the
                Malaysian
                Democratic
                Action
                Party
                (DAP)
                </br></br>
                <strong>1962-01-22</strong>
                Sultan
                Mizan
                Zainal
                Abidin
                of
                Terengganu,
                Yang
                di-Pertuan
                Agong
                of
                Malaysia
                </br></br>
                <strong>1962-08-06</strong>
                Michelle
                Yeoh,
                Chinese-Malaysian
                actress
                </br></br>
                <strong>1962-10-02</strong>
                Aziz
                M.
                Osman,
                Malaysian
                actor
                and
                director
                </br></br>
                <strong>1962-11-06</strong>
                Aznil
                Nawawi,
                Malaysian
                host,
                actor
                and
                singer
                </br></br>
                <strong>1964-04-30</strong>
                Tony
                Fernandes,
                Malaysian
                businessman
                (AirAsia),
                born
                in
                Kuala
                Lumpur
                </br></br>
                Entrepreneur
                Tony
                Fernandes
                </br></br>
                Entrepreneur
                </br></br>
                <strong>Tony
                    Fernandes</strong></strong>
            </br></br>
            <strong>1968-05-02</strong>
            Ziana
            Zain,
            Malaysian
            singer
            and
            actress
            </br></br>
            <strong>1970-08-30</strong>
            Michael
            Wong
            Guang
            Liang,
            Chinese
            Malaysian
            singer
            </br></br>
            <strong>1972-11-30</strong>
            Adeline
            Ong,
            Miss
            Universe-Malaysia
            (1996)
            </br></br>
            <strong>1974-03-03</strong>
            Paula
            Malai
            Ali,
            Malaysian-Bruneian
            TV
            Presenter
            and
            Actress
            </br></br>
            <strong>1976-07-20</strong>
            Alex
            Yoong,
            Malaysian
            racing
            driver
            </br></br>
            <strong>1976-09-17</strong>
            Trincy
            Low,
            Miss
            Malaysia
            Universe
            (1997)
            </br></br>
            <strong>1978-06-16</strong>
            Jasmine
            Leong,
            Chinese
            Malaysian
            singer
            </br></br>
            <strong>1978-12-04</strong>
            Jaclyn
            Victor,
            Malaysian
            singer
            </br></br>
            <strong>1979-01-11</strong>
            Siti
            Nurhaliza,
            Malaysian
            singer
            </br></br>
            <strong>1979-09-30</strong>
            Vince
            Chong,
            Malaysian
            singer-songwriter
            </br></br>
            <strong>1981-11-29</strong>
            Nicholas
            Teo,
            Malaysian
            singer
            and
            actor
            </br></br>
            <strong>1981-12-14</strong>
            Amber
            Chia,
            Malaysian
            model
            and
            actress
            </br></br>
            <strong>1981-12-16</strong>
            Took
            Leng
            How,
            Malaysian
            criminal
            (d.
            2006)
            </br></br>
            <strong>1982-10-24</strong>
            Mohamed
            Fairuz
            Fauzy,
            Malaysian
            racing
            driver
            </br></br>
            <strong>1983-03-10</strong>
            Che'Nelle,
            Malaysian
            Australian
            Singer
            </br></br>
            <strong>1986-10-06</strong>
            Mohammad
            Shukri,
            Malaysian
            cricketer
            </br></br>
            <strong>Famous
                Weddings</strong>
            </br></br>
            <strong>2006-11-08</strong>
            Malaysian
            actress
            Sazzy
            Falak
            (25)
            weds
            co-founder
            of
            LVG
            Consultants
            and
            LVG
            MoneySkool
            Nazril
            Idrus
            </br></br>
            <strong>Famous
                Deaths</strong>
            </br></br>
            <strong>1875-11-02</strong>
            James
            W.
            W.
            Birch,
            1st
            British
            resident
            in
            Perak,
            Malaysia
            is
            speared
            to
            death
            while
            in
            the
            bath-house
            of
            his
            boat,
            SS
            Dragon
            at
            49
            </br></br>
            <strong>1914-11-14</strong>
            Vengayil
            Kunhiraman
            Nayanar,
            Malayalin
            journalist
            (b.
            1861)
            </br></br>
            <strong>1942-02-14</strong>
            Adnan
            Bin
            Saidi,
            Officer
            of
            the
            Malay
            Regiment
            killed
            in
            the
            defense
            of
            Singapore
            (b.
            1915)
            </br></br>
            <strong>1949-12-10</strong>
            Duncan
            Stewart,
            2nd
            British
            Governor
            of
            Sarawak
            (1949),
            dies
            at
            45
            after
            being
            fatally
            stabbed
            in
            the
            streets
            of
            Sibu
            by
            pro-Indonesian
            Malay
            student
            Rosli
            Dhoby
            </br></br>
            <strong>1950-03-02</strong>
            Rosli
            Dhobi,
            pro-Indonesian
            Malay
            student,
            hanged
            in
            Kuching
            for
            the
            assassination
            of
            Duncan
            Stewart,
            British
            Governor
            of
            Sarawak
            </br></br>
            <strong>1951-10-06</strong>
            Henry
            Gurney,
            British
            high
            commissioner
            to
            Malaya,
            assassinated
            </br></br>
            <strong>1956-10-24</strong>
            Henry
            Nicholas
            Ridley,
            British
            botanist
            (Malay
            Peninsula
            rubber
            industry),
            dies
            at
            100
            </br></br>
            <strong>1973-05-29</strong>
            P.
            Ramlee,
            Malaysian
            film
            actor,
            director,
            singer
            and
            songwriter.
            (b.
            1929)
            </br></br>
            <strong>1976-01-14</strong>
            Abdul
            Razak
            bin
            Hussain,
            premier
            of
            Malaysia
            (1970-77),
            dies
            at
            53
            </br></br>
            <strong>1990-12-06</strong>
            Tunku
            Malaysia's
            founding
            father,
            1st
            Prime
            Minister
            of
            Malaya
            (1957-63)
            and
            Malaysia
            (1963-70),
            dies
            at
            87
            </br></br>
            Malaysia's
            Foundku
            Abdul
            Rahman
            </br></br>
            Malaysia's
            Found
            </br></br>
            <strong>Tunku
                Abdul
                Rahman</strong>
            </br></br>
            <strong>1996-11-13</strong>
            Swami
            Rama,
            Himalayan
            yoga
            master
            (b.
            1925)
            </br></br>
            <strong>2001-11-21</strong>
            Salahuddin
            of
            Malaysia,
            King
            of
            Malaysia
            (b.
            1926)
            </br></br>
            <strong>2005-10-20</strong>
            Endon
            Mahmood,
            First
            Lady
            of
            Malaysia
            (breast
            cancer)
            (b.
            1941)
            </br></br>
            <strong>2005-12-20</strong>
            Maniam
            Moorthy,
            Malaysian
            climber
            </br></br>
            <strong>2007-01-23</strong>
            Syed
            Hussein
            Alatas,
            Malaysian
            Politician
            (b.
            1928)
            </br></br>
            <strong>2008-03-19</strong>
            Raghuvaran,
            Tamil,
            Telugu
            and
            Malayalam
            actor
            (b.
            1948)
            </br></br>
            <strong>2009-07-25</strong>
            Yasmin
            Ahmad,
            Malaysian
            film
            director,
            writer
            and
            scriptwriter
            (b.
            1958)
            </br></br>
            <strong>2009-09-17</strong>
            Noordin
            Mohammad
            Top,
            Malaysian
            Islamist
            terrorist
            (b.
            1968)
        </p>
    </div>
</div>
</br>
</br>
<footer><strong>Designed by</br><a href="https://www.facebook.com/alwyn.yeo">ALWYN YEO</a>,<a
                href="https://www.facebook.com/Mickeyjunwei?fref=ts">CHAN JUN WEI</a> and <a
                href="https://www.facebook.com/yee.shin.39">Lee Shin Yee</a></strong></footer>
</body>
</html>