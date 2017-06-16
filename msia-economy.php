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
    <h1>Economic History of Malaysia</h1>
    <p>John H. Drabble, University of Sydney, Australia
        General Background

        </br></br>The Federation of Malaysia (see map), formed in 1963, originally consisted of Malaya, Singapore,
        Sarawak and Sabah. Due to internal political tensions Singapore was obliged to leave in 1965. Malaya is now
        known as Peninsular Malaysia, and the two other territories on the island of Borneo as East Malaysia. Prior
        to 1963 these territories were under British rule for varying periods from the late eighteenth century.
        Malaya gained independence in 1957, Sarawak and Sabah (the latter known previously as British North Borneo)
        in 1963, and Singapore full independence in 1965. These territories lie between 2 and 6 degrees north of the
        equator. The terrain consists of extensive coastal plains backed by mountainous interiors. The soils are not
        naturally fertile but the humid tropical climate subject to monsoonal weather patterns creates good
        conditions for plant growth. Historically much of the region was covered in dense rainforest (jungle),
        though much of this has been removed for commercial purposes over the last century leading to extensive soil
        erosion and silting of the rivers which run from the interiors to the coast.


        </br></br>SINGAPORE

        </br></br>The present government is a parliamentary system at the federal level (located in Kuala Lumpur,
        Peninsular Malaysia) and at the state level, based on periodic general elections. Each Peninsular state
        (except Penang and Melaka) has a traditional Malay ruler, the Sultan, one of whom is elected as paramount
        ruler of Malaysia (Yang dipertuan Agung) for a five-year term.

        </br></br>The population at the end of the twentieth century approximated 22 million and is ethnically
        diverse, consisting of 57 percent Malays and other indigenous peoples (collectively known as bumiputera), 24
        percent Chinese, 7 percent Indians and the balance “others” (including a high proportion of non-citizen
        Asians, e.g., Indonesians, Bangladeshis, Filipinos) (Andaya and Andaya, 2001, 3-4)

        </br></br>Significance as a Case Study in Economic Development

        </br></br></br></br>Malaysia is generally regarded as one of the most successful non-western countries to
        have achieved a relatively smooth transition to modern economic growth over the last century or so. Since
        the late nineteenth century it has been a major supplier of primary products to the industrialized
        countries; tin, rubber, palm oil, timber, oil, liquified natural gas, etc.

        </br></br>However, since about 1970 the leading sector in development has been a range of export-oriented
        manufacturing industries such as textiles, electrical and electronic goods, rubber products etc. Government
        policy has generally accorded a central role to foreign capital, while at the same time working towards more
        substantial participation for domestic, especially bumiputera, capital and enterprise. By 1990 the country
        had largely met the criteria for a Newly-Industrialized Country (NIC) status (30 percent of exports to
        consist of manufactured goods). While the Asian economic crisis of 1997-98 slowed growth temporarily, the
        current plan, titled Vision 2020, aims to achieve “a fully developed industrialized economy by that date.
        This will require an annual growth rate in real GDP of 7 percent” (Far Eastern Economic Review, Nov. 6,
        2003). Malaysia is perhaps the best example of a country in which the economic roles and interests of
        various racial groups have been pragmatically managed in the long-term without significant loss of growth
        momentum, despite the ongoing presence of inter-ethnic tensions which have occasionally manifested in
        violence, notably in 1969 (see below).

        </br></br>The Premodern Economy

        </br></br>Malaysia has a long history of internationally valued exports, being known from the early
        centuries A.D. as a source of gold, tin and exotics such as birds’ feathers, edible birds’ nests, aromatic
        woods, tree resins etc. The commercial importance of the area was enhanced by its strategic position athwart
        the seaborne trade routes from the Indian Ocean to East Asia. Merchants from both these regions, Arabs,
        Indians and Chinese regularly visited. Some became domiciled in ports such as Melaka [formerly Malacca], the
        location of one of the earliest local sultanates (c.1402 A.D.) and a focal point for both local and
        international trade.

        </br></br>From the early sixteenth century the area was increasingly penetrated by European trading
        interests, first the Portuguese (from 1511), then the Dutch East India Company [VOC](1602) in competition
        with the English East India Company [EIC] (1600) for the trade in pepper and various spices. By the late
        eighteenth century the VOC was dominant in the Indonesian region while the EIC acquired bases in Malaysia,
        beginning with Penang (1786), Singapore (1819) and Melaka (1824). These were major staging posts in the
        growing trade with China and also served as footholds from which to expand British control into the Malay
        Peninsula (from 1870), and northwest Borneo (Sarawak from 1841 and North Borneo from 1882). Over these
        centuries there was an increasing inflow of migrants from China attracted by the opportunities in trade and
        as a wage labor force for the burgeoning production of export commodities such as gold and tin. The
        indigenous people also engaged in commercial production (rice, tin), but remained basically within a
        subsistence economy and were reluctant to offer themselves as permanent wage labor. Overall, production in
        the premodern economy was relatively small in volume and technologically undeveloped. The capitalist sector,
        already foreign dominated, was still in its infancy (Drabble, 2000).

        </br></br>The Transition to Capitalist Production

        </br></br>The nineteenth century witnessed an enormous expansion in world trade which, between 1815 and
        1914, grew on average at 4-5 percent a year compared to 1 percent in the preceding hundred years. The
        driving force came from the Industrial Revolution in the West which saw the innovation of large scale
        factory production of manufactured goods made possible by technological advances, accompanied by more
        efficient communications (e.g., railways, cars, trucks, steamships, international canals [Suez 1869, Panama
        1914], telegraphs) which speeded up and greatly lowered the cost of long distance trade. Industrializing
        countries required ever-larger supplies of raw materials as well as foodstuffs for their growing
        populations. Regions such as Malaysia with ample supplies of virgin land and relative proximity to trade
        routes were well placed to respond to this demand. What was lacking was an adequate supply of capital and
        wage labor. In both aspects, the deficiency was supplied largely from foreign sources.

        </br></br>As expanding British power brought stability to the region, Chinese migrants started to arrive in
        large numbers with Singapore quickly becoming the major point of entry. Most arrived with few funds but
        those able to amass profits from trade (including opium) used these to finance ventures in agriculture and
        mining, especially in the neighboring Malay Peninsula. Crops such as pepper, gambier, tapioca, sugar and
        coffee were produced for export to markets in Asia (e.g. China), and later to the West after 1850 when
        Britain moved toward a policy of free trade. These crops were labor, not capital, intensive and in some
        cases quickly exhausted soil fertility and required periodic movement to virgin land (Jackson, 1968).

        </br></br>Tin

        </br></br>Besides ample land, the Malay Peninsula also contained substantial deposits of tin. International
        demand for tin rose progressively in the nineteenth century due to the discovery of a more efficient method
        for producing tinplate (for canned food). At the same time deposits in major suppliers such as Cornwall
        (England) had been largely worked out, thus opening an opportunity for new producers. Traditionally tin had
        been mined by Malays from ore deposits close to the surface. Difficulties with flooding limited the depth of
        mining; furthermore their activity was seasonal. From the 1840s the discovery of large deposits in the
        Peninsula states of Perak and Selangor attracted large numbers of Chinese migrants who dominated the
        industry in the nineteenth century bringing new technology which improved ore recovery and water control,
        facilitating mining to greater depths. By the end of the century Malayan tin exports (at approximately
        52,000 metric tons) supplied just over half the world output. Singapore was a major center for smelting
        (refining) the ore into ingots. Tin mining also attracted attention from European, mainly British, investors
        who again introduced new technology – such as high-pressure hoses to wash out the ore, the steam pump and,
        from 1912, the bucket dredge floating in its own pond, which could operate to even deeper levels. These
        innovations required substantial capital for which the chosen vehicle was the public joint stock company,
        usually registered in Britain. Since no major new ore deposits were found, the emphasis was on increased
        efficiency in production. European operators, again employing mostly Chinese wage labor, enjoyed a technical
        advantage here and by 1929 accounted for 61 percent of Malayan output (Wong Lin Ken, 1965; Yip Yat Hoong,
        1969).

        </br></br>Rubber

        </br></br>While tin mining brought considerable prosperity, it was a non-renewable resource. In the early
        twentieth century it was the agricultural sector which came to the forefront. The crops mentioned previously
        had boomed briefly but were hard pressed to survive severe price swings and the pests and diseases that were
        endemic in tropical agriculture. The cultivation of rubber-yielding trees became commercially attractive as
        a raw material for new industries in the West, notably for tires for the booming automobile industry
        especially in the U.S. Previously rubber had come from scattered trees growing wild in the jungles of South
        America with production only expandable at rising marginal costs. Cultivation on estates generated economies
        of scale. In the 1870s the British government organized the transport of specimens of the tree Hevea
        Brasiliensis from Brazil to colonies in the East, notably Ceylon and Singapore. There the trees flourished
        and after initial hesitancy over the five years needed for the trees to reach productive age, planters
        Chinese and European rushed to invest. The boom reached vast proportions as the rubber price reached record
        heights in 1910 (see Fig.1). Average values fell thereafter but investors were heavily committed and
        planting continued (also in the neighboring Netherlands Indies [Indonesia]). By 1921 the rubber acreage in
        Malaysia (mostly in the Peninsula) had reached 935 000 hectares (about 1.34 million acres) or some 55
        percent of the total in South and Southeast Asia while output stood at 50 percent of world production.

        </br></br>Fig.1. Average London Rubber Prices, 1905-41 (current values)
        </br></br>As a result of this boom, rubber quickly surpassed tin as Malaysia’s main export product, a
        position that it was to hold until 1980. A distinctive feature of the industry was that the technology of
        extracting the rubber latex from the trees (called tapping) by an incision with a special knife, and its
        manufacture into various grades of sheet known as raw or plantation rubber, was easily adopted by a wide
        range of producers. The larger estates, mainly British-owned, were financed (as in the case of tin mining)
        through British-registered public joint stock companies. For example, between 1903 and 1912 some 260
        companies were registered to operate in Malaya. Chinese planters for the most part preferred to form private
        partnerships to operate estates which were on average smaller. Finally, there were the smallholdings (under
        40 hectares or 100 acres) of which those at the lower end of the range (2 hectares/5 acres or less) were
        predominantly owned by indigenous Malays who found growing and selling rubber more profitable than
        subsistence (rice) farming. These smallholders did not need much capital since their equipment was
        rudimentary and labor came either from within their family or in the form of share-tappers who received a
        proportion (say 50 percent) of the output. In Malaya in 1921 roughly 60 percent of the planted area was
        estates (75 percent European-owned) and 40 percent smallholdings (Drabble, 1991, 1).

        </br></br>The workforce for the estates consisted of migrants. British estates depended mainly on migrants
        from India, brought in under government auspices with fares paid and accommodation provided. Chinese
        business looked to the “coolie trade” from South China, with expenses advanced that migrants had
        subsequently to pay off. The flow of immigration was directly related to economic conditions in Malaysia.
        For example arrivals of Indians averaged 61 000 a year between 1900 and 1920. Substantial numbers also came
        from the Netherlands Indies.

        </br></br>Thus far, most capitalist enterprise was located in Malaya. Sarawak and British North Borneo had a
        similar range of mining and agricultural industries in the 19th century. However, their geographical
        location slightly away from the main trade route (see map) and the rugged internal terrain costly for
        transport made them less attractive to foreign investment. However, the discovery of oil by a subsidiary of
        Royal Dutch-Shell starting production from 1907 put Sarawak more prominently in the business of exports. As
        in Malaya, the labor force came largely from immigrants from China and to a lesser extent Java.

        </br></br>The growth in production for export in Malaysia was facilitated by development of an
        infrastructure of roads, railways, ports (e.g. Penang, Singapore) and telecommunications under the auspices
        of the colonial governments, though again this was considerably more advanced in Malaya (Amarjit Kaur, 1985,
        1998)

        </br></br>The Creation of a Plural Society

        </br></br>By the 1920s the large inflows of migrants had created a multi-ethnic population of the type which
        the British scholar, J.S. Furnivall (1948) described as a plural society in which the different racial
        groups live side by side under a single political administration but, apart from economic transactions, do
        not interact with each other either socially or culturally. Though the original intention of many migrants
        was to come for only a limited period (say 3-5 years), save money and then return home, a growing number
        were staying longer, having children and becoming permanently domiciled in Malaysia. The economic
        developments described in the previous section were unevenly located, for example, in Malaya the bulk of the
        tin mines and rubber estates were located along the west coast of the Peninsula. In the boom-times, such was
        the size of the immigrant inflows that in certain areas they far outnumbered the indigenous Malays. In
        social and cultural terms Indians and Chinese recreated the institutions, hierarchies and linguistic usage
        of their countries of origin. This was particularly so in the case of the Chinese. Not only did they
        predominate in major commercial centers such as Penang, Singapore, and Kuching, but they controlled local
        trade in the smaller towns and villages through a network of small shops (kedai) and dealerships that served
        as a pipeline along which export goods like rubber went out and in return imported manufactured goods were
        brought in for sale. In addition Chinese owned considerable mining and agricultural land. This created a
        distribution of wealth and division of labor in which economic power and function were directly related to
        race. In this situation lay the seeds of growing discontent among bumiputera that they were losing their
        ancestral inheritance (land) and becoming economically marginalized. As long as British colonial rule
        continued the various ethnic groups looked primarily to government to protect their interests and maintain
        peaceable relations. An example of colonial paternalism was the designation from 1913 of certain lands in
        Malaya as Malay Reservations in which only indigenous people could own and deal in property (Lim Teck Ghee,
        1977).

        </br></br>Benefits and Drawbacks of an Export Economy

        </br></br>Prior to World War II the international economy was divided very broadly into the northern and
        southern hemispheres. The former contained most of the industrialized manufacturing countries and the latter
        the principal sources of foodstuffs and raw materials. The commodity exchange between the spheres was known
        as the Old International Division of Labor (OIDL). Malaysia’s place in this system was as a leading exporter
        of raw materials (tin, rubber, timber, oil, etc.) and an importer of manufactures. Since relatively little
        processing was done on the former prior to export, most of the value-added component in the final product
        accrued to foreign manufacturers, e.g. rubber tire manufacturers in the U.S.

        </br></br>It is clear from this situation that Malaysia depended heavily on earnings from exports of primary
        commodities to maintain the standard of living. Rice had to be imported (mainly from Burma and Thailand)
        because domestic production supplied on average only 40 percent of total needs. As long as export prices
        were high (for example during the rubber boom previously mentioned), the volume of imports remained ample.
        Profits to capital and good smallholder incomes supported an expanding economy. There are no official data
        for Malaysian national income prior to World War II, but some comparative estimates are given in Table 1
        which indicate that Malayan Gross Domestic Product (GDP) per person was easily the leader in the Southeast
        and East Asian region by the late 1920s.

        </br></br>Table 1
        </br></br>GDP per Capita: Selected Asian Countries, 1900-1990
        </br></br>(in 1985 international dollars)

        </br></br>1900 1929 1950 1973 1990
        </br></br>Malaya/Malaysia1 6002 1910 1828 3088 5775
        </br></br>Singapore - - 22763 5372 14441
        </br></br>Burma 523 651 304 446 562
        </br></br>Thailand 594 623 652 1559 3694
        </br></br>Indonesia 617 1009 727 1253 2118
        </br></br>Philippines 735 1106 943 1629 1934
        </br></br>South Korea 568 945 565 1782 6012
        </br></br>Japan 724 1192 1208 7133 13197
        </br></br>Notes: Malaya to 19731; Guesstimate2; 19603

        </br></br>Source: van der Eng (1994).

        </br></br>However, the international economy was subject to strong fluctuations. The levels of activity in the
        industrialized countries, especially the U.S., were the determining factors here. Almost immediately following
        World War I there was a depression from 1919-22. Strong growth in the mid and late-1920s was followed by the
        Great Depression (1929-32). As industrial output slumped, primary product prices fell even more heavily. For
        example, in 1932 rubber sold on the London market for about one one-hundredth of the peak price in 1910 (Fig.1).
        The effects on export earnings were very severe; in Malaysia’s case between 1929 and 1932 these dropped by 73
        percent (Malaya), 60 percent (Sarawak) and 50 percent (North Borneo). The aggregate value of imports fell on
        average by 60 percent. Estates dismissed labor and since there was no social security, many workers had to
        return to their country of origin. Smallholder incomes dropped heavily and many who had taken out high-interest
        secured loans in more prosperous times were unable to service these and faced the loss of their land.

        </br></br>The colonial government attempted to counteract this vulnerability to economic swings by instituting
        schemes to restore commodity prices to profitable levels. For the rubber industry this involved two periods of
        mandatory restriction of exports to reduce world stocks and thus exert upward pressure on market prices. The
        first of these (named the Stevenson scheme after its originator) lasted from 1 October 1922- 1 November 1928,
        and the second (the International Rubber Regulation Agreement) from 1 June 1934-1941. Tin exports were similarly
        restricted from 1931-41. While these measures did succeed in raising world prices, the inequitable treatment of
        Asian as against European producers in both industries has been debated. The protective policy has also been
        blamed for “freezing” the structure of the Malaysian economy and hindering further development, for instance
        into manufacturing industry (Lim Teck Ghee, 1977; Drabble, 1991).

        </br></br>Why No Industrialization?

        </br></br>Malaysia had very few secondary industries before World War II. The little that did appear was
        connected mainly with the processing of the primary exports, rubber and tin, together with limited production of
        manufactured goods for the domestic market (e.g. bread, biscuits, beverages, cigarettes and various building
        materials). Much of this activity was Chinese-owned and located in Singapore (Huff, 1994). Among the reasons
        advanced are; the small size of the domestic market, the relatively high wage levels in Singapore which made
        products uncompetitive as exports, and a culture dominated by British trading firms which favored commerce over
        industry. Overshadowing all these was the dominance of primary production. When commodity prices were high,
        there was little incentive for investors, European or Asian, to move into other sectors. Conversely, when these
        prices fell capital and credit dried up, while incomes contracted, thus lessening effective demand for
        manufactures. W.G. Huff (2002) has argued that, prior to World War II, “there was, in fact, never a good time to
        embark on industrialization in Malaya.”

        </br></br>War Time 1942-45: The Japanese Occupation

        </br></br>During the Japanese occupation years of World War II, the export of primary products was limited to
        the relatively small amounts required for the Japanese economy. This led to the abandonment of large areas of
        rubber and the closure of many mines, the latter progressively affected by a shortage of spare parts for
        machinery. Businesses, especially those Chinese-owned, were taken over and reassigned to Japanese interests.
        Rice imports fell heavily and thus the population devoted a large part of their efforts to producing enough food
        to stay alive. Large numbers of laborers (many of whom died) were conscripted to work on military projects such
        as construction of the Thai-Burma railroad. Overall the war period saw the dislocation of the export economy,
        widespread destruction of the infrastructure (roads, bridges etc.) and a decline in standards of public health.
        It also saw a rise in inter-ethnic tensions due to the harsh treatment meted out by the Japanese to some groups,
        notably the Chinese, compared to a more favorable attitude towards the indigenous peoples among whom (Malays
        particularly) there was a growing sense of ethnic nationalism (Drabble, 2000).

        </br></br>Postwar Reconstruction and Independence

        </br></br>The returning British colonial rulers had two priorities after 1945; to rebuild the export economy as
        it had been under the OIDL (see above), and to rationalize the fragmented administrative structure (see General
        Background). The first was accomplished by the late 1940s with estates and mines refurbished, production
        restarted once the labor force had been brought back and adequate rice imports regained. The second was a
        complex and delicate political process which resulted in the formation of the Federation of Malaya (1948) from
        which Singapore, with its predominantly Chinese population (about 75%), was kept separate. In Borneo in 1946 the
        state of Sarawak, which had been a private kingdom of the English Brooke family (so-called “White Rajas”) since
        1841, and North Borneo, administered by the British North Borneo Company from 1881, were both transferred to
        direct rule from Britain. However, independence was clearly on the horizon and in Malaya tensions continued with
        the guerrilla campaign (called the “Emergency”) waged by the Malayan Communist Party (membership largely
        Chinese) from 1948-60 to force out the British and set up a Malayan Peoples’ Republic. This failed and in 1957
        the Malayan Federation gained independence (Merdeka) under a “bargain” by which the Malays would hold political
        paramountcy while others, notably Chinese and Indians, were given citizenship and the freedom to pursue their
        economic interests. The bargain was institutionalized as the Alliance, later renamed the National Front (Barisan
        Nasional) which remains the dominant political grouping. In 1963 the Federation of Malaysia was formed in which
        the bumiputera population was sufficient in total to offset the high proportion of Chinese arising from the
        short-lived inclusion of Singapore (Andaya and Andaya, 2001).

        </br></br>Towards the Formation of a National Economy

        </br></br>Postwar two long-term problems came to the forefront. These were (a) the political fragmentation (see
        above) which had long prevented a centralized approach to economic development, coupled with control from
        Britain which gave primacy to imperial as opposed to local interests and (b) excessive dependence on a small
        range of primary products (notably rubber and tin) which prewar experience had shown to be an unstable basis for
        the economy.

        </br></br>The first of these was addressed partly through the political rearrangements outlined in the previous
        section, with the economic aspects buttressed by a report from a mission to Malaya from the International Bank
        for Reconstruction and Development (IBRD) in 1954. The report argued that Malaya “is now a distinct national
        economy.” A further mission in 1963 urged “closer economic cooperation between the prospective Malaysia[n]
        territories” (cited in Drabble, 2000, 161, 176). The rationale for the Federation was that Singapore would serve
        as the initial center of industrialization, with Malaya, Sabah and Sarawak following at a pace determined by
        local conditions.

        </br></br>The second problem centered on economic diversification. The IBRD reports just noted advocated
        building up a range of secondary industries to meet a larger portion of the domestic demand for manufactures,
        i.e. import-substitution industrialization (ISI). In the interim dependence on primary products would perforce
        continue.

        </br></br>The Adoption of Planning

        </br></br>In the postwar world the development plan (usually a Five-Year Plan) was widely adopted by
        Less-Developed Countries (LDCs) to set directions, targets and estimated costs. Each of the Malaysian
        territories had plans during the 1950s. Malaya was the first to get industrialization of the ISI type under way.
        The Pioneer Industries Ordinance (1958) offered inducements such as five-year tax holidays, guarantees (to
        foreign investors) of freedom to repatriate profits and capital etc. A modest degree of tariff protection was
        granted. The main types of goods produced were consumer items such as batteries, paints, tires, and
        pharmaceuticals. Just over half the capital invested came from abroad, with neighboring Singapore in the lead.
        When Singapore exited the federation in 1965, Malaysia’s fledgling industrialization plans assumed greater
        significance although foreign investors complained of stifling bureaucracy retarding their projects.

        </br></br>Primary production, however, was still the major economic activity and here the problem was
        rejuvenation of the leading industries, rubber in particular. New capital investment in rubber had slowed since
        the 1920s, and the bulk of the existing trees were nearing the end of their economic life. The best prospect for
        rejuvenation lay in cutting down the old trees and replanting the land with new varieties capable of raising
        output per acre/hectare by a factor of three or four. However, the new trees required seven years to mature.
        Corporately owned estates could replant progressively, but smallholders could not face such a prolonged loss of
        income without support. To encourage replanting, the government offered grants to owners, financed by a special
        duty on rubber exports. The process was a lengthy one and it was the 1980s before replanting was substantially
        complete. Moreover, many estates elected to switch over to a new crop, oil palms (a product used primarily in
        foodstuffs), which offered quicker returns. Progress was swift and by the 1960s Malaysia was supplying 20
        percent of world demand for this commodity.

        </br></br>Another priority at this time consisted of programs to improve the standard of living of the
        indigenous peoples, most of whom lived in the rural areas. The main instrument was land development, with
        schemes to open up large areas (say 100,000 acres or 40 000 hectares) which were then subdivided into 10 acre/4
        hectare blocks for distribution to small farmers from overcrowded regions who were either short of land or had
        none at all. Financial assistance (repayable) was provided to cover housing and living costs until the holdings
        became productive. Rubber and oil palms were the main commercial crops planted. Steps were also taken to
        increase the domestic production of rice to lessen the historical dependence on imports.

        </br></br>In the primary sector Malaysia’s range of products was increased from the 1960s by a rapid increase in
        the export of hardwood timber, mostly in the form of (unprocessed) saw-logs. The markets were mainly in East
        Asia and Australasia. Here the largely untapped resources of Sabah and Sarawak came to the fore, but the rapid
        rate of exploitation led by the late twentieth century to damaging effects on both the environment (extensive
        deforestation, soil-loss, silting, changed weather patterns), and the traditional hunter-gatherer way of life of
        forest-dwellers (decrease in wild-life, fish, etc.). Other development projects such as the building of dams for
        hydroelectric power also had adverse consequences in all these respects (Amarjit Kaur, 1998; Drabble, 2000;
        Hong, 1987).

        </br></br>A further major addition to primary exports came from the discovery of large deposits of oil and
        natural gas in East Malaysia, and off the east coast of the Peninsula from the 1970s. Gas was exported in
        liquified form (LNG), and was also used domestically as a substitute for oil. At peak values in 1982, petroleum
        and LNG provided around 29 percent of Malaysian export earnings but had declined to 18 percent by 1988.

        </br></br>Industrialization and the New Economic Policy 1970-90

        </br></br>The program of industrialization aimed primarily at the domestic market (ISI) lost impetus in the late
        1960s as foreign investors, particularly from Britain switched attention elsewhere. An important factor here was
        the outbreak of civil disturbances in May 1969, following a federal election in which political parties in the
        Peninsula (largely non-bumiputera in membership) opposed to the Alliance did unexpectedly well. This brought to
        a head tensions, which had been rising during the 1960s over issues such as the use of the national language,
        Malay (Bahasa Malaysia) as the main instructional medium in education. There was also discontent among
        Peninsular Malays that the economic fruits since independence had gone mostly to non-Malays, notably the
        Chinese. The outcome was severe inter-ethnic rioting centered in the federal capital, Kuala Lumpur, which led to
        the suspension of parliamentary government for two years and the implementation of the New Economic Policy
        (NEP).

        </br></br>The main aim of the NEP was a restructuring of the Malaysian economy over two decades, 1970-90 with
        the following aims:

        </br></br>to redistribute corporate equity so that the bumiputera share would rise from around 2 percent to 30
        percent. The share of other Malaysians would increase marginally from 35 to 40 percent, while that of foreigners
        would fall from 63 percent to 30 percent.
        </br></br>to eliminate the close link between race and economic function (a legacy of the colonial era) and
        restructure employment so that that the bumiputera share in each sector would reflect more accurately their
        proportion of the total population (roughly 55 percent). In 1970 this group had about two-thirds of jobs in the
        primary sector where incomes were generally lowest, but only 30 percent in the secondary sector. In high-income
        middle class occupations (e.g. professions, management) the share was only 13 percent.
        </br></br>To eradicate poverty irrespective of race. In 1970 just under half of all households in Peninsular
        Malaysia had incomes below the official poverty line. Malays accounted for about 75 percent of these.
        </br></br>The principle underlying these aims was that the redistribution would not result in any one group
        losing in absolute terms. Rather it would be achieved through the process of economic growth, i.e. the economy
        would get bigger (more investment, more jobs, etc.). While the primary sector would continue to receive
        developmental aid under the successive Five Year Plans, the main emphasis was a switch to export-oriented
        industrialization (EOI) with Malaysia seeking a share in global markets for manufactured goods. Free Trade Zones
        (FTZs) were set up in places such as Penang where production was carried on with the undertaking that the output
        would be exported. Firms locating there received concessions such as duty-free imports of raw materials and
        capital goods, and tax concessions, aimed at primarily at foreign investors who were also attracted by
        Malaysia’s good facilities, relatively low wages and docile trade unions. A range of industries grew up;
        textiles, rubber and food products, chemicals, telecommunications equipment, electrical and electronic
        machinery/appliances, car assembly and some heavy industries, iron and steel. As with ISI, much of the capital
        and technology was foreign, for example the Japanese firm Mitsubishi was a partner in a venture to set up a
        plant to assemble a Malaysian national car, the Proton, from mostly imported components (Drabble, 2000).

        </br></br>Results of the NEP

        </br></br>Table 2 below shows the outcome of the NEP in the categories outlined above.

        </br></br>Table 2
        </br></br>Restructuring under the NEP, 1970-90

        </br></br>1970 1990
        </br></br>Wealth Ownership (%) Bumiputera 2.0 20.3
        </br></br>Other Malaysians 34.6 54.6
        </br></br>Foreigners 63.4 25.1
        </br></br>Employment
        </br></br>(%) of total
        </br></br>workers
        </br></br>in each
        </br></br>sector
        </br></br>Primary sector (agriculture, mineral
        </br></br>extraction, forest products and fishing) Bumiputera 67.6 [61.0]* 71.2 [36.7]*
        </br></br>Others 32.4 28.8
        </br></br>Secondary sector
        </br></br>(manufacturing and construction) Bumiputera 30.8 [14.6]* 48.0 [26.3]*
        </br></br>Others 69.2 52.0
        </br></br>Tertiary sector (services) Bumiputera 37.9 [24.4]* 51.0 [36.9]*
        </br></br>Others 62.1 49.0
        </br></br>Note: [ ]* is the proportion of the ethnic group thus employed. The “others” category has not been
        disaggregated by race to avoid undue complexity.
        </br></br>Source: Drabble, 2000, Table 10.9.

        </br></br>Section (a) shows that, overall, foreign ownership fell substantially more than planned, while that of
        “Other Malaysians” rose well above the target. Bumiputera ownership appears to have stopped well short of the 30
        percent mark. However, other evidence suggests that in certain sectors such as agriculture/mining (35.7%) and
        banking/insurance (49.7%) bumiputera ownership of shares in publicly listed companies had already attained a
        level well beyond the target. Section (b) indicates that while bumiputera employment share in primary production
        increased slightly (due mainly to the land schemes), as a proportion of that ethnic group it declined sharply,
        while rising markedly in both the secondary and tertiary sectors. In middle class employment the share rose to
        27 percent.

        </br></br>As regards the proportion of households below the poverty line, in broad terms the incidence in
        Malaysia fell from approximately 49 percent in 1970 to 17 percent in 1990, but with large regional variations
        between the Peninsula (15%), Sarawak (21 %) and Sabah (34%) (Drabble, 2000, Table 13.5). All ethnic groups
        registered big falls, but on average the non-bumiputera still enjoyed the lowest incidence of poverty. By 2002
        the overall level had fallen to only 4 percent.

        </br></br>The restructuring of the Malaysian economy under the NEP is very clear when we look at the changes in
        composition of the Gross Domestic Product (GDP) in Table 3 below.

        </br></br>Table 3
        </br></br>Structural Change in GDP 1970-90 (% shares)

        </br></br>Year Primary Secondary Tertiary
        </br></br>1970 44.3 18.3 37.4
        </br></br>1990 28.1 30.2 41.7
        </br></br>Source: Malaysian Government, 1991, Table 3-2.

        </br></br>Over these three decades Malaysia accomplished a transition from a primary product-dependent economy
        to one in which manufacturing industry had emerged as the leading growth sector. Rubber and tin, which accounted
        for 54.3 percent of Malaysian export value in 1970, declined sharply in relative terms to a mere 4.9 percent in
        1990 (Crouch, 1996, 222).

        </br></br>Factors in the structural shift

        </br></br>The post-independence state played a leading role in the transformation. The transition from British
        rule was smooth. Apart from the disturbances in 1969 government maintained a firm control over the
        administrative machinery. Malaysia’s Five Year Development plans were a model for the developing world. Foreign
        capital was accorded a central role, though subject to the requirements of the NEP. At the same time these
        requirements discouraged domestic investors, the Chinese especially, to some extent (Jesudason, 1989).

        </br></br>Development was helped by major improvements in education and health. Enrolments at the primary school
        level reached approximately 90 percent by the 1970s, and at the secondary level 59 percent of potential by 1987.
        Increased female enrolments, up from 39 percent to 58 percent of potential from 1975 to 1991, were a notable
        feature, as was the participation of women in the workforce which rose to just over 45 percent of total
        employment by 1986/7. In the tertiary sector the number of universities increased from one to seven between 1969
        and 1990 and numerous technical and vocational colleges opened. Bumiputera enrolments soared as a result of the
        NEP policy of redistribution (which included ethnic quotas and government scholarships). However, tertiary
        enrolments totaled only 7 percent of the age group by 1987. There was an “educational-occupation mismatch,” with
        graduates (bumiputera especially) preferring jobs in government, and consequent shortfalls against strong demand
        for engineers, research scientists, technicians and the like. Better living conditions (more homes with piped
        water and more rural clinics, for example) led to substantial falls in infant mortality, improved public health
        and longer life-expectancy, especially in Peninsular Malaysia (Drabble, 2000, 248, 284-6).

        </br></br>The quality of national leadership was a crucial factor. This was particularly so during the NEP. The
        leading figure here was Dr Mahathir Mohamad, Malaysian Prime Minister from 1981-2003. While supporting the NEP
        aim through positive discrimination to give bumiputera an economic stake in the country commensurate with their
        indigenous status and share in the population, he nevertheless emphasized that this should ultimately lead them
        to a more modern outlook and ability to compete with the other races in the country, the Chinese especially (see
        Khoo Boo Teik, 1995). There were, however, some paradoxes here. Mahathir was a meritocrat in principle, but in
        practice this period saw the spread of “money politics” (another expression for patronage) in Malaysia. In
        common with many other countries Malaysia embarked on a policy of privatization of public assets, notably in
        transportation (e.g. Malaysian Airlines), utilities (e.g. electricity supply) and communications (e.g.
        television). This was done not through an open process of competitive tendering but rather by a “nebulous ‘first
        come, first served’ principle” (Jomo, 1995, 8) which saw ownership pass directly to politically well-connected
        businessmen, mainly bumiputera, at relatively low valuations.

        </br></br>The New Development Policy

        </br></br>Positive action to promote bumiputera interests did not end with the NEP in 1990, this was followed in
        1991 by the New Development Policy (NDP), which emphasized assistance only to “Bumiputera with potential,
        commitment and good track records” (Malaysian Government, 1991, 17) rather than the previous blanket measures to
        redistribute wealth and employment. In turn the NDP was part of a longer-term program known as Vision 2020. The
        aim here is to turn Malaysia into a fully industrialized country and to quadruple per capita income by the year
        2020. This will require the country to continue ascending the technological “ladder” from low- to high-tech
        types of industrial production, with a corresponding increase in the intensity of capital investment and greater
        retention of value-added (i.e. the value added to raw materials in the production process) by Malaysian
        producers.

        </br></br>The Malaysian economy continued to boom at historically unprecedented rates of 8-9 percent a year for
        much of the 1990s (see next section). There was heavy expenditure on infrastructure, for example extensive
        building in Kuala Lumpur such as the Twin Towers (currently the highest buildings in the world). The volume of
        manufactured exports, notably electronic goods and electronic components increased rapidly.

        </br></br>Asian Financial Crisis, 1997-98

        </br></br>The Asian financial crisis originated in heavy international currency speculation leading to major
        slumps in exchange rates beginning with the Thai baht in May 1997, spreading rapidly throughout East and
        Southeast Asia and severely affecting the banking and finance sectors. The Malaysian ringgit exchange rate fell
        from RM 2.42 to 4.88 to the U.S. dollar by January 1998. There was a heavy outflow of foreign capital. To
        counter the crisis the International Monetary Fund (IMF) recommended austerity changes to fiscal and monetary
        policies. Some countries (Thailand, South Korea, and Indonesia) reluctantly adopted these. The Malaysian
        government refused and implemented independent measures; the ringgitbecame non-convertible externally and was
        pegged at RM 3.80 to the US dollar, while foreign capital repatriated before staying at least twelve months was
        subject to substantial levies. Despite international criticism these actions stabilized the domestic situation
        quite effectively, restoring net growth (see next section) especially compared to neighboring Indonesia.

        </br></br>Rates of Economic Growth

        </br></br>Malaysia’s economic growth in comparative perspective from 1960-90 is set out in Table 4 below.

        </br></br>Table 4
        </br></br>Asia-Pacific Region: Growth of Real GDP (annual average percent)

        </br></br>1960-69 1971-80 1981-89
        </br></br>Japan 10.9 5.0 4.0
        </br></br>Asian “Tigers”
        </br></br>Hong Kong 10.0 9.5 7.2
        </br></br>South Korea 8.5 8.7 9.3
        </br></br>Singapore 8.9 9.0 6.9
        </br></br>Taiwan 11.6 9.7 8.1
        </br></br>ASEAN-4
        </br></br>Indonesia 3.5 7.9 5.2
        </br></br>Malaysia 6.5 8.0 5.4
        </br></br>Philippines 4.9 6.2 1.7
        </br></br>Thailand 8.3 9.9 7.1
        </br></br>Source: Drabble, 2000, Table 10.2; figures for Japan are for 1960-70, 1971-80, and 1981-90.

        </br></br>The data show that Japan, the dominant Asian economy for much of this period, progressively slowed by
        the 1990s (see below). The four leading Newly Industrialized Countries (Asian “Tigers” as they were called)
        followed EOF strategies and achieved very high rates of growth. Among the four ASEAN (Association of Southeast
        Asian Nations formed 1967) members, again all adopting EOI policies, Thailand stood out followed closely by
        Malaysia. Reference to Table 1 above shows that by 1990 Malaysia, while still among the leaders in GDP per head,
        had slipped relative to the “Tigers.”

        </br></br>These economies, joined by China, continued growth into the 1990s at such high rates (Malaysia
        averaged around 8 percent a year) that the term “Asian miracle” became a common method of description. The
        exception was Japan which encountered major problems with structural change and an over-extended banking system.
        Post-crisis the countries of the region have started recovery but at differing rates. The Malaysian economy
        contracted by nearly 7 percent in 1998, recovered to 8 percent growth in 2000, slipped again to under 1 percent
        in 2001 and has since stabilized at between 4 and 5 percent growth in 2002-04.

        </br></br>The new Malaysian Prime Minister (since October 2003), Abdullah Ahmad Badawi, plans to shift the
        emphasis in development to smaller, less-costly infrastructure projects and to break the previous dominance of
        “money politics.” Foreign direct investment will still be sought but priority will be given to nurturing the
        domestic manufacturing sector.

        </br></br>Further improvements in education will remain a key factor (Far Eastern Economic Review, Nov.6, 2003).

        </br></br>Overview

        </br></br>Malaysia owes its successful historical economic record to a number of factors. Geographically it lies
        close to major world trade routes bringing early exposure to the international economy. The sparse indigenous
        population and labor force has been supplemented by immigrants, mainly from neighboring Asian countries with
        many becoming permanently domiciled. The economy has always been exceptionally open to external influences such
        as globalization. Foreign capital has played a major role throughout. Governments, colonial and national, have
        aimed at managing the structure of the economy while maintaining inter-ethnic stability. Since about 1960 the
        economy has benefited from extensive restructuring with sustained growth of exports from both the primary and
        secondary sectors, thus gaining a double impetus.

        </br></br>However, on a less positive assessment, the country has so far exchanged dependence on a limited range
        of primary products (e.g. tin and rubber) for dependence on an equally limited range of manufactured goods,
        notably electronics and electronic components (59 percent of exports in 2002). These industries are facing
        increasing competition from lower-wage countries, especially India and China. Within Malaysia the distribution
        of secondary industry is unbalanced, currently heavily favoring the Peninsula. Sabah and Sarawak are still
        heavily dependent on primary products (timber, oil, LNG). There is an urgent need to continue the search for new
        industries in which Malaysia can enjoy a comparative advantage in world markets, not least because inter-ethnic
        harmony depends heavily on the continuance of economic prosperity.

        </br></br>Select Bibliography

        </br></br>General Studies

        </br></br>Amarjit Kaur. Economic Change in East Malaysia: Sabah and Sarawak since 1850. London: Macmillan, 1998.

        </br></br>Andaya, L.Y. and Andaya, B.W. A History of Malaysia, second edition. Basingstoke: Palgrave, 2001.

        </br></br>Crouch, Harold. Government and Society in Malaysia. Sydney: Allen and Unwin, 1996.

        </br></br>Drabble, J.H. An Economic History of Malaysia, c.1800-1990: The Transition to Modern Economic Growth.
        Basingstoke: Macmillan and New York: St. Martin’s Press, 2000.

        </br></br>Furnivall, J.S. Colonial Policy and Practice: A Comparative Study of Burma and Netherlands India.
        Cambridge (UK), 1948.

        </br></br>Huff, W.G. The Economic Growth of Singapore: Trade and Development in the Twentieth Century.
        Cambridge: Cambridge University Press, 1994.

        </br></br>Jomo, K.S. Growth and Structural Change in the Malaysian Economy. London: Macmillan, 1990.

        </br></br>Industries/Transport

        </br></br>Alavi, Rokiah. Industrialization in Malaysia: Import Substitution and Infant Industry Performance.
        London: Routledge, 1966.

        </br></br>Amarjit Kaur. Bridge and Barrier: Transport and Communications in Colonial Malaya 1870-1957. Kuala
        Lumpur: Oxford University Press, 1985.

        </br></br>Drabble, J.H. Rubber in Malaya 1876-1922: The Genesis of the Industry. Kuala Lumpur: Oxford University
        Press, 1973.

        </br></br>Drabble, J.H. Malayan Rubber: The Interwar Years. London: Macmillan, 1991.

        </br></br>Huff, W.G. “Boom or Bust Commodities and Industrialization in Pre-World War II Malaya.” Journal of
        Economic History 62, no. 4 (2002): 1074-1115.

        </br></br>Jackson, J.C. Planters and Speculators: European and Chinese Agricultural Enterprise in Malaya
        1786-1921. Kuala Lumpur: University of Malaya Press, 1968.

        </br></br>Lim Teck Ghee. Peasants and Their Agricultural Economy in Colonial Malaya, 1874-1941. Kuala Lumpur:
        Oxford University Press, 1977.

        </br></br>Wong Lin Ken. The Malayan Tin Industry to 1914. Tucson: University of Arizona Press, 1965.

        </br></br>Yip Yat Hoong. The Development of the Tin Mining Industry of Malaya. Kuala Lumpur: University of
        Malaya Press, 1969.

        </br></br>New Economic Policy

        </br></br>Jesudason, J.V. Ethnicity and the Economy: The State, Chinese Business and Multinationals in Malaysia.
        Kuala Lumpur: Oxford University Press, 1989.

        </br></br>Jomo, K.S., editor. Privatizing Malaysia: Rents, Rhetoric, Realities. Boulder, CO: Westview Press,
        1995.

        </br></br>Khoo Boo Teik. Paradoxes of Mahathirism: An Intellectual Biography of Mahathir Mohamad. Kuala Lumpur:
        Oxford University Press, 1995.

        </br></br>Vincent, J.R., R.M. Ali and Associates. Environment and Development in a Resource-Rich Economy:
        Malaysia under the New Economic Policy. Cambridge, MA: Harvard University Press, 1997

        </br></br>Ethnic Communities

        </br></br>Chew, Daniel. Chinese Pioneers on the Sarawak Frontier, 1841-1941. Kuala Lumpur: Oxford University
        Press, 1990.

        </br></br>Gullick, J.M. Malay Society in the Late Nineteenth Century. Kuala Lumpur: Oxford University Press,
        1989.

        </br></br>Hong, Evelyne. Natives of Sarawak: Survival in Borneo’s Vanishing Forests. Penang: Institut Masyarakat
        Malaysia, 1987.

        </br></br>Shamsul, A.B. From British to Bumiputera Rule. Singapore: Institute of Southeast Asian Studies, 1986.

        </br></br>Economic Growth

        </br></br>Far Eastern Economic Review. Hong Kong. An excellent weekly overview of current regional affairs.

        </br></br>Malaysian Government. The Second Outline Perspective Plan, 1991-2000. Kuala Lumpur: Government
        Printer, 1991.

        </br></br>Van der Eng, Pierre. “Assessing Economic Growth and the Standard of Living in Asia 1870-1990.” Milan,
        Eleventh International Economic History Congress, 1994.</p>
</div>
</div>
</br>
</br>
<footer><strong>Designed by</br><a href="https://www.facebook.com/alwyn.yeo">ALWYN YEO</a>,<a
                href="https://www.facebook.com/Mickeyjunwei?fref=ts">CHAN JUN WEI</a> and <a
                href="https://www.facebook.com/yee.shin.39">Lee Shin Yee</a></strong></footer>
</body>
</html>