<html>
<head>
	<meta  charset="utf-8" />
	<title>Tom Clancy’s Rainbow Six Siege</title>
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<link rel="stylesheet" href="css/fontello.css" type="text/css"/>
	<link rel="icon" href="img/logo.ico" sizes="64x64" type="image/png">
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
			<h1>Twój profil</h1>
            <div class='lewo'>
                    <img width="100%" src="img/profil.jpg">
            </div>
            <div class='prawo'>
            <p>Nazwa użytkownika: <?php echo $_SESSION["logowanie"]?></p>
			<?php
				$plik0 = fopen("użytkownicy/konta.txt","r");
				$plik = file("użytkownicy/konta.txt");
				$dl = count($plik);
				for ($i=0;$i<$dl;$i++) {
					$tab = explode(";", $plik[$i]);
					if ($_SESSION["logowanie"] == $tab[0]) {
						if ($tab[3]=="bezrangi") {
							echo '<p>Ranga: <em class="bezrangi">Brak rangi</em></p>';
						}
						elseif ($tab[3]=="Copper") {
							echo '<p>Ranga: <em class="Copper">Copper</em></p>';
						}
						elseif ($tab[3]=="Bronze") {
							echo '<p>Ranga: <em class="Bronze">Bronze</em></p>';
						}
						elseif ($tab[3]=="Silver") {
							echo '<p>Ranga: <em class="Silver">Silver</em></p>';
						}
						elseif ($tab[3]=="Gold") {
							echo '<p>Ranga: <em class="Gold">Gold</em></p>';
						}
						elseif ($tab[3]=="Platinium") {
							echo '<p>Ranga: <em class="Platinium">Platinium</em></p>';
						}
						elseif ($tab[3]=="Diamond") {
							echo '<p>Ranga: <em class="Diamond">Diamond</em></p>';
						}
						elseif ($tab[3]=="Champion") {
							echo '<p>Ranga: <em class="Champion">Champion</em></p>';
						}
					}
				}
				fclose($plik0);
				$plik1 = fopen("użytkownicy/konkurs.txt","r");
				$plik2 = file("użytkownicy/konkurs.txt");
				$dl = count($plik2);
				$zm10="0";
				for ($i=0;$i<$dl;$i++) {
					$tab = explode(";", $plik2[$i]);
					if ($_SESSION["mail"] == $tab[0]) {
						echo '<p>Udział w konkursie: <em class="tak">TAK</em></p>';
						$zm10="1";
					}
				}
				if ($zm10 != "1") {
					echo '<p>Udział w konkursie: <em class="nieem">NIE</em></p>';
				}
				fclose($plik1);
			?>
            </div>
            
		</div>
	</div>
</div>
</body>
</html>