<html>
<head>
	<meta  charset="utf-8" />
	<title>Tom Clancy’s Rainbow Six Siege</title>
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<link rel="stylesheet" href="css/fontello.css" type="text/css"/>
    <link rel="stylesheet" href="css/stylelog.css" type="text/css"/>
	<link rel="icon" href="img/logo.ico" sizes="64x64" type="image/png">
	<script src="js/walidacja.js"></script>
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
    <div id="h1">
			<h1>ZALOGUJ SIĘ</h1>
		</div>
    <div id="formularz">
		Aby się zalogować podaj swój login i hasło.<br><br>
        <form name="formularz" method="POST" action="">
            Login: <input type="text" name="login"><br><br>
            Hasło: <input type="password" name="pass"><br>
			<?php
				$zm10 = 0;
				if (isset($_SESSION["logowanie"])) {
					header("location:index.php");
					exit();
				}
				elseif (isset($_POST["login"]) && isset($_POST["pass"])) {
					$plik0 = fopen("użytkownicy/konta.txt","r");
					$plik = file("użytkownicy/konta.txt");
					$dl = count($plik);
					for ($i=0;$i<$dl;$i++) {
						$tab = explode(";", $plik[$i]);
						if ($_POST["login"] == $tab[0] && md5($_POST["pass"]) == $tab[2]) {
							$zm10++;
							$_SESSION["logowanie"] = $_POST["login"];
							$_SESSION["mail"] = $tab[1];
							header("location:odlicz.php");
							exit();
						}
					}
					if ($zm10 == 0) {
						echo "<script type=\"text/javascript\">
						var zm = confirm(\"Nie znaleziono odpowiedniego konta w bazie danych. Jeśli uważasz, że byłeś zarejestrowany to prosimy się skontaktować z nami, wciskając OK lub wcisnąć anuluj i ponownie spróbować.\");
						if (zm == true) {
							window.open(\"mailto:mail@przyklad.com\");
						}
						</script>";
					}
					fclose($plik0);
				}
			?>
			<p id="niepr"></p>
            <input type="submit" value="Zaloguj" name="logowanie" onclick="return walidacjalog()"><br><br>
            <a href="rejestracja.php" class="rej">Nie posiadasz konta? Zarejestruj się</a><br>
        </form>
    </div>
</body>
</html>