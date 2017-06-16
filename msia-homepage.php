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
        <h1>Malaysia : History</h1>
        <h2>History</h2>
        <p>Peninsular Malaysia
            </br></br>In prehistoric times, the region was inhabited by aboriginal people. In the 2nd century BCE
            settlers arrived from south China. Around the beginning of the 1st century CE, Indian traders began settling
            in Kedah and along the west coast of the peninsula. Hinduism and Buddhism were introduced during this early
            period; the Indian kingdom of Kunan was founded in the 1st century CE and Buddhist states developed to the
            east. The Javanese controlled the peninsula around 1330–50. The port of Malacca was founded in the 15th
            century; its rulers converted to Islam and traded with Muslim merchants, and Islam replaced Buddhism across
            present-day Malaysia.
            </br></br>The Sultanate of Malacca was seized by the Portuguese in 1511 but, a century later, they were
            driven out by the Dutch in alliance with the Sultan of Johor. The peninsula then became a Malay kingdom
            ruled by Johor. In 1786 the Sultan of Kedah granted the island of Penang to the British East India Company
            for use as a trading post; less than a decade later, the British took Malacca from the Dutch. In 1819 the
            British also acquired Singapore. Penang, Malacca and Singapore were ruled directly by Britain as the Straits
            Settlements.
            </br></br>By a series of treaties between 1873 and 1930, the British colonial Administrators took control of
            the foreign affairs of the nine Malay sultanates on the peninsula. In 1896 the Federated Malay Sates
            (Selangor, Negeri Sembilan, Perak and Pahang) came into existence, with Kuala Lumpur as the capital. The
            sultanates of northern Borneo – Brunei, Sabah and Sarawak – also became British protectorates.
            </br></br>Immigrants from southern China and southern India came to work in tin mines and on the
            plantations, facilitating the peninsula’s transition from a trading outpost to a commodity producer. The
            British introduced rubber farming towards the end of the 19th century.
            </br></br>Reaction to colonial rule began in the early 20th century. In 1915, Indian sepoys rebelled and
            came close to taking control of Singapore. In 1931, the Malayan Communist Party (MCP) was established. It
            had links with developing communism in China and drew most of its support from the Chinese community. By
            1937–38, anti-colonial nationalism began among the Malay community, with the formation of the Union of Young
            Malays.
            </br></br>The Japanese occupied the country from 1941 to 1945. Resistance, mainly from the Chinese, was led
            by MCP guerrillas. British rule was reintroduced after the war, but met active resistance from the MCP.
            Malay nationalists also campaigned for independence. The United Malays’ National Organisation (UMNO, the
            principal Malay party) was formed in 1946.
            </br></br>The Federation of Malaya, comprising 11 peninsular states, was established in 1948. A
            communist-led insurrection in that year was suppressed by the UK (although guerrilla warfare continued in
            the north of the peninsula and Borneo and the last insurgents only surrendered in 1989).
            </br></br>A delayed general election took place in 1955. This was won by the Alliance Party, formed out of
            UMNO, the Malayan Chinese Association and the Malayan Indian Congress.
            </br></br>Sabah
            </br></br>Formerly North Borneo, Sabah may have been inhabited since 7000 BCE. From the seventh century, the
            region traded in pottery with China. In the early 15th century the state was ruled mainly by the Sultan of
            Brunei. In 1847, Britain persuaded the Sultan of Brunei to cede Labuan Island. In 1882 the British North
            Borneo Chartered Company was established and began administering territory ceded by the Sultan of Brunei and
            the Sultan of Sulu. In 1888 the territory was made a British Protectorate, still administered by the
            Company, which also administered Labuan until 1905, when it was joined to the Straits Settlements. From 1942
            until 1945 the territory was occupied by the Japanese army. In July 1946 it became the Crown colony of North
            Borneo.
            </br></br>Sarawak
            </br></br>Archaeological evidence suggests that Sarawak was inhabited from about 5000 BCE. From the 15th
            century, it was ruled by the Sultan of Brunei who, in 1839, ennobled James Brooke, a British adventurer, as
            Rajah of Sarawak, a reward for his help in calming a rebellion in Brunei. Brooke waged a vigorous campaign
            against piracy. Sarawak was gradually enlarged with additional grants of land from the Sultan, and the River
            Lawas area bought from the North Borneo Chartered Company in 1905. Sarawak prospered under Rajah Sir Charles
            Vyner Brooke (reigned 1917–46), who attempted to set up an elected government in 1941, but the territory was
            occupied by the Japanese army in the following year. During the Japanese occupation, sickness and
            malnutrition spread throughout Sarawak. The Rajah, resuming control in 1946, decided that in the interests
            of Sarawak, he should make a gift of it to the UK Crown. Sarawak became a UK colony in July 1946.
            </br></br>The Federation of Malaysia
            </br></br>Early in 1956, the governments of the Federation of Malaya and the UK and the Heads of the Malay
            States agreed that the Federation should achieve independence by the end of August 1957 if possible. On 31
            August 1957 the Federation of Malaya became an independent nation and joined the Commonwealth. Penang and
            Malacca became states of the Federation. Tengku (prince) Abdul Rahman, leader of the independence movement,
            became Prime Minister.
            </br></br>The Malaysia Agreement, under which North Borneo, Sarawak and Singapore (but not Brunei) would
            become states in the new Federation of Malaysia, was signed in 1963 by the UK, Malaya, North Borneo, Sarawak
            and Singapore. The Federation of Malaysia came into being on 16 September 1963. In 1965, by mutual
            agreement, Singapore left the Federation and became an independent state.
            </br></br>In the 1969 elections, the Alliance Party lost many seats to the Pan-Malaysian Islamic Party,
            Gerakan Rakyat Malaysia and the Chinese-based Democratic Action Party. Amid violent ethnic clashes, the
            government suspended parliament and the national operations council ruled by decree for two years. On the
            resignation of Tengku Abdul Rahman in 1970, Tun Abdul Razak became Prime Minister.
            </br></br>Although Malays formed over half the population, in 1970 they accounted for about one per cent of
            national income. A ‘new economic policy’ introduced positive discrimination – in education, civil service,
            armed services and business – designed to increase the share of the Malay and other bumiputera (sons of the
            soil) groups to 30 per cent of national income within twenty years. After the parliamentary system was
            restored, the National Front (Barisan Nasional) – a multiethnic alliance led by UMNO – won over two-thirds
            of seats at all elections of the 1970s, 1980s and 1990s (and this continued into the 2000s). In 1981 Dr
            Mahathir Mohamad became Prime Minister.
            </br></br>Malays have dominated the political system since independence, and support in the Malay-dominated
            rural areas is crucial for political success at the national level. However, to command a parliamentary
            majority and in the interests of national stability, UMNO has formed coalitions with parties representing
            other racial groups. Intercommunal relations, particularly between the Malays and the Chinese, have
            preoccupied governments since independence.
            </br></br>At elections in April 1995, the National Front was returned with a substantially increased
            majority, winning 162 seats, comprising UMNO (89 seats), Malaysian Chinese Association (30), Sarawak
            National Front (27), Malaysian Indian Congress (seven) and Gerakan Rakyat Malaysia (seven). The opposition
            included the Democratic Action Party (DAP, nine), Parti Bersatu Sabah (PBS, eight), the Pan-Malaysian
            Islamic Party (PAS, seven) and Semangat ‘46 (six).
            </br></br>In August 1998 Prime Minister Mahathir Mohamad sacked his Deputy Prime Minister and Finance
            Minister, Anwar Ibrahim, who was subsequently arrested under the detention-without-trial Internal Security
            Act for holding a political protest gathering without a police permit. He was also charged on several counts
            of sexual misconduct and abuse of power, charges he denied and said stemmed from a conspiracy to remove him.
            Anwar was found guilty of corruption in April 1999 and sentenced to six years in prison. In August 2000, he
            was found guilty of sodomy and sentenced to a further nine years’ imprisonment.
            </br></br>In June 1999, opposition parties led by Anwar’s wife Wan Azizah Ismail and her new National
            Justice Party (Parti Keadilan Nasional) formed the Alternative Front (including the PAS, the DAP and
            Malaysian People’s Party), calling for political liberalisation and an end to repressive laws. However, when
            the elections were held in November 1999, the ruling National Front coalition won 148 seats; the combined
            opposition parties took 42 seats, with the PBS securing three seats. PAS won control of the oil-rich state
            of Terengganu and easily retained its hold on Kelantan and, for the first time, assumed leadership of the
            opposition in parliament. Wan Azizah won the seat of her husband’s former constituency in Penang.
            </br></br>The Alternative Front was, however, divided over the PAS’s plan to establish an Islamic state
            should the Alternative Front win the next elections due by January 2005. Divisions deepened when the party
            announced it would introduce Islamic law in Terengganu, and subsequently, in July 2002, lost ground to UMNO
            in by-elections in Kedah State.
            </br></br>In September 2004 Anwar’s conviction for sodomy was quashed by the Federal Court and he was
            released from prison. Then his appeal against his conviction for corruption was rejected, confirming his
            exclusion from parliament until 2008.</p>
    </div>
</div>
</br>
</br>
<footer><strong>Designed by</br><a href="https://www.facebook.com/alwyn.yeo">ALWYN YEO</a>,<a
                href="https://www.facebook.com/Mickeyjunwei?fref=ts">CHAN JUN WEI</a> and <a
                href="https://www.facebook.com/yee.shin.39">Lee Shin Yee</a></strong></footer>
</body>
</html>