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
				<li><a href="mapy.php"> Mapy</a></li>
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
			<h1>Rozgrywka</h1>
		</div>
		<div id="tekst">
			<p><i><b>Tom Clancy’s Rainbow Six Siege</b></i> to pierwszoosobowa strzelanka taktyczna. W premierowej wersji gry można wcielić 
			się w członków pięciu jednostek antyterrorystycznych: <b>GIGN</b> (Francja), <b>GSG9</b> (Niemcy), 
			<b>SAS</b> (Wielka Brytania), <b>Specnaz</b> (Rosja), oraz <b>SWAT</b> (Stany Zjednoczone); w 
			aktualizacjach dla wszystkich ukazali się także operatorzy jednostek: <b>JTF2</b> (Kanada, Operation: Black Ice), 
			<b>Navy Seals</b> (Stany Zjednoczone, Operation: Dust Line), <b>BOPE</b> (Brazylia, Operation: Skull Rain), <b>SAT</b> (Japonia,
			Operation: Red Crow), <b>GEO</b> (Hiszpania, Operation: Velvet Shell), <b>SDU</b> (Chiny, Operiation: Blood Orchid), <b>707th</b>
			(Korea Południowa, Operation: White Noise), <b>GROM</b> (Polska, Operation: Blood Orchid; Operation: White Noise), <b>CBRN</b>
			(Rosja i Francja, Operation: Chimera), <b>GIS</b> (Włochy, Operation: Para Bellum), <b>MPS i US Army</b> (Wielka Brytania i USA,
			Operation: Grim Sky), <b>GIGR</b> (Maroko, Operation: Wind Bastion), <b>SASR</b> (Australia, Operation: Burnt Horizon), 
			<b>Secret Service i Jaeger Corps</b> (USA i Dania, Operation: Phantom Sight). 
			W podstawowej wersji gry do każdej jednostki należało czterech różnych operatorów. Nowe operacje dodawały kolejnych dwóch, lub 
			trzech operatorów, którzy posiadają unikalne umiejętności i ekwipunek. Operatorzy są podzieleni na dwie grupy: atakujących, czyli
			antyterrorystów i obrońców, czyli terrorystów. Aby odblokować operatora i dodatki do broni, gracz musi wydać punkty rozgłosu, 
			które otrzymuje w trakcie gry za przybliżanie drużyny do zwycięstwa i wykonywanie zadań, lub zakupić kredyty w sklepie Uplay. 
			Punkty rozgłosu umożliwiają graczowi także awans na wyższy poziom doświadczenia. Przy pomocy kredytów w grze można odblokować 
			skórki premium do broni (malowania broni), doładowania rozgłosu oraz odblokować operatorów.</p>
			<p>Gra ma tryby rozgrywki wieloosobowej polegające na rywalizacji dwóch drużyn złożonych z pięciu graczy oraz tryby kooperacji, 
			w której pięcioosobowa drużyna próbuje wygrać z postaciami sterowanymi przez sztuczną inteligencję. Do pierwszej grupy trybów 
			zaliczają się: odbicie zakładnika (drużyna obrońców przetrzymuje zakładnika, a atakujący próbują go odbić), bomba (jedna drużyna
			podłożyła dwie bomby na mapie, a druga musi je rozbroić) oraz zabezpieczenie terenu (atakujący muszą zająć wyznaczony teren, w 
			czym próbują im przeszkodzić obrońcy). Drużyna obrońców może wygrać, jeżeli zabije wszystkich atakujących, lub jeżeli upłynie 
			czas, który mieli na wykonanie akcji atakujący. Atakujący mogą wygrać, jeżeli zabiją wszystkich terrorystów, lub jeżeli wykonają
			przydzielone im zadanie.
			<p>Rozgrywka rozpoczyna się od przydzielenia jednej drużynie roli atakujących, a drugiej obrońców. 
			Następnie gracze wybierają operatorów, którymi zamierzają sterować w trakcie rundy. 
			Każdy z operatorów cechuje się poziomem opancerzenia, szybkości oraz innym ekwipunkiem.
			Operatorzy mogą mieć na wyposażeniu bronie takiej jak karabiny szturmowe, strzelby, pistolety maszynowe, 
			lekkie karabiny maszynowe, pistolety i tarcze balistyczne. Gracz może zamontować na broniach operatorów dodatki takie jak: 
			celowniki, tłumiki, kompensatory, przedłużenia lufy, uchwyty, czy lasery. Na początku rundy następuje faza rozpoznania terenu 
			po stronie atakujących, którzy sterując dronami próbują namierzyć cel akcji. W tym samym czasie obrońcy przygotowują się do 
			odparcia szturmu poprzez m.in. wzmocnienie ścian, barykadowanie drzwi i okien, niszczenie dronów przeciwnika oraz rozstawienie 
			pułapek i innego pomocnego osprzętu. Gracze po stronie defensywnej mogą mieć na wyposażeniu: barykady, panele wzmacniające 
			powierzchnie płaskie (t.j. ściany, czy podłogi), druty kolczaste, komórki nitro, pistolet reanimacyjny, płytki pancerne 
			zapewniające dodatkową odporność na obrażenia, detonowane ładunki gazowe, zakłócacz sygnału, który zapobiega zdalnym detonacjom, 
			przerywa łączność oraz uniemożliwia sterowanie dronami, panele pancerne, które służą do barykadowania drzwi i okien, detektor 
			pulsu, urządzenie podłączające pod napięcie metalowe elementy, system obrony reaktywnej, który unieszkodliwia wrzucone do 
			pomieszczenia przez przeciwników granaty, pułapki wybuchowe montowane w futrynach drzwi i framugach okien, rozkładany lekki 
			karabin maszynowy i jeszcze więcej. Ponadto na każdej mapie rozlokowane są kamery, do których podglądu dostęp ma 
			drużyna obrońców, jednak atakujący w trakcie rozgrywki mogą je zniszczyć. Gracze ofensywni mogą mieć ekwipunek taki jak: 
			granaty odłamkowe, błyskowe i dymne, ładunki wyważające, miny przeciwpiechotne, młot do wyważania, granaty elektromagnetyczne,
			które mogą zniszczyć urządzenia elektryczne, granatnik, ładunek wyważający, który umożliwia przebijanie się przez wzmocnione 
			powierzchnie, rozkładaną tarczę balistyczną, drony elektryczne, które mogą zniszczyć elektroniczne urządzenia, lub ranić 
			przeciwnika, tarczę taktyczną, która może oślepiać przeciwnika, wykrywacz elektroniki, aktywny celownik termowizyjny i jeszcze 
			więcej. Ponadto każdy z graczy atakujących ma na wyposażeniu drona, którego może używać do rozpoznania na początku rundy, o ile
			urządzenie nie zostało zniszczono przez wrogów. Postać gracza może przyjąć trzy pozycje: stojącą, kucającą i leżącą. W pozycji 
			stojącej gracz może biegać, jednakże podobnie jak niszczenie otoczenia, powoduje to hałas, który mogą usłyszeć przeciwnicy.
			Atakujący mają na wyposażeniu także linki do wspinania się i opuszczania z budynków. Każdy z graczy rozpoczyna rundę z 100 
			punktami życia. W grze nie zaimplementowano autoregeneracji zdrowia, a zabity gracz jest wykluczony z pola walki do końca rundy.
			W każdym trybie występuje bratobójczy ogień oraz istnieje możliwość podniesienia rannego towarzysza, który po reanimacji 
			powraca do gry z połową zdrowia. Duża cześć powierzchni w grze nie stanowi ochrony dla gracza, gdyż jest zniszczalna. Gracz ma 
			możliwość wychylania się zza osłon i celowania. Po zakończeniu rundy, role drużyn się odwracają. Rozgrywka toczy się do trzech 
			lub czterech zwycięstw, w zależności od rodzaju rozgrywki – swobodnej lub rankingowej. Gracz, którego postać zginie, nadal może 
			pomagać drużynie poprzez śledzenie obrazu z kamer i oznaczanie celów.
			<p>Wraz z trzecim dodatkiem pojawiła się aktualizacja wprowadzająca możliwość gry w trybie realistycznym. Usunięto w nim 
			informacje ułatwiające rozgrywkę poprzez wprowadzenie minimalistycznego interfejsu, likwidację możliwości oznaczania wrogów, 
			usunięcie potwierdzenia zabicia przeciwnika oraz zgodne z rzeczywistością zarządzaniem magazynkami i amunicją.
			<p>Do drugiej grupy trybów zaliczają się tryby kooperacji lub gry w trybie „samotnego wilka” występujące w grze pod wspólną 
			nazwą Terrohunt. W Terrohunt gracze mogą wybrać jeden z trzech poziomów trudności rozgrywki. Zadaniem graczy w zależności od 
			trybu jest: eliminacja wrogów, którzy z każdą rundą przybywają w większej liczbie; ochrona zakładnika, odbicie zakładnika, lub 
			rozbrojenie bomby.</p>
			<p>W grze obecne są pakiety Alfa, które gracze mogą zdobywać poprzez granie. Pakiety te mogą być otwierane i zawierają tylko 
			kosmetyczne skórki dla postaci oraz ekwipunku. Przedmioty z pakietów nie wprowadzają żadnej przewagi dla graczy.</p>
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