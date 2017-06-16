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
    <title>historySociety | British Timeline</title>
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
        <p><strong>1801</strong> - United Kingdom formed by union of the kingdoms of Great Britain and Ireland.</br>
        </br><strong>1815</strong> - Role in defeating Napoleon's French Empire leads to Britain becoming pre-eminent
        imperial power.</br>
        </br><strong>1830s</strong> - Electoral reform acts begin steady move towards primacy of House of Commons and
        universal suffrage.</br>
        </br><strong>1840s</strong> - British industrial power harnessing technological change and boosts free trade and
        investment worldwide, reaching its peak in the second half of the 19th century.</br>
        </br><strong>1880s</strong> - Devolved government for Ireland becomes a major political issue, splitting Liberal
        Party and reviving a violent Irish separatist movement.</br>
        </br><strong>1904</strong> - Entente Cordiale with France marks Britain's return to European security
        treaties.</br>
        </br><strong>1906</strong> - Liberal government lays foundations for later welfare state with pensions, work and
        sickness insurance and the expansion of secondary education.</br>
        </br><strong>1914</strong> - Outbreak of First World War. UK enters hostilities against Germany. Gruelling
        trench warfare in Belgium and France.</br>
        </br><strong>1918</strong> - War ends in November with armistice. The number of UK war dead runs to several
        hundred thousand.</br>
        </br><strong>1921</strong> - UK agrees to the foundation of the Irish Free State after three-years Irish war of
        independence. Northern Ireland remains part of the UK.</br>
        </br><strong>1924</strong> - First government led by the Labour Party under Ramsay MacDonald.</br>
        </br><strong>1926</strong> - General Strike arising from coal dispute.</br>
        </br><strong>1929</strong> - World stock market crash. Unemployment begins to rise in UK.</br>
        </br><strong>1931</strong> - Economic crisis. Millions are unemployed. National Government coalition
        formed.</br>
        </br><strong>1936</strong> - King Edward VIII abdicates over relationship with an American divorcee, Wallis
        Simpson.</br>
        </br><strong>1938</strong> - Prime Minister Neville Chamberlain meets the leader of Nazi Germany, Adolf Hitler,
        in Munich. Chamberlain says he has averted war with Germany.</br>
        </br><strong>Word War II</strong></br>
        </br><strong>1939</strong> - Germany invades Poland. UK declares war on Germany.</br>
        </br><strong>1940</strong> - Winston Churchill becomes prime minister. Fighter pilots repel German air attacks
        in the Battle of Britain. London and other cities badly damaged in German bombing raids.</br>
        </br><strong>1944</strong> - Allied troops invade France from Britain on D-Day (6th June) and begin to fight
        their way towards Germany.</br>
        </br><strong>1945</strong> - Germany surrenders on 8 May.</br>
        </br>Labour leader Clement Atlee wins landslide election victory.</br>
        </br><strong>Decolonisation and new responsibilities</strong></br>
        </br><strong>1945</strong> - The UK becomes a permanent member of the UN Security Council.</br>
        </br><strong>1947</strong> - The former colony of India becomes independence.</br>
        </br><strong>1948</strong> - National Health Service is established.</br>
        </br><strong>1949</strong> - The UK becomes a founder member of Nato.</br>
        </br><strong>1956</strong> - UK intervenes in Suez Canal Zone, but withdraws under pressure from the US.</br>
        </br><strong>1961</strong> - UK application to join European Economic Community vetoed by French President
        Charles de Gaulle.</br>
        </br><strong>1969</strong> - British troops sent to quell unrest in Northern Ireland.</br>
        </br><strong>1973</strong> - The UK joins the European Economic Community.</br>
        </br>Industry on a three-day week because of strike by power workers and miners.</br>
        </br><strong>1975</strong> - EEC membership is endorsed in a referendum. North Sea oil begins to be pumped
        ashore.</br>
        </br>Conservatives in power</br>
        </br><strong>1979</strong> - The Conservative politician Margaret Thatcher becomes prime minister. She begins to
        introduce free-market policies.</br>
        </br><strong>1981</strong> - Government begins programme of privatisation of state-run industries, followed by
        deregulation of financial markets.</br>
        </br><strong>1982</strong> - Argentina invades the Falklands Islands in the South Atlantic. The UK dispatches a
        task force, which re-takes them.</br>
        </br> <strong>1984</strong> - The IRA attempts to assassinate Margaret Thatcher in her hotel in Brighton.
        Several killed and injured by a bomb blast, but the prime minister escapes unhurt.</br>
        </br><strong>1990</strong> - Mrs Thatcher resigns as prime minister after she fails to defeat a challenge to her
        leadership of the Conservative party. John Major becomes prime minister.</br>
        </br><strong>1991</strong> - UK takes part in US-led military campaign to liberate Kuwait from Iraqi
        occupation.</br>
        </br><strong>1992</strong> - John Major re-elected as prime minister.</br>
        </br><strong>1993</strong> - Downing Street declaration on Northern Ireland - a peace proposal issued jointly
        with the Irish government.</br>
        </br><strong>1996</strong> - Government announces that BSE, or 'mad cow disease', can be transmitted to humans.
        Crisis for beef industry follows, with mass slaughtering of animals, collapse of markets and export bans. Many
        beef farmers face financial ruin.</br>
        </br>Labour landslide</br>
        </br><strong>1997</strong> May - Labour Party under Tony Blair wins landslide election victory.</br>
        </br><strong>1997</strong> August - Diana, Princess of Wales, is killed in a car crash in Paris.</br>
        </br><strong>1997</strong> September - Referendums in Scotland and Wales back the creation of separate
        assemblies, which are inaugurated in 1999.</br>
        </br><strong>1998</strong> - Good Friday Agreement on a political settlement for Northern Ireland is approved by
        voters in the Republic of Ireland and Northern Ireland.</br>
        </br><strong>1999</strong> - UK forces take part in the air war against Yugoslavia and the consequent
        multinational force in Kosovo.</br>
        </br> <strong>2000</strong> May - UK forces intervene in Sierra Leone to protect and evacuate foreign citizens
        caught up in the civil war. They subsequently stay on to help train the government army.</br>
        </br><strong>2001</strong> January - Libyan intelligence agent Abdelbaset al-Megrahi is found guilty of the 1988
        bombing of Pan Am Flight 103 over Lockerbie in Scotland. All 259 people on board as well as 11 on the ground
        were killed.</br>
        </br><strong>2001</strong> September/November - Following September 11 attacks on targets in the US, PM Tony
        Blair offers strong support for US-led campaign against international terrorism. British forces take part in air
        strikes on targets in Afghanistan.</br>
        </br><strong>2003</strong> March - UK joins US-led military campaign against Iraq after UN-based diplomatic
        efforts to ensure Baghdad has no weapons of mass destruction are perceived to have failed.</br>
        </br><strong>2004</strong> January - Lord Hutton delivers findings of inquiry into suicide of government
        scientist David Kelly, who had expressed concern about UK intelligence on Iraq's weapons of mass destruction
        programme to the BBC. His report exonerates the government, heavily criticises the BBC.</br>
        </br>London bombings</br>
        </br><strong>2005</strong> 7 July - 52 people are killed and around 700 are injured in four Islamist suicide
        bomb attacks on London's transport network. Two weeks later, more would-be bombers fail to detonate four devices
        on same network.</br>
        </br><strong>2005</strong> July - Irish Republican Army (IRA) announces formal end to its armed campaign.</br>
        </br><strong>2007</strong> May - Leaders of Northern Ireland Assembly sworn in, ending five years of direct rule
        from London.</br>
        </br>Pro-independence Scottish National Party (SNP) becomes the largest party in the Scottish Parliament
        following elections.</br>
        </br><strong>2007</strong> June - Gordon Brown succeeds Tony Blair as prime minister and Labour leader.</br>
        </br><strong>2007</strong> July - Diplomatic row with Russia over Britain's bid to extradite Andrei Lugovoi, an
        ex-KGB agent accused of killing Russian defector Alexander Litvinenko in London with radioactive polonium.</br>
        </br>Financial crisis</br>
        </br><strong>2008</strong> October - The government part-nationalises three leading UK banks with a 37 billion
        pound rescue package. It also pumps billions into the UK financial system after record stock market falls
        precipitated by the global "credit crunch".</br>
        </br><strong>2009</strong> November - Britain withdraws bulk of its remaining troops in southern Iraq, leaving
        only a small force tasked with training the Iraqi military.</br>
        </br>The UK economy comes out of recession, after figures show it grew by 0.1% in the last quarter of 2009,
        following six consecutive quarters of economic contraction - the longest such period since quarterly figures
        were first recorded in 1955.</br>
        </br>Coalition government</br>
        </br><strong>2010</strong> May - General election: Conservative Party wins most seats but fails to gain an
        absolute majority. Conservative leader David Cameron heads first post-war coalition with the third-placed
        Liberal Democrats.</br>
        </br><strong>2010</strong> October - Coalition announces large-scale public spending cuts aimed at reducing UK's
        budget deficit, with an average 19% four-year cut in budgets of government departments.</br>
        </br><strong>2011</strong> March-September - Britain plays a prominent part in the international intervention in
        the conflict in Libya.</br>
        </br><strong>2011</strong> May - Referendum rejects plan to replace first-past-the-post electoral system for
        House of Commons with alternative vote proportional system.
        </br><strong>2011</strong> August - The killing of a 29-year old man by police sparks widespread riots and
        looting in poorer areas of London, as well as in several other English cities. Insurers estimate the cost of the
        damage at more than £200m.</br>
        </br><strong>2011</strong> December - Prime Minister David Cameron blocks proposed changes to the EU's Lisbon
        Treaty aimed at addressing the crisis in the eurozone, over threats to the independence of the City of London as
        a financial centre.</br>
        </br><strong>2012</strong> August-September - Britain hosts the 2012 Summer Olympics and Paralympics to
        widespread international acclaim.</br>
        </br>Scottish referendum</br>
        </br><strong>2012</strong> October - British and Scottish governments agree on terms for a Scottish referendum
        on independence in autumn 2014.</br>
        </br><strong>2013</strong> January - Prime Minister David Cameron proposes a referendum on whether to leave the
        European Union after the next election.</br>
        </br><strong>2013</strong> May - A soldier, Drummer Lee Rigby, is hacked to death in south London by two Islamic
        extremists.</br>
        </br><strong>2013</strong> July - The Duchess of Cambridge gives birth to a son George, who is third in line to
        the throne after the Prince of Wales and the Duke of Cambridge.</br>
        </br><strong>2013</strong> August - The House of Commons votes to block UK military involvement in Syria in a
        political embarrassment for the government.</br>
        </br><strong>2014</strong> May - Support for the anti-EU UK Independence Party (UKIP) surges in local and
        European elections.</br>
        </br><strong>2014</strong> September - Voters in a referendum in Scotland reject independence, with 55% opting
        to remain part of the United Kingdom and 45% favouring independence.</br>
        </br><strong>2015</strong> May - Conservative Party confounds polls by winning majority in general election for
        first time since 1992. Liberal Democrat coalition partners lose all but eight seats. UK Independence Party wins
        nearly four million votes, but retains only one of two seats won at by-elections.</br>
        </brScottish National Party wins all but three seats in Scotland, becoming third largest party in parliament and
        dealing heavy blow to opposition Labour Party.</br>
        </br><strong>Vote to leave European Union</strong></br>
        </br><strong>2016</strong> June - Political crisis after voters in a referendum opt to quit the European Union.
        David Cameron resigns, succeeded as prime minister by his home secretary, Theresa May.</br>
        </br><strong>2017</strong> March - Islamist Khalid Masood kills five people, including a police officer, in a
        rampage that ends in a thwarted attempt to force entry into parliament.</br>
        </br><strong>2017</strong> May-June - Islamist attacks in Manchester and London leave a total of 30 people
        dead.</br>
        </br><strong>2017</strong> June - Early elections, called by Prime Minister Theresa May to strength her hand in
        negotiating Britain's exit from the European Union, results in a hung parliament and a fragile Conservative
        minority government.</p>
    </div>
</div>
</br>
</br>
<footer><strong>Designed by</br><a href="https://www.facebook.com/alwyn.yeo">ALWYN YEO</a>,<a
                href="https://www.facebook.com/Mickeyjunwei?fref=ts">CHAN JUN WEI</a> and <a
                href="https://www.facebook.com/yee.shin.39">Lee Shin Yee</a></strong></footer>
</body>
</html>