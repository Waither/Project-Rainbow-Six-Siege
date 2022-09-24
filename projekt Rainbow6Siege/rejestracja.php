<html>
<head>
	<meta  charset="utf-8" />
	<title>Tom Clancy’s Rainbow Six Siege</title>
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<link rel="stylesheet" href="css/fontello.css" type="text/css"/>
    <link rel="stylesheet" href="css/stylelog.css" type="text/css"/>
	<link rel="icon" href="img/logo.ico" sizes="64x64" type="image/png">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
				<li><a href="bron.php">Obrazenia broni</a></li>
				<li><a href="https://rainbow6.ubisoft.com/siege/pl-pl/home/" target="new">Ubisoft<img class="udos" src="img/odnośnik.png"></a></li>
				<?php
					session_start();
					if (isset($_SESSION["logowanie"])) {
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
	<img src="img/rainbowmain.png" width="100%">
	</header>
    <div id="h1">
			<h1>ZAREJESTRUJ SIĘ</h1>
		</div>
    <div id="formularz">
		<h2>Rejestracja</h2>
        <form method="POST" action="" name="form1">
            Login: <input type="text" name="login"><br><br>
            E-mail: <input type="email" name="mail"><br><br>
            Hasło: <input type="password" name="pass"><br><br>
			Ranga: 
			<select name="ranga" id="select">
				<option value="bezrangi">Bez rangi</option>
				<option value="Copper">Copper</option>
				<option value="Bronze">Bronze</option>
				<option value="Silver">Silver</option>
				<option value="Gold">Gold</option>
				<option value="Platinium">Platinium</option>
				<option value="Diamond">Diamond</option>
				<option value="Champion">Champion</option>
			</select><br><br>
			<?php
				if (isset($_POST["submit"]) && $_POST["submit"]=="Zarejestruj się") {
					if (isset($_POST["login"]) && isset($_POST["mail"]) && isset($_POST["pass"])) {
						$plik0 = fopen("użytkownicy/konta.txt","a");
						$plik = file("użytkownicy/konta.txt");
						$dl = count($plik);
						$zm1 = 0;
						for ($i=0;$i<$dl;$i++) {
							$tab = explode(";", $plik[$i]);
							if ($_POST["login"] == $tab[0] || $_POST["mail"] == $tab[1]) {
								echo "<script type=\"text/javascript\">
								alert(\"Login lub email jest już zarejestrowany. Prosimy użyć innego loginu lub maila, bądź się zalogować.\");
								</script>";
								$zm1=1;
								break;
							}
						}
						if ($zm1 != 1) {
							fwrite($plik0,$_POST["login"].";".$_POST["mail"].";".md5($_POST["pass"]).";".$_POST["ranga"].";\n");
							header("location:logowanie.php");
							exit();
						}
						fclose($plik0);
						}
					}
			?>
			<p id="niepr"></p>
            <input type="submit" value="Zarejestruj się" name="submit" onclick="return walidacjareg()"><br><br>
            <a href="logowanie.php" class="rej">Posiadasz konto? Zaloguj się</a><br>
        </form>
    </div>
</body>
</html>