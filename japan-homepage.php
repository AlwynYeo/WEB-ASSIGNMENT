<?php
session_start();
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link href="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f5/History_Logo.svg/739px-History_Logo.svg.png"
          type="image" rel="icon">
    <title>HistorySociety | Japan</title>
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
        <h1>Japan | Facts and History</h1>
        </br>
        </br>
        <p>by Kallie Szczepanski</br>Updated June 13, 2017</p>
        <p>Few nations on Earth have had a more colorful history than Japan.
            Settled by migrants from the Asian mainland back in the mists of prehistory, Japan has seen the rise and
            fall of emperors, rule by samurai warriors, isolation from the outside world, expansion over most of Asia,
            defeat and rebound. One of the most war-like of nations in the early twentieth century, today Japan often
            serves as a voice of pacifism and restraint on the international stage.</br></br>
            <strong>CAPITAL AND MAJOR CITIES</strong></br></br>
            <strong>Capital:</strong> Tokyo, population 12,790,000 (2007)
            </br></br><strong>Major Cities:</strong>
            </br></br>Yokohama, population 3,632,000
            </br></br>Osaka, population 2,636,000
            </br></br>Nagoya, population 2,236,000
            </br></br>Sapporo, population 1,891,000
            </br></br> Kobe, population 1,529,000
            </br></br>Kyoto, population 1,465,000
            </br></br> Fukuoka, population 1,423,000
            </br></br><strong>GOVERNMENT</strong>
            </br></br>Japan has a constitutional monarchy, headed by the Emperor. The current emperor is Akihito; he
            wields very little political power, serving primarily as the symbolic and diplomatic leader of the country.
            </br></br>The political leader of Japan is the Prime Minister, who heads the Cabinet. Japan's bicameral
            legislature is made up of a 480-seat House of Representatives, and a 242-seat House of Councillors.
            </br></br>Japan has a four-tier court system, headed by the 15-member Supreme Court. The country has a
            European-style civil law system.
            </br></br>Yasuo Fukuda is the current Prime Minister of Japan.
            </br></br><strong>POPULATION</strong>
            </br></br>Japan is home to about 127,500,000 people.
            </br></br>Today, the country suffers from a very low birth rate, making it one of the most rapidly aging
            societies in the world.
            </br></br>The Yamato Japanese ethnic group comprises 98.5% of the population. The other 1.5% includes
            Koreans (0.5%), Chinese (0.4%), and the indigenous Ainu (50,000 people). The Ryukyuan people of Okinawa and
            neighboring islands may or may not be ethnically Yamato.
            </br></br>An estimated 360,000 Brazilians and Peruvians of Japanese origin have also returned to Japan, most
            famously former Peruvian President Alberto Fujimori.
            </br></br><strong>LANGUAGES</strong>
            </br></br>The vast majority of Japan's citizens (99%) speak Japanese as their primary language.
            </br></br>Japanese is in the Japonic language family, and seems to be unrelated to Chinese and Korean.
            However, Japanese has borrowed heavily from Chinese, English, and other languages. In fact, 49% of Japanese
            words are loanwords from Chinese, and 9% come from English.
            </br></br>Three writing systems coexist in Japan: hiragana, used for native Japanese words, inflected verbs,
            etc.; katakana, used for non-Japanese loanwords, emphasis, and onomatopoeia; and kanji, which is used to
            express the large number of Chinese loanwords in the Japanese language.
            </br></br><strong>RELIGION</strong>
            </br></br>95% of Japanese citizens adhere to a syncretic blend of Shintoism and Buddhism. There are
            minorities of under 1% of Christians, Muslims, Hindus, and Sikhs.
            </br></br>Shinto is the native religion of Japan, which developed in prehistoric times. It is a polytheistic
            faith, emphasizing the divinity of the natural world. Shintoism does not have a holy book or founder. Most
            Japanese Buddhists belong to the Mahayana school, which came to Japan from Baekje Korea in the sixth
            century.
            </br></br>In Japan, Shinto and Buddhist practices are combined into a single religion, with Buddhist temples
            being built at the sites of important Shinto shrines.
            </br></br><strong>GEOGRAPHY</strong>
            </br></br>The Japanese Archipelago includes more than 3,000 islands, covering a total area of 377,835 square
            kilometers. The four main islands, from north to south, are Hokkaido, Honshu, Shikoku, and Kyushu.
            </br></br>Japan is largely mountainous and forested, with only 11.6% of its area arable land. The highest
            point is Mt. Fuji at 3,776 meters (12,385 feet). The lowest is Hachiro-gata, at 4 meters below sea level
            (-12 feet).
            </br></br>Positioned astride the Pacific Ring of Fire, Japan features a number of hydrothermal features such
            as geysers and hot springs. It also suffers frequent earthquakes, tsunamis, and volcanic eruptions.
            </br></br><strong>CLIMATE</strong>
            </br></br>Stretching 3500 km (2174 miles) from north to south, Japan includes a number of different climate
            zones.
            </br></br>It has a temperate climate overall, with four seasons.
            </br></br>Heavy snowfall is the rule in the winter on the northern island of Hokkaido; in 1970, the town of
            Kutchan received 312 cm (over 10 feet) of snow in a single day! The total snowfall for that winter was more
            than 20 meters (66 feet).
            </br></br>The southern island of Okinawa, in contrast, has a semi-tropical climate with an average annual
            temperate of 20 Celsius (72 degrees Fahrenheit). The island receives about 200 cm (80 inches) of rain per
            year.
            </br></br><strong>ECONOMY</strong>
            </br></br>Japan is one of the most technologically advanced societies on Earth; as a result, it has the
            world's second largest economy by GDP (after the U.S.). Japan exports automobiles, consumer and office
            electronics, steel, and transportation equipment. It imports food, oil, lumber, and metal ores.
            </br></br>Economic growth stalled in the 1990s, but since has rebounded to a quietly respectable 2% per
            year.
            </br></br>The services sector employs 67.7% of the workforce, industry 27.8%, and agriculture 4.6%. The
            unemployment rate is 4.1%. Per capita GDP in Japan is $38,500; 13.5% of the population lives below the
            poverty line.
            </br></br><strong>HISTORY</strong>
            </br></br>Japan likely was settled about 35,000 years ago by Paleolithic people from the Asian mainland. At
            the end of the last Ice Age, about 10,000 years ago, a culture called the Jomon developed. Jomon
            hunter-gatherers fashioned fur clothing, wooden houses, and elaborate clay vessels. According to DNA
            analysis, the Ainu people may be descendants of the Jomon.
            </br></br>The second wave of settlement, around 400 B.C. by the Yayoi people, introduced metal-working, rice
            cultivation, and weaving to Japan. DNA evidence suggests that these settlers came from Korea.
            </br></br>The first era of recorded history in Japan is the Kofun (250-538 A.D.), characterized by large
            burial mounds or tumuli. The Kofun were headed by a class of aristocratic warlords; they adopted many
            Chinese customs and innovations.
            </br></br>Buddhism came to Japan during the Asuka Period, 538-710, as did the Chinese writing system.
            Society was divided into clans, ruled from Yamato Province.
            </br></br>The first strong central government developed in Nara (710-794); the aristocratic class practiced
            Buddhism and Chinese calligraphy, while agricultural villagers followed Shintoism.
            </br></br>Japan's unique culture developed rapidly in the Heian era, 794-1185. The imperial court turned out
            enduring art, poetry, and prose. The samurai warrior class developed at this time, as well.
            </br></br>Samurai lords, called "shogun," took over governmental power in 1185, and ruled Japan in the name
            of the emperor until 1868. The Kamakura Shogunate (1185-1333) ruled much of Japan from Kyoto. Aided by two
            miraculous typhoons, the Kamakura repelled attacks by Mongol armadas in 1274 and 1281.
            </br></br>A particularly strong emperor, Go-Daigo, tried to overthrow shogunal rule in 1331, resulting in a
            civil war between competing northern and southern courts that finally ended in 1392. During this time, a
            class of strong regional lords called "daimyo" increased in power; their control lasted through the end of
            the Edo period, also known as the Tokugawa Shogunate, in 1868.
            </br></br>In that year, a new constitutional monarchy was established, headed by the Meiji Emperor. The
            power of the shoguns was broken.
            </br></br>After the Meiji Emperor's death, his son became the Taisho Emperor (r. 1912-1926). His chronic
            illnesses allowed the Diet of Japan to democratize the country further. Japan formalized its rule over Korea
            and seized northern China during World War I.
            </br></br>The Showa Emperor, Hirohito, (r. 1926-1989) oversaw Japan's aggressive expansion during World War
            II, its surrender, and its rebirth as a modern, industrialized nation.</p>
    </div>
</div>
    </br>
    </br>
    <footer><strong>Designed by</br><a href="https://www.facebook.com/alwyn.yeo">ALWYN YEO</a>,<a
                    href="https://www.facebook.com/Mickeyjunwei?fref=ts">CHAN JUN WEI</a> and <a
                    href="https://www.facebook.com/yee.shin.39">Lee Shin Yee</a></strong></footer>
</body>
</html>