<html>
<head>
	<meta  charset="utf-8" />
	<title>Tom Clancy’s Rainbow Six Siege</title>
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<link rel="stylesheet" href="css/fontello.css" type="text/css"/>
	<link rel="icon" href="img/logo.ico" sizes="64x64" type="image/png">
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
					elseif (!isset($_SESSION["logowanie"])) {
						echo '<li><a href="logowanie.php">ZALOGUJ SIĘ</a></li>';
					}
				?>
			</ul>
		</nav>
	<header>
	<img src="img/rainbowmain.png" align="middle" width="100%">
	</header>
	<div id="tresc">
		<div id="h1">
			<h1>Ta strona jest o grze Tom Clancy's Rainbow Six Siege.</h1>
		</div>
		<div id="tekst">
			<i><b>Tom Clancy’s Rainbow Six Siege</b></i> – strzelanka pierwszoosobowa taktyczna skupiająca się na walkach pomiędzy atakującymi a obrońcami. Gra nawiązuje do technothrillera Tęcza Sześć (ang. Rainbow Six) Toma Clancy’ego. Za jej produkcję odpowiadało kanadyjskie studio Ubisoft Montréal, a przy tworzeniu darmowych dodatków i aktualizacji pomagało niemieckie studio Ubisoft Blue Byte. Grę wydała firma Ubisoft, a jej premiera odbyła się 1 grudnia 2015 roku na platformy Microsoft Windows, PlayStation 4 i Xbox One.
			Pracę nad grą rozpoczęto tuż po skasowaniu produkcji gry Rainbow 6: Patriots, która była przeznaczona na konsole siódmej generacji. Gra powstała na silniku AnvilNext i wykorzystuje technologię Realblast Destruction, która umożliwia tworzenie podatnego na zniszczenia środowiska. Produkcja nastawiona jest na rozgrywki wieloosobowe i podejmuje tematykę starć operatorów jednostek specjalnych z różnych części świata.
			Gra została dobrze przyjęta przez recenzentów i graczy uzyskując średnią ocen na stronach Metacritic oraz GameRankings wahającą się w zależności od platformy pomiędzy 72/100 a 79/100. Recenzenci chwalili grę za realizm rozgrywki, duże możliwości destrukcji otoczenia, dobrze zaprojektowane mapy do rozgrywki wieloosobowej, oprawę dźwiękową oraz nacisk na komunikację i współpracę graczy przy wykonywaniu zadań. Krytykowali natomiast za przeciętna grafikę, problemy z działaniem serwerów w pierwszych dniach po premierze oraz brak kampanii dla pojedynczego gracza. Po premierze gra otrzymała dziewięć dodatków zwanych operacjami, które zapewniły nowych operatorów (postaci grywalnych) i mapy. Kolejne dodatki są w produkcji.
		</div>
	</div>
	<div id="stopka1">
		<div class="LOGO">
			<a href="index.php"><img src="img/LOGO.png"></a>
		</div>
		<div class="yt">
			<a href="https://www.youtube.com/channel/UCWKHac5bjhsUtSnMDFCT-7A" target="new"><i class="icon-youtube"></i></a>
		</div>
		<div class="fb">
			<a href="https://www.facebook.com/Rainbow6Poland" target="new"><i class="icon-facebook"></i></a>
		</div>
		<div class="tw">
			<a href="https://www.twitch.tv/rainbow6" target="new"><i class="icon-twitch"></i></a>
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