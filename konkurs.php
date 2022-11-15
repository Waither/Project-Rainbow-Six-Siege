<html>
<head>
	<meta  charset="utf-8" />
	<title>Tom Clancy’s Rainbow Six Siege</title>
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<link rel="stylesheet" href="css/fontello.css" type="text/css"/>
	<link rel="icon" href="img/logo.ico" sizes="64x64" type="image/png">
	<link rel="stylesheet" href="css/stylelog.css" type="text/css"/>
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
					if (!isset($_SESSION["logowanie"])) {
						header("location:index.php");
						exit();
					}
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
			<h1>!!! KONKURS !!!</h1>
		</div>
		<div id="tekst">
            <ul style="list-style-type: lower-greek;">Ogłaszamy konkurs, w którym każdy, kto ukończył 18 lat, może wziąźć udział. Do wygrania są:
                <li>10 gier Tom Clancy’s Rainbow Six Siege w formie klucza na platformę Uplay</li>
                <li>5 oficjalnych zestawów przypinek z logami operatorów</li>
                <li>koszulki i kubki z grafikami inspirowanymi grą</li>
            </ul>
            Jedyne co trzeba zrobić to wypełnić poniższy formularz. Wynik jak i sposób przekazania nagród zwycięzcom zostanie podany na początku następnego miesiąca.
            <br><br>
			<form method="POST" action="">
				<?php
					echo 'Podaj swój email: <input type="email" id="email" name="email" value="'.$_SESSION["mail"].'" readonly><br><br>';
				?>
                Którą ze stron najbardziej preferujesz?<br>
                <input type="radio" id="atak" name="strona" value="atak">Strona atakująca<br>
                <input type="radio" id="def" name="strona" value="def">Strona broniąca<br><br>
                Na której mapie gra ci się najlepiej? 
				<select name="mapa">
                    <option value="Bank">Bank</option>
                    <option value="Uniwersytet">Uniwersytet Bartlett</option>
                    <option value="Granica">Granica</option>
                    <option value="Domek">Domek górski</option>
                    <option value="Klub">Klub</option>
                    <option value="Wybrzeże">Wybrzeże</option>
                    <option value="Konsulat">Konsulat</option>
                    <option value="Fawele">Fawele</option>
                    <option value="Forteca">Forteca</option>
                    <option value="Baza">Baza Hereford</option>
                    <option value="Kafe">Kafe Dostojewski</option>
                    <option value="Kanał">Kanał</option>
                    <option value="Oregon">Oregon</option>
                    <option value="Outback">Outback</option>
                    <option value="Samolot">Samolot prezydencki</option>
                    <option value="Wieżowiec">Wieżowiec</option>
                    <option value="Park">Park rozrywki</option>
                    <option value="Wieża">Wieża</option>
                    <option value="Willa">Willa</option>
                    <option value="Jacht">Jacht</option>
                </select><br><br>
				Czy masz ukończone 18 lat? <input type="checkbox" id="18lat" name="18lat"><br><br>
				<?php
					if (isset($_POST["submit"]) && $_POST["submit"]=="Prześlij") {
						if (isset($_POST["18lat"])) {
							if (isset($_POST["strona"]) && isset($_POST["mapa"])) {
								$plik0 = fopen("użytkownicy/konkurs.txt","a");
								$plik = file("użytkownicy/konkurs.txt");
								$dl = count($plik);
								$zm1 = 0;
								for ($i=0;$i<$dl;$i++) {
									$tab = explode(";", $plik[$i]);
									if ($tab[0] == $_SESSION["mail"]) {
										echo '<p class="niepr">Już zapisałeś się do konkursu</p>';
										$zm1=1;
										break;
									}
								}
								if ($zm1 != 1) {
									fwrite($plik0,$_POST["email"].";".$_POST["strona"].";".$_POST["mapa"].";\n");
								}
								fclose($plik0);
							}
							else {
								echo '<p class="niepr">Musisz zaznaczyć wszystkie pola.</p>';
							}
						}
						else {
							echo '<p class="niepr">Musisz zaznaczyć, że masz ukończone 18 lat.</p>';
						}
					}
				?>
                
                <input type="submit" name="submit" value="Prześlij">
			</form>
			<div>
				<i>Konkurs jest sponsorowany przez polski oddział firmy Ubisoft z siedzibą w Warszawie ul. Domaniewska 39A</i><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d611.5804928444447!2d21.003699859406282!3d52.18301999844076!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47193398d16b0e01%3A0xc2d41620d63c7e4a!2sHorizon%20Plaza!5e0!3m2!1spl!2spl!4v1603048162169!5m2!1spl!2spl" width="70%" height="60%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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