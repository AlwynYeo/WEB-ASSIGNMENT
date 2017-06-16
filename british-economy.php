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
        <h1>Economy</h1>
        <p>The United Kingdom has a fiercely independent, developed, and international trading economy that
            was at the
            forefront of the 19th-century Industrial Revolution. The country emerged from World War II as a military
            victor but with a debilitated manufacturing sector. Postwar recovery was relatively slow, and it took nearly
            40 years, with additional stimulation after 1973 from membership in the European Economic Community
            (ultimately succeeded by the European Union [EU]), for the British economy to improve its competitiveness
            significantly. Economic growth rates in the 1990s compared favourably with those of other top industrial
            countries. Manufacturing’s contribution to gross domestic product (GDP) has declined to about one-fifth of
            the total, with services providing the source of greatest growth. The United Kingdom’s chief trading ties
            have shifted from its former empire to other members of the EU, which account for more than half its trade
            in tangible goods. The United States is a major investment and trading partner, and Japan has become a
            significant investor in local production. American and Japanese companies often choose the United Kingdom as
            their European base. In addition, other fast-developing East Asian countries with export-oriented economies
            include the United Kingdom’s open market among their important outlets.
            </br></br>During the 1980s the Conservative government of Margaret Thatcher pursued the privatization, or
            denationalization, of publicly owned corporations that had been nationalized by previous governments.
            Privatization, accompanied by widespread labour unrest, resulted in the loss of tens of thousands of jobs in
            the coal-mining and heavy industrial sectors. Although there was some improvement in the standard of living
            nationally, in general there was greater prosperity in the South East, including London, than in the heavily
            industrialized regions of the West Midlands, northern England, Clydeside, and Belfast, whose economies
            suffered during the 1980s. During the 1980s and ’90s, income disparity also increased. Unemployment and
            inflation rates were gradually reduced but remained high until the late 1990s. The country’s role as a major
            world financial centre remained a source of economic strength. Moreover, its exploitation of offshore
            natural gas since 1967 and oil since 1975 in the North Sea has reduced dependence on coal and imported oil
            and provided a further economic boost.
            </br></br><strong>Agriculture, forestry, and fishing</strong>
            </br></br><strong>Agriculture</strong>
            </br></br>The United Kingdom is unusual, even among western European countries, in the small proportion of
            its
            employed population (about 2 percent) engaged in agriculture. With commercial intensification of yields and
            a high level of mechanization, supported initially by national policy and subsequently by the Common
            Agricultural Policy (CAP) of the EU, the output of some agricultural products has exceeded demand.
            Employment in agriculture has declined gradually, and, with the introduction of policies to achieve
            reduction of surpluses, the trend is likely to continue. Efforts have been made to create alternative
            employment opportunities in rural areas, some of which are remote from towns. The land area used for
            agriculture (about three-quarters of the total) has also declined, and the arable share has fallen in favour
            of pasture.

            </br></br>The most important farm crops are wheat, barley, oats, sugar beets, potatoes, and rapeseed. While
            significant proportions of wheat, barley, and rapeseed provide animal feed, much of the remainder is
            processed for human consumption through flour milling (wheat), malting and distilling (barley), and the
            production of vegetable oil (rapeseed). The main livestock products derive from cattle and calves, sheep and
            lambs, pigs, and poultry. The United Kingdom has achieved a high level of self-sufficiency in the main
            agricultural products except for sugar and cheese.

            </br></br><strong>Forestry</strong>
            About one-tenth of the United Kingdom’s land area is devoted to productive forestry. The
            government-supported Forestry Commission manages almost half of these woodlands, and the rest are in private
            hands. Domestic timber production supplies less than one-fifth of the United Kingdom’s demand. The majority
            of new plantings are of conifers in upland areas, but the commission encourages planting broad-leaved trees
            where appropriate.

            </br></br><strong>Fishing</strong>
            Although the United Kingdom is one of Europe’s leading fishing countries, the industry has been in long-term
            decline. Fishing limits were extended to 200 nautical miles (370 km) offshore in the mid-1970s, and, because
            a significant part of the area fished by other EU members lies within British waters, it has been necessary
            to regulate catches on a community-wide basis. Meanwhile, the United Kingdom has lost opportunities to fish
            in some more-distant waters (e.g., those off Iceland), and this has reduced its total catch more than those
            of other countries of the EU. The United Kingdom’s fishing industry now supplies only half the country’s
            total demand. The most important fish landed are cod, haddock, mackerel, whiting, and plaice, as well as
            shellfish, including Nephrops (Norway lobsters), lobsters, crabs, and oysters. Estuarine fish farming—mainly
            of trout and salmon—has expanded considerably.

            </br></br><strong>Resources and power</strong>
            </br></br><strong>Minerals</strong>
            </br></br>The United Kingdom has relatively limited supplies of economically valuable mineral resources. The
            once-important extraction of iron ore has dwindled to almost nothing. Other important metals that are mined
            include tin, which supplies about half the domestic demand, and zinc. There are adequate supplies of
            nonmetallic minerals, including sand and gravel, limestone, dolomite, chalk, slate, barite, talc, clay and
            clay shale, kaolin (china clay), ball clay, fuller’s earth, celestine, and gypsum. Sand, gravel, limestone,
            and other crushed rocks are quarried for use in construction.

            </br></br><strong>Energy</strong>
            By contrast, the United Kingdom has larger energy resources—including oil, natural gas, and coal—than any
            other EU member. Coal, the fuel once vital to the British economy, has continued to decrease in importance.
            Compared with its peak year of 1913, when more than one million workers produced more than 300 million tons,
            current output has fallen by more than four-fifths, with an even greater reduction in the labour force.
            Power stations are the major customers for coal, but, with growth in the use of other fuels and the
            increasing closing of pits that have become uneconomical to operate, the industry remains under considerable
            pressure.

            </br></br>The discovery of oil in the North Sea and the apportionment of its area to surrounding countries
            led to the
            rapid development of oil exploitation. Since the start of production in 1975, the quantities brought ashore
            have grown each year, and the United Kingdom has become virtually self-sufficient in oil and even an
            exporter. With an average output of nearly three million barrels per day at the beginning of the 21st
            century, the country was one of the world’s largest producers. The balance of payments has benefited
            considerably from oil revenues, and a substantial proportion has been invested abroad to offset diminishing
            oil income in the future. Proven reserves were estimated at around 700 million tons in the late 1990s.

            </br></br>Since offshore natural gas supplies from the North Sea began to be available in quantity in 1967,
            they have
            replaced the previously coal-based supplies of town gas. A national network of distribution pipelines has
            been created. Proven reserves of natural gas were estimated at 26.8 trillion cubic feet (760 billion cubic
            metres) in the late 1990s.

            </br></br>Self-sufficiency in oil and natural gas and the decline of coal mining has transformed Britain’s
            energy
            sector. Nuclear fuel has slightly expanded its contribution to electricity generation, and hydroelectric
            power contributes a small proportion (mainly in Scotland), but conventional steam power stations provide
            most of the country’s electricity.

            </br></br><strong>Manufacturing</strong>
            </br></br>The manufacturing sector as a whole has continued to shrink both in employment and in its
            contribution (now
            around one-fifth) to the GDP. The decline in manufacturing largely accounted for the rapid rise in
            unemployment in the early 1980s. Once economic growth returned, however, there was great improvement in
            productivity and profits in British manufacturing.

            </br></br>In terms of their relative importance to the GDP, the most important manufacturing industries are
            engineering; food, beverages (including alcoholic beverages), and tobacco; chemicals; paper, printing, and
            publishing; metals and minerals; and textiles, clothing, footwear, and leather. The fastest-growing sectors
            have been chemicals and electrical engineering. Within the chemical industry, pharmaceuticals and specialty
            products have shown the largest increases. Within the engineering industry, electrical and instrument
            engineering and transport engineering—including motor vehicles and aerospace equipment—have grown faster
            than mechanical engineering and metal goods, and electronic products have shown the fastest growth. On the
            other hand, the growth in motor vehicle production has occurred among foreign-owned, especially Japanese,
            companies investing in the United Kingdom. British automobile manufacturers have been in decline since the
            1970s. After a period of restructuring during the 1980s, the British steel industry substantially increased
            its productivity, output, and exports during the 1990s. However, food, beverages, tobacco, leather, and
            engineering as a whole have had below-average growth. Textiles, clothing, and footwear have been in absolute
            decline because British companies have faced increasing difficulty competing with imports, especially from
            Asia.
            </br></br>During the 1980s imports of manufactured products increased dramatically, and, although exports of
            finished
            manufactured products increased in value, the surplus in the balance of trade disappeared and was
            transformed into a large deficit. Nevertheless, after a period of restructuring in the 1980s, Britain’s
            manufacturing sector increased its productivity and competitiveness, and the trade balance improved and
            stabilized during the 1990s.
            </br></br>Construction in Britain stagnated during the 1990s because of a decline in prices and in demand
            for new
            housing and because of decreased government investment in infrastructure during the first half of the
            decade. About half the labour force in construction is self-employed. More than half of all construction
            work is on new projects, the remainder on repair and maintenance. There has been a marked switch from
            housing funded and owned by public authorities toward private development. Considerable efforts have also
            been made to encourage tenants of publicly owned rented houses to become owner-occupiers, with the result
            that the proportion of owner-occupied homes has grown considerably since the early 1970s. The supply of
            privately rented accommodations became scarcer because of statutory rent controls that discouraged new
            construction, but changes during the 1980s both in the economic climate and in official policy began to
            stimulate the supply. The average price of a new house, particularly in London and the South East, has
            generally continued to increase more rapidly than the prevailing rate of inflation, although prices have
            fluctuated considerably. In turn, the rising price of new homes has created considerable pressure on the
            land available for housing, which has been relatively tightly controlled. Here, too, public policy has been
            changing in favour of greater permissiveness.
            </br></br>Private industrial and commercial construction and public projects account for the remainder of
            construction. During the 1980s and ’90s the United Kingdom embarked on a series of major infrastructure
            projects, including the Channel Tunnel between Britain and France, the rebuilding of large parts of London’s
            traditional Docklands as a new commercial centre, and extensions to London’s rail and Underground systems.
            </br></br><strong>Finance</strong>
            </br></br>The United Kingdom, particularly London, has traditionally been a world financial centre.
            Restructuring and
            deregulation transformed the sector during the 1980s and ’90s, with important changes in banking, insurance,
            the London Stock Exchange, shipping, and commodity markets. Some long-standing distinctions between
            financial institutions have become less clear-cut. For example, housing loans used to be primarily the
            responsibility of building societies, but increasingly banks and insurance companies have entered this area
            of lending. Two related developments have occurred: the transformation of building-society branch offices
            into virtual banks with personal cashing facilities and the diversification of all three of these types of
            institutions into real estate services. Building societies also participate to a limited extent in
            investment services, insurance, trusteeship, executorship, and land services.
            </br></br>At the end of the 20th century, the financial services industry employed more than one million
            people and
            contributed about one-twelfth of the GDP. Although financial services have grown rapidly in some
            medium-sized cities, notably Leeds and Edinburgh, London has continued to dominate the industry and has
            grown in size and influence as a centre of international financial operations. Capital flows have increased,
            as have foreign exchange and securities trading. Consequently, London has more foreign banks than any other
            city in the world. Increased competition and technological developments have accelerated change. The
            International Stock Exchange was reorganized, and the historical two-tier structure of brokers, who executed
            investors’ instructions to buy and sell stocks and shares, and jobbers, who “made” markets in these
            securities, was abolished. As a result, new companies link British and foreign banks with former brokers and
            jobbers. The Financial Services Act of 1986, the Building Societies Act of 1987, and the Banking Act of 1987
            regulate these new financial organizations.
            </br></br>In 1997 the government established the Financial Services Authority (FSA) to regulate the
            financial services
            industry; it replaced a series of separate supervisory organizations, some of them based on self-regulation.
            Among other tasks, the FSA took over the supervision of the United Kingdom’s commercial banks from the Bank
            of England. The FSA was widely criticized for its response to the financial crisis that erupted in 2008 and
            led to a government bailout for a number of prominent British banks. As a result, the Financial Services Act
            of 2012 abolished the FSA, and the “tripartite” system of financial regulation (the FSA, the Bank of
            England, and the Treasury) was replaced in 2013 with three new bodies—the Financial Conduct Authority (FCA),
            mandated with regulating financial service firms and protecting consumers, the Financial Policy Committee
            (FPC), and the Prudential Regulation Authority (PRA)—the last two of which were embedded in the Bank of
            England, to which the supervision and regulation of banks were returned.
            </br></br>The Bank of England retains the sole right to issue banknotes in England and Wales (banks in
            Scotland and
            Northern Ireland have limited rights to do this in their own areas). In 1997 the Bank of England was given
            the power to set the “repo,” or benchmark, interest rate, which influences the general structure of interest
            rates. The bank’s standing instruction from the government is to set an interest rate that will meet a
            target inflation rate of 2.5 percent per annum. The bank also intervenes actively in foreign exchange
            markets and acts as the government’s banker. The pound sterling is a major internationally traded currency.
            </br></br>A variety of institutions, including insurance companies, pension funds, and investment and unit
            trusts,
            channel individual savings into investments. Finance houses are the primary providers of home mortgages and
            corporate lending and leasing. There are also companies that finance the leasing of business equipment;
            factoring companies that provide immediate cash to creditors and subsequently collect the corporate debts
            owed; and finance corporations that provide venture capital funding for innovations or high-risk companies
            and that supplement the medium- and long-term capital markets, otherwise supplied by the banks or the Stock
            Market.
            </br></br>The United Kingdom has a number of organized financial markets. The securities markets comprise
            the
            International Stock Exchange, which deals in officially listed stocks and shares (including government
            issues, traded options, stock index options, and currency options); the Unlisted Securities Market, for
            smaller companies; and the Third Market, for small unlisted companies. Money market activities include the
            trading of bills, certificates of deposit, short-term deposits, and, increasingly, sterling commercial
            paper. Other markets are those dealing in Eurocurrency, Eurobonds, foreign exchange, financial futures,
            gold, ship brokerage, freight futures, and agricultural and other commodity futures.
            </br></br>The share of invisible trade (receipts and payments from financial services; interest, profits,
            and
            dividends; and transfers between the United Kingdom and other countries) has been rising steadily since the
            1960s—from about one-third to one-half of the country’s total foreign earnings. Within this area, service
            transactions have grown rapidly, and financial services have grown the fastest.</p>
    </div>
</div>
    </br>
    </br>
    <footer><strong>Designed by</br><a href="https://www.facebook.com/alwyn.yeo">ALWYN YEO</a>,<a
                    href="https://www.facebook.com/Mickeyjunwei?fref=ts">CHAN JUN WEI</a> and <a
                    href="https://www.facebook.com/yee.shin.39">Lee Shin Yee</a></strong></footer>
</body>
</html>