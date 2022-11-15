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
					else {
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
			<h1>Mapy</h1>
		</div>
		<br><br><br>
		<div id="mapy">
			<div class="mapa">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/maps/bank"><img id="mapzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/6ilgtuzucX7hEu2MvjhRtp/0bb6e106d78625ea218a572fbb7a5157/r6-maps-bank.jpg"></a>
				<h3>Bank</h3>
			</div>
			<div class="mapa">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/maps/border"><img id="mapzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/4hqsrL3cokFqedkfjiEaGf/c73f6714b535263a18e4de2ca2405dd1/r6-maps-border__1_.jpg"></a>
				<h3>Granica</h3>
			</div>
			<div class="mapa">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/maps/chalet"><img id="mapzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/Km3ZJUM7ZMVbGsi6gad5Y/c48162371342d9f15386c77a3766315b/r6-maps-chalet.jpg"></a>
				<h3>Domek górski</h3>
			</div>
			<div class="mapa">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/maps/clubhouse"><img id="mapzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/1vCw5eD2XzxZlv6Au1gtui/baeebaa75cd672e0af8f9f624cf61bde/r6-maps-clubhouse.jpg"></a>
				<h3>Klub</h3>
			</div>
			<div class="mapa">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/maps/coastline"><img id="mapzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/5GfAQ3pXCJnDqiqaDH3Zic/db1722cd699bb864ee8f7b0db951b0c3/r6-maps-coastline.jpg"></a>
				<h3>Wybrzeże</h3>
			</div>
			<div class="mapa">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/maps/consulate"><img id="mapzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/6PR2sBla9E6TNurVUfJ0mc/860cab16eb1d4cd27ea356a1c3fe9591/r6-maps-consulate.jpg"></a>
				<h3>Konsulat</h3>
			</div>
			<div class="mapa">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/maps/favela"><img id="mapzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/5x991vPOlYbFlynxn9tmn8/96fac98b7b7f7ae54076e0bbcb4dcc42/r6-maps-favela__1_.jpg"></a>
				<h3>Fawela</h3>
			</div>
			<div class="mapa">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/maps/fortress"><img id="mapzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/1MrLwvq61aSSvvUj3dDiZg/18e267c79b8015a1af509a2e5694b18b/r6-maps-fortress.jpg"></a>
				<h3>Forteca</h3>
			</div>
			<div class="mapa">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/maps/hereford-base"><img id="mapzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/1QHhMYSliWgWXFLxZj19hz/44197c1d98498d8a77618076a19ce538/r6-maps-hereford.jpg"></a>
				<h3>Baza Hereford</h3>
			</div>
			<div class="mapa">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/maps/house"><img id="mapzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/28OaEZAY3stNFr0wSvW9MB/c7acc97d43486349763acab3c1564414/r6-maps-house.jpg"></a>
				<h3>Dom</h3>
			</div>
			<div class="mapa">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/maps/kafe-dostoyevsky"><img id="mapzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/2nIuPSHvbM57TK90VSwBEm/70144ada56cf1ba72103aeb4ece9ed1a/r6-maps-kafe.jpg"></a>
				<h3>Kafe Dostojewski</h3>
			</div>
			<div class="mapa">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/maps/kanal"><img id="mapzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/4VHR8uZRGkHqvtZxtmibtc/da988c2cab37f1cb186535fc9ba40bea/r6-maps-kanal.jpg"></a>
				<h3>Kanał</h3>
			</div>
			<div class="mapa">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/maps/oregon"><img id="mapzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/Z9a0gU7iR0vfcbXtoJUOW/42ad6aabbd189fbcd74c497627f1624e/r6-maps-oregon.jpg"></a>
				<h3>Oregon</h3>
			</div>
			<div class="mapa">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/maps/outback"><img id="mapzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/1vqGVW6pqBZlLKp4h86NnB/e40a67fd2d88aa6434d96e2e0f2965e3/r6-maps-outback.jpg"></a>
				<h3>Outback</h3>
			</div>
			<div class="mapa">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/maps/presidential-plane"><img id="mapzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/3YSN2V0HWsddcQq82Iqihn/d3e03012e8909be26f8274b7f9b3bf19/r6-maps-plane.jpg"></a>
				<h3>Samolot prezydencki</h3>
			</div>
			<div class="mapa">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/maps/skyscraper"><img id="mapzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/7vblsbhmSPLsI3pQJ5Dqx9/f213af09981f5c8ec9b71fb0c3f9dcdd/r6-maps-skyscraper.jpg"></a>
				<h3>Wieżowiec</h3>
			</div>
			<div class="mapa">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/maps/theme-park"><img id="mapzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/2immPCOZj6tTHMM9zeBg5B/cf09c9c75bc2e70dd38ebf0a12bdb9a2/r6-maps-themepark.jpg"></a>
				<h3>Park rozrywki</h3>
			</div>
			<div class="mapa">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/maps/tower"><img id="mapzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/6ZMBunxANmzTNr42wwzggb/3a19c506f9e3f910e34da21095686fa9/r6-maps-tower.jpg"></a>
				<h3>Wieża</h3>
			</div>
			<div class="mapa">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/maps/villa"><img id="mapzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/Io6dxNeHbCbJoF9WLJf9s/ebf89b009affba37df84dcf1934c74e0/r6-maps-villa.jpg"></a>
				<h3>Willa</h3>
			</div>
			<div class="mapa">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/maps/yacht"><img id="mapzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/smDP6lSSaB6Daa7bLZxHZ/d6cc60d76e553e91503a474ff0bc148b/r6-maps-yacht.jpg"></a>
				<h3>Jacht</h3>
			</div>
		</div>
	</div>
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
		Autor strony: Waither &copy; Wszelkie prawa zastrzerzone.<br>
		<script src="js/informacja.js"></script>
		&copy; 2015 Ubisoft Entertainment. All Rights Reserved. Tom Clancy’s, Rainbow Six, The Soldier Icon, Ubisoft and the Ubisoft logo are registered or unregistered trademarks of Ubisoft Entertainment in the U.S. and/or other countries. The “PS” Family logo is a registered trademark and “PS4” is a trademark of Sony Computer Entertainment Inc. Software platform logo (TM and ©) EMA 2006.<br>
		<p id="data1"></p>
	</div>
</div>
</body>
</html>