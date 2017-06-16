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
    <div class="timeline-">
        <h1>Economic transformation</h1>
            <p>The Korean War marked the turn from economic depression to recovery for Japan. As the staging area
            for the United Nations forces on the Korean peninsula, Japan profited indirectly from the war, as valuable
            procurement orders for goods and services were assigned to Japanese suppliers. The Japanese economy at the
            return of independence in 1952 was in the process of growth and change. Sustained prosperity and high annual
            growth rates, which averaged 10 percent in 1955–60 and later climbed to more than 13 percent, changed all
            sectors of Japanese life. The countryside, where farmers had benefited from land reform, began to feel the
            effects of small-scale mechanization and a continuous migration to industrial centres. Agricultural yields
            rose as improved strains of crops and modern technology were introduced, as household appliances appeared in
            remote villages, and as the changing patterns of urban food consumption provided an expanded market for cash
            crops, fruits and vegetables, and meat products. Efforts to control population growth, which had begun with
            the legalization of abortion in 1948 and included a national campaign to encourage family planning, showed
            considerable success, as the population stabilized and thereafter grew slowly. Gains in economic output,
            therefore, were not offset by a rapidly expanding population, and steady industrial growth brought full
            employment and even labour shortages.
            </br></br>Two elements underscored rapid growth in the 1960s. The first was the development of a consumer
            economy, which was given a significant boost by Ikeda Hayato’s Income Doubling Plan of 1960. This plan
            reaffirmed the government’s responsibility for social welfare, vocational training, and education, while
            also redefining growth to include consumers as well as producers. The second was the new industrial policy
            that emerged out of the Ministry of Trade and Industry (MITI) in 1959. Under these influences the structure
            of the Japanese economy changed to concentrate on high-quality and high-technology products designed for
            domestic and foreign consumption. The production of such products also emphasized Japan’s need for stable,
            economically advanced trading partners to replace the Asian markets to which inexpensive textiles had been
            sent earlier. Improvements in transportation—e.g., cargo-handling methods and bulk transport by large ore
            carriers and tankers—helped to remove the disadvantage of the greater distances over which Japan’s products
            had to be shipped. Most important, the large and growing domestic market was rendering invalid earlier
            generalizations about Japan’s need for cheap labour and captive Asian colonies to sustain its economy. The
            era of high growth continued until the “oil shock” of 1973: the embargo by OPEC (the Organization of the
            Petroleum Exporting Nations). In the interim, Japan’s output shifted with world currents, and its industrial
            expansion made it a world leader in shipbuilding, electronics, precision optical equipment, steel,
            automobiles, and high technology. In the 1960s Japanese exports expanded at an annual rate of more than 15
            percent, and in 1965 Japan revealed the first signs that it had a trade surplus.
            </br></br>A number of factors greatly aided Japan’s economic resurgence during the 1950s and ’60s. One was
            the complete destruction of the nation’s industrial base by the war. This meant that Japan’s new factories,
            using the latest developments in technology, were often more efficient than those of their foreign
            competitors. The Japanese became enthusiastic followers of the American statistician W. Edward Deming’s
            ideas on quality control and soon began producing goods that were more reliable and contained fewer flaws
            than those of the United States and western Europe. At the same time, Japan was able to import, under
            license, advanced foreign technology at relatively low cost. With the addition of a youthful and
            well-educated workforce, a high domestic savings rate that provided ample capital, and an activist
            government and bureaucracy that provided guidance, support, and subsidies, the ingredients were in place for
            rapid and sustained economic growth.
            </br></br>Two major changes were visible in the social life of the Japanese from 1952 to 1973. The first was
            the significant decline in the birth rate that stabilized the Japanese population. The second was the
            population shift from the countryside to urban centres. In addition to birth control, such factors as a more
            highly educated populace, postponement of marriage in favour of education and employment, and a desire for
            greater independence in early adulthood contributed to changing fertility patterns—as did the increasing
            conviction among many couples that it was in their economic self-interest to have fewer children. But even
            with a stable population Japan remained one of the world’s most densely populated countries.
            </br></br>As population growth slowed and the economy expanded, Japan faced a labour shortage that drew
            workers from agriculture, as well as from small and medium enterprises, to the new large-scale industries of
            the cities. The resulting shift in Japan’s population was dramatic. In the Meiji period the rural population
            of Japan stood at 85 percent of the national total; by 1945 it was approximately 50 percent, and by 1970 it
            had fallen to less than 20 percent. In the process, both village and urban life underwent significant
            changes. Factories were built in the countryside as industrialists tried to tap into the still-underemployed
            rural labour force. Agriculture itself became increasingly mechanized and commercialized. As sons, and even
            husbands, went off to the factories, women, children, and the elderly were often left to run the family
            farm. At the same time, the face of rural Japan changed, with hard-surfaced roads, concrete schools,
            factories, and sales outlets for automobiles and farm equipment replacing the once timeless thatched-roof
            houses. By 1970 the average farm household income had risen higher than its urban counterpart, providing
            considerable rural purchasing power. Television tied rural households to urban Japan and to the world
            beyond. Young men brought up on visions of urban life as projected by American television programs were
            eager to move to the cities after graduation from high school. Young women showed increasing reluctance to
            become farm wives, and in some instances villagers sought spouses for their sons in Southeast Asia. Rural
            solidarity suffered from such out-migration, and in many cases prewar village life ceased to be, as villages
            amalgamated into cities and struggled to develop new identities.
            </br></br>Cities also underwent rapid change. By 1972 one in every nine Japanese lived in Tokyo and one in
            four lived in the Tokyo-Ōsaka industrial corridor. As the national centre for government, finance, business,
            industry, education, and the arts, Tokyo became a magnet for many Japanese and the quintessential expression
            of Japanese urban life.

            </br></br>But while Tokyo and other large cities remained highly attractive, urban dwellers also faced
            serious problems, notably housing. Living space for most urban dwellers was infinitesimal when compared with
            Western societies. Although Japanese bristled when Westerners described them as living in “rabbit hutches,”
            apartments with 125 square feet (12 square metres) of living space—often with shared facilities—were common.
            Such apartments were often found in drab residential developments that pushed out at greater distances from
            the inner wards of major cities and required increased commuting times. The dream of owning one’s home,
            which most urban dwellers sought to keep alive, was already becoming increasingly elusive by the 1970s. In
            1972 the price of land in or near Japan’s largest cities was some 25 times higher than it had been in 1955,
            far surpassing the rise in the average urban worker’s disposable income for the same period. While
            government and private industry were able to provide some low-cost housing, higher-priced housing in the
            form of high-rise condominiums, or “mansions,” proliferated, and for most Japanese urbanites housing
            remained the chief flaw in Japan’s postwar economic “miracle.”

            </br></br>If urban life retained a number of density-induced drawbacks—which in addition to housing included
            few parks and open spaces, limited sewage systems, and an overcrowded transportation network of trains,
            subways, and buses that often required “pushers” and “pullers” to get passengers on and off—it also had its
            compensations in a rising standard of living and the entertainments that money afforded in splendid
            department stores, shopping areas, movie houses, coffee shops, bars, nightclubs and restaurants. The impact
            of American culture was everywhere. Young urbanites, in particular, took with gusto to jazz and rock music,
            pinball machines, American soft drinks and fast foods, baseball, and the freer social relations that
            typified American dating patterns. American fashions of dress and grooming, often set by movie and rock
            stars, quickly found bands of faithful imitators. Indeed, almost every American fad from the hula hoop to
            hang gliding had its Japanese supporters.

            </br></br>Urban life also brought about changes in traditional Japanese family and gender relationships. The
            position of women improved, as many more now went to high schools and colleges. Most found urban employment
            until marriage. As arranged marriages declined and “love” matches increased, marriage customs also changed.
            Urban living promoted the ideal of the nuclear family, particularly as housing conditions made it difficult
            for the extended family to live together. Urban dwellers found themselves less dependent on the goodwill of
            their neighbours. There was also less need for the conformity that typified rural life—although for many
            recent arrivals the city-based company and factory effectively restructured village values to support an
            efficient workplace.

            </br></br>The majority of villagers actually made the transition from rural to urban life with less social
            stress than was the case in Europe and America. Juvenile delinquency showed some increase, but overall crime
            rates remained low. So-called “new” religions such as Sōka Gakkai (Value-Creation Society), which strongly
            appealed to those feeling isolated or alienated, flourished in the 1950s and ’60s. Disparities between the
            newly rich and the older generation living on fixed incomes and between a freer, franker, and often more
            egotistic and brash mass culture that appealed to the young and traditional taste set by what once had been
            the aristocracy often accentuated how generations viewed the postwar situation. For many of the older
            generation, the new culture epitomized moral decay, which they attributed to the postwar system of
            education; to the young, the older generation seemed out of touch with the new realities that Japan faced.
            Such a generational split was further dramatized in the universities, where older professors were firmly in
            control but where young people struggled to find ways of expressing their own positions, which, typically,
            were often far more radical than those of their teachers.
            </br></br>Political developments
            </br></br>With the restoration of sovereignty, politicians who had been purged by the occupation were
            allowed to return to public life. This included a number of prewar rightists who had been active in the
            1930s. But the ideological right found few adherents among the postwar generation, and without military or
            big-business support the right wing played a largely dormant role during the 1950s and ’60s. Occasionally
            disturbing incidents, such as the 1960 assassination of the socialist leader Asanuma Inajirō by a right-wing
            activist, revealed that the right was still able to intimidate; but rightists, for the most part,
            concentrated on campaigns to restore the use of the national flag, revive such national holidays as
            Foundation Day (February 11; succeeded in 1966), and restore state sponsorship for Yasukuni Shrine in Tokyo
            (where Japan’s war dead, notably those of World War II, are enshrined). The left fared considerably better.
            Communists who returned to Japan from foreign exile or who were released from domestic prisons played a
            vigorous role in the immediate postwar political arena. In 1949 the Japan Communist Party (JCP) elected 35
            candidates to the lower house and garnered 10 percent of the vote. But by 1952 the Korean War (which had led
            SCAP to purge communists from public office), steady improvements in living conditions, and uncooperative
            Soviet attitudes in negotiations over the return of the Kuril Islands and over fishing treaties had
            seriously undermined public support for the communists, as did communist opposition to the imperial
            institution and extremist labour tactics. Still, Marxist, and later Maoist, ideas remained highly appealing
            to large numbers of Japanese intellectuals and college students, and the noncommunist left became a major
            voice for opposition in Japanese politics.

            </br></br>The year 1955 was highly significant in postwar politics. The right and left wings of the
            socialist movement, which had been divided since 1951 over the peace treaty, merged to form the Japan
            Socialist Party (JSP). Faced with this united opposition the conservative parties, the Liberals and the
            Democrats, joined to found the Liberal-Democratic Party (LDP). Japan thus entered a period of essentially
            two-party politics. The dominant LDP, which inherited Yoshida’s mantle, worked effectively to solidify the
            close ties he had created with bureaucrats, bankers, and the business community. As a result, ex-bureaucrats
            played significant roles in the LDP, often being elected to the Diet and becoming important cabinet members.
            Three of the next six prime ministers (all from the LDP) who succeeded Yoshida—Kishi Nobusuke, Ikeda Hayato,
            and Satō Eisaku—were ex-bureaucrats. These close government-business ties, which became essential to
            domestic economic growth, later were characterized as “Japan Incorporated” in the West.

            </br></br>Ideologically, the LDP combined a strong commitment to economic growth with the desire to return
            Japan to world prominence. The party depended on the financial support of business and banking, but its
            voter base remained in rural Japan. At the local level, LDP politicians established political networks that
            became the hallmarks of postwar politics and emphasized the role of personal “machine” politics over party
            platforms. But individual LDP Diet members realized that in order to provide patronage for their
            constituents they needed the support of party leaders with access to the bureaucracy. Factions therefore
            formed around such leaders, who vied with one another for the premiership and sought to have members of
            their faction appointed to important cabinet posts.

            </br></br>As the voice of the opposition, the JSP resisted rearmament, had a strong antinuclear stance,
            campaigned to rid Japan of the American bases and abrogate the Mutual Security Treaty, supported mainland
            China, and vigorously opposed all efforts to change the postwar constitution. The appeal of the JSP was
            directed both to urban intellectuals and to the working classes, and its financial support came largely from
            labour (Sōhyō). In contrast to the LDP’s focus on economic growth, big business, and agriculture, the JSP
            concentrated on urban issues, on those bypassed by prosperity, and on the mounting problems of pollution and
            environmental degradation that accompanied accelerated industrial growth. Socialist influence was weakened,
            however, when the more right-wing JSP members split off to form the Democratic Socialist Party (DSP) in
            1959.

            </br></br>By the early 1970s urban issues also attracted the JCP, which started to substitute practical
            matters for ideology and won a number of mayoral elections. To the right of the communists and socialists
            appeared the Clean Government Party (Kōmeitō; later renamed the New Clean Government Party), which began in
            1964 as the political arm of Sōka Gakkai but dissociated itself from the religion by 1970; like its
            opposition counterparts, it focused on the urban electorate. On occasion, as in 1960 with the Kishi
            government and the proposed renewal of the U.S-Japan Mutual Security Treaty, the opposition could mount
            sufficient public support to bring down an LDP cabinet, but on the whole the era was one in which the LDP
            remained firmly in power.

            </br></br>Still, by the late 1960s and early ’70s there also were signs of a decline in LDP support.
            Dissatisfaction with the party’s handling of domestic labour issues, Japan’s involvement in the Vietnam War,
            demands for the reversion of Okinawa to Japanese sovereignty, and extensive student uprisings on university
            campuses, combined with growing doubts about the effects of unbridled growth and the increasing dangers from
            pollution, all undercut the party’s popularity. In 1952 the LDP had garnered two-thirds of the Diet seats,
            but by 1972 it controlled only slightly more than half. The effects of the so-called “Nixon shocks” in 1971,
            which allowed the yen to rise against the dollar and restructured the U.S.-China (and hence the Japan-China)
            relationship, were compounded in 1973 by the OPEC oil crisis that threatened the underpinnings of Japan’s
            postwar prosperity and the LDP’s political hegemony.
            </br></br>International relations
            </br></br>The Japan that returned to the international community in 1952 was considerably reduced in
            territory and influence. The Republic of China (Taiwan), the People’s Republic of China on the mainland, the
            Republic of Korea (South Korea), and the Democratic People’s Republic of Korea (North Korea) all possessed
            military establishments far larger than what became Japan’s Self-Defense Forces. Given the rise of the Cold
            War, international relations were not destined to be conducted on the pacifist lines envisioned by Article 9
            of the constitution. The United States maintained its occupancy of Okinawa and the Ryukyus, while the Soviet
            Union occupied the entire Kuril chain and claimed southern Sakhalin. The Korean War increased the urgency
            for a peace treaty. Details for such a treaty were worked out by the United States and its noncommunist
            allies during the command of General Matthew B. Ridgway, who succeeded MacArthur as supreme commander in
            April 1951.

            </br></br>he San Francisco peace conference that convened in September 1951 thus ratified arrangements that
            had been worked out earlier. In the peace treaty that ensued, Japan recognized the independence of Korea and
            renounced all rights to Taiwan, the Pescadores, the Kurils, and southern Sakhalin and gave up the rights to
            the Pacific islands earlier mandated to it by the League of Nations. The Soviet Union attended the
            conference but refused to sign the treaty. This enabled Japan to retain hope for regaining four islands of
            the Kurils closest to Hokkaido—territory that Japan had gained through negotiations, not war. The peace
            treaty recognized Japan’s “right to individual and collective self-defense,” which it exercised through the
            United States–Japan Security Treaty (1951) by which U.S. forces remained in Japan until the Japanese secured
            their own defense. Japan agreed not to grant similar rights to a third power without U.S. approval.
            Americans promised to assist Japan’s Self-Defense Forces while U.S. military units (except air detachments
            and naval forces) were withdrawn to Okinawa.

            </br></br>The treaty made no arrangements for reparations to the victims of Japan’s Pacific war but provided
            that Japan should negotiate with the countries concerned. Consequently, effective resumption of relations
            with the countries of Asia came only after treaties covering reparations had been worked out with them.
            These were signed with Burma (now Myanmar) in 1954, the Philippines in 1956, and Indonesia in 1958. In 1956
            Japan restored diplomatic relations with the Soviet Union but without a formal peace treaty. With the Soviet
            Union no longer blocking the way, Japan was admitted to the United Nations in late 1956 and subsequently
            became active in United Nations meetings and specialized agencies. It also became a contributing member of
            the Colombo Plan group of countries for economic development in South and Southeast Asia, the General
            Agreement on Tariffs and Trade (GATT), and the Organisation for Economic Co-operation and Development
            (OECD). Japan spearheaded the creation of the Asian Development Bank in 1965–66.

            </br></br>At the time of the peace treaty, Prime Minister Yoshida wanted to delay committing Japan to either
            of the two Chinas, but the U.S. negotiator John Foster Dulles convinced him that the treaty would be opposed
            in the U.S. Senate unless assurances were given that Japan would recognize the Republic of China. Thus,
            Tokyo soon negotiated a peace treaty with that regime, but one that would not prejudice subsequent
            negotiations with Beijing. A lively trade developed with Taiwan, where Japan made considerable contributions
            to the economy.

            </br></br>Trade relationships with mainland China developed slowly in the absence of diplomatic ties. In
            1953 an unofficial trade pact was signed between private Japanese groups and Chinese authorities. In
            addition, a semiofficial “memorandum” trade became increasingly important in the 1960s. The Chinese
            government made skillful use of trade for political purposes, in the hope of embarrassing or weakening
            Japan’s conservative governments, and intervals of ideological tension on the mainland—e.g., the Great Leap
            Forward (1958–60) and the Cultural Revolution (1966–76)—usually were reflected in a decline or cessation of
            trade with Japan. Nevertheless, Japan gradually became China’s most important trading partner.

            </br></br>U.S. overtures toward mainland China in 1971 led to a rapid reorientation of Japan’s China policy.
            Japanese government leaders indicated a willingness to compromise ties with Taiwan in favour of a closer
            relationship with Beijing. Beijing also revealed a new interest in formal relations with Japan, subject to
            Japan’s revocation of its treaty with Taiwan. In 1972, a year after mainland China was admitted to the UN,
            Prime Minister Tanaka Kakuei reached an agreement with Beijing on steps to normalize relations. Japan
            simultaneously severed its ties with Taiwan, replacing its embassy with a nonofficial office.

            </br></br>Japan’s post-occupation relationship with the United States was founded on the 1951 security
            treaty. Part of the understanding that lay behind this treaty was that Japan would have access to the U.S.
            market in exchange for the maintenance of American bases on Japanese soil. While the LDP saw advantages to
            maintaining such a quid pro quo relationship, which allowed Japan to dramatically expand its foreign trade
            while avoiding undue security costs, Japan’s opposition parties were less sanguine about a relationship that
            tied Japan directly into the increasingly hostile Cold War. Tensions therefore mounted as the renewal date
            of the treaty (scheduled for 1960) approached; both governments hoped to extend it for 10 years as the
            revised Treaty of Mutual Cooperation and Security. The situation was complicated by domestic dislike of
            Kishi Nobusuke, who had become prime minister in 1957 after having earlier served in the Tōjō cabinet. Kishi
            had been named, though not tried, as a war criminal by the occupation. His staunch anticommunist stand, his
            open support of constitutional revision, and his undemocratic tactics made him suspect among many Japanese
            who felt they had been only marginally involved in the making of the original treaty and were anxious about
            the nation’s future. Added to this was the proposed visit to Japan by U.S. President Dwight D. Eisenhower
            that was scheduled amid new tensions caused by the downing of a U.S. reconnaissance plane by the Soviet
            Union in May 1960. When the Kishi cabinet used its majority in the Diet to force through treaty revisions,
            opposition increased steadily. Gigantic public demonstrations, largely composed of students, shook Tokyo for
            days. In the end the treaty survived, but Eisenhower’s visit was canceled and Kishi resigned in July 1960.

            </br></br>The administration of U.S. President John F. Kennedy caught the imagination of many Japanese, and
            Kennedy’s designation of the popular scholar Edwin O. Reischauer as ambassador further improved
            Japanese-American relations. But by the late 1960s the unpopularity of the Vietnam War threatened to disturb
            the relationship once more. Prime ministers Ikeda and Satō worked hard to remove the final reminders of war.
            In 1967, under Satō, the Bonin (Ogasawara) Islands were restored to Japan; and in 1969, on the eve of
            renewed negotiations over treaty revisions, the United States agreed to return the Ryukyus in 1972, although
            bases were to be maintained on Okinawa under the terms of the security treaty. The treaty was renewed
            without incident in 1970, now changed to allow termination by either side with a year’s advanced
            notification. Thus, by 1972 the U.S.-Japan relationship had stabilized. While signs of change on the part of
            both countries could be found in their China policies, there was as yet little to indicate the mounting
            conflict over trade that subsequently emerged.

            </br></br>Marius B. Jansen
            </br></br>Fred G. Notehelfer
            </br></br>The late 20th and early 21st centuries
            </br></br>Economic change
            </br></br>By the early 1970s a series of forces had combined to bring to an end the era of high growth that
            Japan had experienced in the 1950s and ’60s. These included significant advances in technology, the
            disappearance of ample rural labour for industry, and the decline in international competitiveness of heavy
            manufacturing industries such as shipbuilding, aluminum, fertilizers, and, later, steel. Outcries over urban
            congestion, pollution, and environmental degradation and dissatisfaction with ever-escalating land prices
            caused many middle-class Japanese to question the economic and political logic that linked growth with
            national success. The foreign trading environment also was changing. In 1971 the United States devalued the
            U.S. dollar by 17 percent against the Japanese yen. The OPEC oil embargo of 1973–74 created a further
            disruption of the Japanese economy, which depended heavily on Middle Eastern oil. Outbreaks of panic buying
            by consumers brought reminders of the essential fragility of Japan’s economic position; the rapid rise in
            the price of oil ended an era of relatively cheap and abundant energy resources. Thus, by the mid-1970s many
            Japanese felt increasingly insecure about their place in the global economy. Japanese dependency on fuel and
            food—as demonstrated by the consternation caused in 1972 when the United States temporarily embargoed
            soybean exports to Japan—had become increasingly clear.

            </br></br>During the 1970s and ’80s, consequently, Japan tried to integrate its economy more effectively
            into the global system and sought to diversify its markets and sources of raw materials. Japan became a firm
            advocate of international free trade and tried to create at least a measure of energy self-sufficiency
            through the increased use of nuclear power. The economic uncertainties of the 1970s produced a reemergence
            of a defensive, nationalistic sentiment that pictured Japan in a struggle with outside forces aimed at
            depriving the Japanese of their hard-won postwar gains. Until the early 1990s, international economic
            tensions were effectively used by the ruling LDP and the bureaucracy to contain and defuse important
            domestic economic and political issues.

            </br></br>The domestic rhetoric about the hostile international environment in which Japan operated cloaked
            the fact that by the 1980s the Japanese economy had become one of the world’s largest and most
            sophisticated. Per capita income had surpassed that of the United States, and total gross national product
            stood at roughly one-tenth of world output. By the mid-1980s Japan had become the world’s leading net
            creditor nation and the largest donor of development aid. Prosperity, however, was increasingly linked to
            trade. Slow domestic growth was offset by booming exports. In the 1970s exports were seen as vital to
            balance the deficits anticipated from rapidly rising oil prices. But, as the Japanese economy successfully
            weathered the recessions induced by escalating oil prices in 1972–74 and 1979–81, the volume of exports
            accelerated. Headed by automobiles, colour television sets, high-quality steel, precision optical equipment,
            and electronic products, Japan’s merchandise trade balance with western Europe and the United States
            steadily mounted in its favour.

            </br></br>By contrast, domestic consumption, which had played such an important role in the first phase of
            Japan’s postwar recovery, began to stagnate. By the early 1990s the Japanese were consuming considerably
            less than their American, British, or German counterparts. At the same time, consumer prices in Japan were
            considerably higher than the world average. Studies showed that consumption patterns were influenced by
            lagging wage increases, congested housing, traditional savings habits, and long working and commuting
            schedules that provided little time for leisure.

            </br></br>Mounting Japanese trade surpluses increased friction between Japan and its trading partners in
            Europe and the United States. Japan’s critics charged that the country advocated free trade abroad but
            maintained a closed market at home, engaged in “adversarial trade” designed to benefit only Japan, and
            pushed trade to export domestic unemployment during economic hard times, and there were complaints that
            Japan sold goods abroad at lower than domestic prices—a charge denied by Japanese business and government
            leaders. The government and bureaucracy responded by making efforts to “open” Japan. In the early 1970s
            Japan had the world’s second highest tariffs on manufactured goods, but two decades later such tariffs were
            the lowest among the economically advanced countries. Restrictions on many agricultural products—including,
            in the early 1990s, rice—were lifted. Japan’s financial markets were deregulated and liberalized, and a
            study commissioned under Prime Minister Nakasone Yasuhiro in 1986 proposed the restructuring of the Japanese
            economy to make it rely almost entirely on domestic demand for growth. Plans for such changes were further
            taken up in the so-called Structural Impediments Initiative (SII) in the late 1980s. By the end of the
            decade it was generally acknowledged that formal barriers to trade had been largely dismantled, though areas
            such as construction bidding were still closed, and many cultural barriers remained.

            </br></br>At the same time, what came to be called Japan’s “bubble economy” of the 1980s, which typified an
            era that combined easy credit with unbridled speculation and eventually drove Japanese equity and real
            estate markets to astronomical price levels, burst. In 1992–93 this ushered in a deep recession, the
            severity of which postponed many of the earlier reform plans, further undercut Japanese consumer confidence,
            and inevitably exacerbated trade tensions. Japan’s merchandise trade surplus with the world, however,
            continued to spiral up. Those export surpluses finally produced a rapid appreciation of the yen against the
            dollar in the mid-1990s. Contrary to American expectations, however, this had only marginal effects on the
            trade balance. At the same time, the stronger Japanese currency allowed Japanese firms and individuals to
            invest heavily abroad by buying foreign assets (notably real estate) at bargain prices.

            </br></br>The Japanese economy continued to stagnate, teetering between economic recession and anemic growth
            as the country entered the 21st century. Unemployment, still relatively low by Western standards, rose
            considerably and in 2000 surpassed 5 percent for the first time in the postwar era. A series of prime
            ministers in the 1990s and early 21st century called for major economic reforms, particularly deregulation.
            Notable were the sweeping reforms (dubbed the “Big Bang”) proposed by Hashimoto Ryūtarō (who served as prime
            minister 1996–98) in administration, finance, social security, the economy, the monetary system, and
            education. The measures were endorsed by Hashimoto’s successors, but they met resistance in many sectors.
            Several leaders, including Koizumi Junichiro, who became prime minister in 2001, felt stymied by the
            inability of the policy changes to produce economic growth. The economy also faced other challenges,
            particularly from a rapidly aging population and rising income disparities. Although the bond with the
            United States remained the linchpin of Japan’s external relations, Japan reoriented its economy to integrate
            it more effectively into that of the Asian economic bloc.</p>
    </div>
</div>
</br>
</br>
<footer><strong>Designed by</br><a href="https://www.facebook.com/alwyn.yeo">ALWYN YEO</a>,<a
                href="https://www.facebook.com/Mickeyjunwei?fref=ts">CHAN JUN WEI</a> and <a
                href="https://www.facebook.com/yee.shin.39">Lee Shin Yee</a></strong></footer>
</body>
</html>