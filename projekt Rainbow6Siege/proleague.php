<html>
<head>
	<meta  charset="utf-8" />
	<title>Tom Clancy’s Rainbow Six Siege</title>
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<link rel="stylesheet" href="css/fontello.css" type="text/css"/>
	<link rel="icon" href="img/logo.ico" sizes="64x64" type="image/png">
	<script src="js/wideo.js"></script>
	<script src="js/funkcje.js"></script>
</head>
<body>
<div id="strona">
		<nav>
			<ul class="menu">
				<li><a href="index.php">Strona główna</a></li>
				<li><a href="rozgrywka.php">Gra</a></li>
				<li><a href="proleague.php">E-sport</a></li>
				<li><a href="operatorzy.php">Operatorzy</a></li>
				<li><a href="mapy.php">Mapy</a></li>
				<li><a href="https://rainbow6.ubisoft.com/siege/pl-pl/home/" target="new">Ubisoft<img class="udos" src="img/odnośnik.png"></a></li>
				<?php
					session_start();
					if (isset($_SESSION["logowanie"])) {
						echo '<li><a href="profil.php">Profil</a></li>';
						echo '<li><a href="konkurs.php">!KONKURS!</a></li>';
						echo '<li><a href="wyloguj.php">WYLOGUJ</a>/li>';
					}
					else {
						echo '<li><a href="logowanie.php">ZALOGUJ SIĘ</a></li>';
					}
				?>
			</ul>
		</nav>
	<header>
	<img src="img/rainbowmain.png" width="100%">
	</header>
	<div id="tresc">
		<div id="h1">
			<h1>Pro League i Six Invitational</h1>
		</div>
		<br><br><br>
		<img src="img/rainbowproleague.jpg" width="100%">
		<div id="tekst">
			<p>W marcu 2016 roku rozpoczął się pierwszy sezon ligi <i><b>Tom Clancy's Rainbow Six Pro League</b></i> w wersji na komputery osobiste i 
			konsolę Xbox One, w którym pula nagród wyniosła 100 tysięcy dolarów. Pierwsze mecze zostały rozegrane 4 marca 2016 roku w Polsce,
			w ramach Intel Extreme Masters w Katowicach. Finały rozgrywek odbyły się 22 kwietnia 2016 roku dla graczy Xbox One na 
			imprezie PAX East w Bostonie i 7 maja 2016 roku w Kolonii dla graczy komputerowych. Sezon drugi rozpoczął się 30 maja 2016 roku 
			na platformie Xbox One i 2 czerwca 2016 dla graczy korzystających z komputerów osobistych. Pula nagród wzrosła do 150 tysięcy 
			dolarów. Finały rozgrywek odbyły się 30 lipca 2016 roku dla graczy Xbox One w Burbank w Kalifornii i 6 sierpnia 2016 
			roku w Kolonii dla graczy komputerowych. Sezon trzeci rozpoczął się 29 sierpnia 2016 roku na platformie Xbox One i 1 września
			2016 dla graczy korzystających z komputerów osobistych. Pula nagród ponownie wyniosła 150 tysięcy dolarów. Platformą wiodącą 
			dla rozgrywek sportu elektronicznego są komputery osobiste. Na tej platformie funkcjonują trzy ligi: <b><i>Pro League</i></b>, <b><i>Challenger 
			League</i></b> i <b><i>GO4</i></b>, natomiast na PlayStation 4 i Xboksie One dostępne są dwie ligi: <b><i>Major League</i></b> i <b><i>GO4</i></b>. Według wydawcy gry jeden z 
			turniejów z serii <b><i>Six Invitational</i></b> z pierwszej połowy 2018 roku w szczytowym momencie rozgrywek oglądało ponad 321 tysięcy 
			widzów. Sumaryczny czas oglądania turnieju wyniósł ponad 6,2 miliona godzin. Aktualnymi mistrzami świwata jest drużyna <b><i>Ninjas in Pyjamas</i></b>.
		</div>
		<table id="tabela">
			<tr><th colspan=3>Zwycięzcy poszczególnych Six Invitational</th></tr>
			<tr><th>Turniej</th><th>Zwycięzca</th><th>Pula nagród</th></tr>
			<tr><td>Six Invitational 2017 - PC</td><td>Continuum</td><td>100,000$</td></tr>
			<tr><td>Six Invitational 2017 - One</td><td>Elevate</td><td>100,000$</td></tr>
			<tr><td>Six Invitational 2018</td><td>PENTA Esports</td><td>500,000$</td></tr>
			<tr><td>Six Invitational 2019</td><td>G2 Esports</td><td>2,000,000$</td></tr>
			<tr><td>Six Invitational 2020</td><td>Spacestation Gaming</td><td>3,000,000$</td></tr>
			<tr><td>Six Invitational 2021</td><td>Ninjas in Pyjamas</td><td>3,000,000$</td></tr>
		</table>
		<br>
		<img src="img/rainbowinvitational.jpg" width="100%">
	</div>
	<div id="wideo">
		<h4>Filmy zwieńczające każdy Six Invitational</h4>
		<button id="przyciskinv" onclick="six2017()">Six Invitational 2017</button>
		<button id="przyciskinv" onclick="six2018()">Six Invitational 2018</button>
		<button id="przyciskinv" onclick="six2019()">Six Invitational 2019</button>
		<button id="przyciskinv" onclick="six2020()">Six Invitational 2020</button>
		<button id="przyciskinv" onclick="six2021()">Six Invitational 2021</button><br><br>
		<iframe id="wideoinv" width="0px" height="0px" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
	<br><br>
	<div id="stopka1">
		<div class="LOGO">
			<a href="index.php"><img src="img/LOGO.png"></a>
		</div>
		<div class="yt">
			<a href="https://www.youtube.com/channel/UCWKHac5bjhsUtSnMDFCT-7A" target="new"><i class="icon-youtube"></a></i>
		</div>
		<div class="fb">
			<a href="https://www.facebook.com/Rainbow6Poland" target="new"><i class="icon-facebook"></a></i>
		</div>
		<div class="tw">
			<a href="https://www.twitch.tv/rainbow6" target="new"><i class="icon-twitch"></a></i>
		</div>
	</div>
	<br><br><br><br>
	<div id="stopka2">
		<button id="przyciskogol1" onclick="zwieksz()">+</button>
		<button id="przyciskogol1" onclick="zmniejsz()">-</button>
		<button id="przyciskogol1" onclick="zmiencz()">Times New Roman/Arial</button><br><br>
		Autor strony: Waither &copy; Wszelkie prawa zastrzerzone.<br>
		<script src="js/informacja.js"></script>
		&copy; 2015 Ubisoft Entertainment. All Rights Reserved. Tom Clancy’s, Rainbow Six, The Soldier Icon, Ubisoft and the Ubisoft logo are registered or unregistered trademarks of Ubisoft Entertainment in the U.S. and/or other countries. The “PS” Family logo is a registered trademark and “PS4” is a trademark of Sony Computer Entertainment Inc. Software platform logo (TM and ©) EMA 2006.<br>
		<p id="data1"></p>
	</div>
</div>
</body>
</html>