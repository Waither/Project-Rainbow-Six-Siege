<html>
<head>
	<meta  charset="utf-8" />
	<title>Tom Clancy’s Rainbow Six Siege</title>
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<link rel="stylesheet" href="css/fontello.css" type="text/css"/>
	<link rel="icon" href="img/logo.ico" sizes="64x64" type="image/png">
	<script src="js/funkcje.js"></script>
	<script src="js/operatorzy.js"></script>
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
			<h1>Operatorzy</h1>
		</div>
		<br><br><br><br>
		<div id="przyciskiop">
			<button id="przyciskop" onclick="atak()"><span id="svg"><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'><path fill='white' d='M8.32,19.16l-5.54,5.54H2V28h3.31v-0.79l5.54-5.54H8.32V19.16z M25.2,2L10.29,17.18L8.5,15.4l-0.94,0.94l1.87,1.87v2.36h2.36l1.87,1.87l0.94-0.94l-1.78-1.78L28,4.8V2H25.2z M21.68,19.16v2.52h-2.52l5.54,5.54V28H28v-3.31h-0.78L21.68,19.16z M14.6,11.98L4.8,2H2v2.8l9.98,9.8L14.6,11.98z M20.57,18.21l1.87-1.87L21.5,15.4l-1.78,1.78l-1.67-1.71l-2.56,2.56l1.7,1.67L15.4,21.5l0.94,0.94l1.87-1.87h2.36V18.21z'/></svg>Atakujacy</span></button>
			<button id="przyciskop" onclick="atobr()"><span id="svg">Wszyscy</span></button>
			<button id="przyciskop" onclick="obr()"><span id="svg"><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'><path fill='white' d='M19.27,9.74l-4.25,2.17L10.73,9.7L8.15,28h13.7L19.27,9.74z M21.23,7.01V2h-2.88v1.73h-1.96V2h-2.78v1.73h-1.96V2H8.77v4.96l6.25,3.51L21.23,7.01z'/></svg>Obrońcy</span></button>
		</div>
		<div id="operatorzy">
			<div class="operatorobr">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/thorn"> <img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/1pzBJsbL1vQT8is7B0Xjxz/440335c080e54ca28eba24858361a03a/r6s-operators-badge-thorn.png"></a>
				<h3>Thorn</h3>
			</div>
			<div class="operatorat">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/osa"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/5tt27EFHYjiDLo2qbYEgXG/2f1acbb8209e45b136ca7b0e2e5eb1f9/r6s-operators-badge-osa.png"></a>
				<h3>Osa</h3>
			</div>
			<div class="operatorobr">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/thunderbird"> <img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/YQfDJ42B2IKcKnb0lRaXq/0cedb53c439b0fe448be95713a836b29/r6s-operators-badge-thunderbird.png"></a>
				<h3>Thunderbird</h3>
			</div>
			<div class="operatorat">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/flores"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/75vqJXXKCM2EDO0iiNqRDe/d6289dc9a4fed72ef72b9c1e11738456/Y6S1_BADGE_Flores_L.png"></a>
				<h3>Flores</h3>
			</div>
			<div class="operatorobr">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/aruni"> <img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/5rOLCYQOh5HH0Nv6NHe38H/29681f901ff71ae5decb5ccb1b9f8a29/Y5S4_BADGE_Aruni_L.png"></a>
				<h3>Aruni</h3>
			</div>
			<div class="operatorat">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/zero"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/4ZbzOZt1Sur77RZTFwYVJ4/30037e84b2948449652547f06df146e0/Y5S3_BADGE_Zero_L.png"></a>
				<h3>Zero</h3>
			</div>
			<div class="operatorat">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/ace"> <img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/dgG7GmXY1HgfeEE2gI1H9/06bd3917c8fc19f61654490019ef25fb/Y5S2_BADGE_Ace_L.png"></a>
				<h3>Ace</h3>
			</div>
			<div class="operatorobr">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/melusi"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/74H52a9GMql8wamIy6WqH5/9fddba49258152835da7cdac8c566663/Y5S2_BADGE_Melusi_L.png"></a>
				<h3>Melusi</h3>
			</div>
			<div class="operatorobr">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/oryx"> <img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/7mLA8GY9ZKlUfDXrfo9Nek/e3dfd0759414f36866a8c80b61a67722/Y5S1_BADGE_Oryx_L.png"></a>
				<h3>Oryx</h3>
			</div>
			<div class="operatorat">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/iana"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/6deSi1vse5iJTkErFksrGq/75bf1038e9698b6b2be75aa0493b092d/Y5S1_BADGE_Iana_L.png"></a>
				<h3>Iana</h3>
			</div>
			<div class="operatorobr">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/wamai"> <img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/1vQZ4WsAjhc6M7qNOS4ahQ/92fc4d89632fb87aec0f102d7adbfe26/Y4S4_BADGE_Wamai_L.png"></a>
				<h3>Wamai</h3>
			</div>
			<div class="operatorat">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/kali"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/6r1hk1EunQirF1IcY4TG8T/0d3fbb7508a7747fd51249b1b8ea9779/Y4S4_BADGE_Kali_L.png"></a>
				<h3>Kali</h3>
			</div>
			<div class="operatorat">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/amaru"> <img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/2K1uxROLvHGxOIOMpNRFeU/7b4afc5ded3d1b9a937d1b504b5d4d0d/Y4S3_BADGE_Amaru_L.png"></a>
				<h3>Amaru</h3>
			</div>
			<div class="operatorobr">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/goyo"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/6AAY4FZt5piHdabOdDokE4/f7f8bd90c20b8a429c78a08684b75aca/Y4S3_BADGE_Goyo_L.png"></a>
				<h3>Goyo</h3>
			</div>
			<div class="operatorat">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/nokk"> <img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/2qfSHHTdCRVhx9EWycVDNr/9e361e73fb91e571f7470de21edf5c7a/Y4S2_BADGE_Nokk_L.png"></a>
				<h3>Nokk</h3>
			</div>
			<div class="operatorobr">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/warden"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/hx1Ljf1qIWbjpgCNmfJbu/2217283b569ef316dc12b93e86649f8f/Y4S2_BADGE_Warden_L.png"></a>
				<h3>Warden</h3>
			</div>
			<div class="operatorobr">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/mozzie"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/15hUu2PsypX2c1LIJFQNUT/8538c52057420dbf3995cf3117b155c5/Y4S1_BADGE_Mozzie_L.png"></a>
				<h3>Mozzie</h3>
			</div>
			<div class="operatorat">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/gridlock"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/5LIyheUROsdMDkX6o0zh6R/f201ce65af771459c374ef71c89827b4/Y4S1_BADGE_Gridlock_LL.png"></a>
				<h3>Gridlock</h3>
			</div>
			<div class="operatorat">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/nomad"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/UxfU1gJDoZGDrzT3iBsIp/b1aa522cc08e4631b9a857b52afa4f99/Y3S4_BADGE_Nomad_L.png"></a>
				<h3>Nomad</h3>
			</div>
			<div class="operatorobr">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/kaid"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/5Qblb1ZqAqkN3Wa0Qw5qBq/05630c80672105a1195282d276e8eb05/Y3S4_BADGE_L.png"></a>
				<h3>Kaid</h3>
			</div>
			<div class="operatorobr">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/clash"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/7G4lGl5HPLFTTUdcZW8UOK/3901b44cf2a9423486ffd78531e42f87/Y3S3_BADGE_Clash_L.png"></a>
				<h3>Clash</h3>
			</div>
			<div class="operatorat">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/maverick"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/3DXiYgVT71qGscYmFMgayj/d6c40a7dabdfecb92b637bec83003a58/Y3S3_BADGE_Maverick_L.png"></a>
				<h3>Maverick</h3>
			</div>
			<div class="operatorobr">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/maestro"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/XK43imgD0tc0xrk0tgTCQ/0402cc95cbd525debafa1aab0fdd8385/Y3S2_BADGE_Maestro_L.png"></a>
				<h3>Maestro</h3>
			</div>
			<div class="operatorobr">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/alibi"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/3DgGV3hETnXiEvVFOYZrbm/55a6be47761b5cf2c7ff8aaa7991cc7f/Y3S2_BADGE_Alibi_L.png"></a>
				<h3>Alibi</h3>
			</div>
			<div class="operatorat">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/lion"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/3gfdjXFezusaerCakMpfQ2/4565b28edd241b7fd3b0eba9c97d54f2/Y3S1_BADGE_Lion_L.png"></a>
				<h3>Lion</h3>
			</div>
			<div class="operatorat">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/finka"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/6CzQHWePD3Mi8HE5bdx5ic/2a6b5a6cc653ebf99d062725368eae2a/Y3S1_BADGE_Finka_L.png"></a>
				<h3>Finka</h3>
			</div>
			<div class="operatorobr">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/vigil"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/56A3hXhWZdwO623g3ejeku/a40a0582a7841abfeed723d8fbe238d3/Y2S4_BADGE_Vigil_L.png"></a>
				<h3>Vigil</h3>
			</div>
			<div class="operatorat">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/dokkaebi"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/aoQeHLohcuqvubBoyrzsM/d4a230ecba495c58c5521e10d5d84baa/Y2S4_BADGE_Dokkaebi_L.png"></a>
				<h3>Dokkebi</h3>
			</div>
			<div class="operatorat">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/zofia"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/1k09nbCCu2avlIWpK3cJz9/35d60746d67750230f2a020a7be78795/Y2S3_BADGE_Zofia_L.png"></a>
				<h3>Zofia</h3>
			</div>
			<div class="operatorobr">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/ela"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/7zbkJJWMCOj04DNhYDz994/d2cba213d30d7b8cf2ba8cd568c78f20/Y2S3_BADGE_Ela_L.png"></a>
				<h3>Ela</h3>
			</div>
			<div class="operatorat">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/ying"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/6ZVB1OJxNgs0pR0Fd7Kzt0/74721fe9fd743167508f98dc280a17a3/Y2S2_BADGE_Ying_L.png"></a>
				<h3>Ying</h3>
			</div>
			<div class="operatorobr">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/lesion"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/2CWYSySnPAhsOHdq2OLSjv/f9e54debcfa0c8fe76012d9097b98e6e/Y2S2_BADGE_Lesion_L.png"></a>
				<h3>Lesion</h3>
			</div>
			<div class="operatorobr">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/mira"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/u1KR6aogjLncAtaVOciTc/ba730583f9c20cad6d3ca996d366a707/Y2S1_BADGE_Mira_L.png"></a>
				<h3>Mira</h3>
			</div>
			<div class="operatorat">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/jackal"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/28k7LKWK70lxib7CimPJaZ/f34b2065811df8f0339838922f8c94b1/Y2S1_BADGE_Jackal_L.png"></a>
				<h3>Jackal</h3>
			</div>
			<div class="operatorat">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/hibana"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/1TSA4pMR58vgfrEai69REl/f82b1eba6694b4aa77259d3d0fe8cc08/Y1S4_BADGE_Hibana_L.png"></a>
				<h3>Hibana</h3>
			</div>
			<div class="operatorobr">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/echo"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/3MRqAdUybJ7GR9gX4wPAI4/992938a70a4e53b91478358634e77ca7/Y1S4_BADGE_Echo_L.png"></a>
				<h3>Echo</h3>
			</div>
			<div class="operatorobr">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/caveira"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/4H1dOkcdZIKblKkAWjD390/10e57f4829eabda30f4aa1044e49893d/Y1S3_BADGE_Caveira_L.png"></a>
				<h3>Caveira</h3>
			</div>
			<div class="operatorat">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/capitao"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/73R4IrWJyn0xdkJ0fjOODA/fc70d200a7530dccae2847ab7962e394/Y1S3_BADGE_Capitao_L.png"></a>
				<h3>Capitão</h3>
			</div>
			<div class="operatorat">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/blackbeard"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/4BTbmcs1EtoUbnpk5Am22Y/b7bd4d0708245c78b98455505c0d51a8/Y1S2_BADGE_Blackbeard_L.png"></a>
				<h3>Blackbeard</h3>
			</div>
			<div class="operatorobr">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/valkyrie"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/44qXJmZmAwaD4w44JnPuOx/c54c8b9d3a6813ab8ce3e3f1dd4ef408/Y1S2_BADGE_Valkyrie_L.png"></a>
				<h3>Valkyrie</h3>
			</div>
			<div class="operatorat">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/buck"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/2oZZBEZzVLFpRY7Mp85MWq/f62287872dd61b4e0697a93d703b2beb/Y1S1_BADGE_Buck_L.png"></a>
				<h3>Buck</h3>
			</div>
			<div class="operatorobr">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/frost"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/1OWFtfiEXleLSENciCSQQR/8fcced59c0125073e506f2dee0201015/Y1S1_BADGE_Frost_L.png"></a>
				<h3>Frost</h3>
			</div>
			<div class="operatorobr">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/mute"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/3exeHnxH1tmUmQTequWRKa/e1b6c6f057eb24722dd7860af0276316/Y0R6_BADGE_Mute_L.png"></a>
				<h3>Mute</h3>
			</div>
			<div class="operatorat">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/sledge"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/4lgK1mOTVAoBhoj5qjYuyd/83c83d56e977f96ac0e9621c0d1c07d2/Y0R6_BADGE_Sledge_L.png"></a>
				<h3>Sledge</h3>
			</div>
			<div class="operatorobr">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/smoke"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/6mOMxoc3t27R9Gr9wFtt6T/f5f90a6be6a6710bee686ce69df29906/Y0R6_BADGE_Smoke_L.png"></a>
				<h3>Smoke</h3>
			</div>
			<div class="operatorat">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/thatcher"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/5NbqTdEPmYy9qOZmN9StVT/f75b0f2610a37f9e5bdcb8ba9d551a38/Y0R6_BADGE_Thatcher_L.png"></a>
				<h3>Thatcher</h3>
			</div>
			<div class="operatorat">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/ash"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/58Y4Q2x7msL8uQUoiA7LGM/b204acc9c5a015029140723ef2e435bb/Y0R6_BADGE_Ash_L.png"></a>
				<h3>Ash</h3>
			</div>
			<div class="operatorobr">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/castle"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/kzznLctjOsXJZAg0F2HPB/dea28fa008515d6ddaa0d2659f4dc253/Y0R6_BADGE_Castle_L.png"></a>
				<h3>Castle</h3>
			</div>
			<div class="operatorobr">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/pulse"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/ChAeJzdmwxuvhZTrV81rK/8c16116f4c719a3df864df6639e2f52e/Y0R6_BADGE_Pulse_L.png"></a>
				<h3>Pulse</h3>
			</div>
			<div class="operatorat">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/thermite"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/6tow5mqLao5TrJVL52csSc/46aa934c9f3f02189e9c04df0114a081/Y0R6_BADGE_Thermite_L.png"></a>
				<h3>Thermite</h3>
			</div>
			<div class="operatorat">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/montagne"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/7qWONT0mrNYtUZVTVVT8Yj/e0da552d6bb6548ddf74cf4cc44d75c5/Y0R6_BADGE_Montagne_L.png"></a>
				<h3>Montagne</h3>
			</div>
			<div class="operatorat">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/twitch"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/3YgCpOSM2R4SDgExstxm7P/ff84e6ac53bd9f690deee78870f9c23b/Y0R6_BADGE_Twitch_L.png"></a>
				<h3>Twitch</h3>
			</div>
			<div class="operatorobr">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/doc"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/71Nl3v0LqHyo9eXV6xTFQd/1ba4f057b6acad3ec700ca9e60b53d6c/Y0R6_BADGE_Doc_L.png"></a>
				<h3>Doc</h3>
			</div>
			<div class="operatorobr">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/rook"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/3Yk1noMd9re0RLlrXJSWtR/7a55e80593c487827293a114835dba63/Y0R6_BADGE_Rook_L.png"></a>
				<h3>Rook</h3>
			</div>
			<div class="operatorobr">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/jager"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/1cCvTmKwnnovVmpZmDyPkA/b064f5ad6b9e7398d820d9ea90ff9366/Y0R6_BADGE_Jager_L.png"></a>
				<h3>Jäger</h3>
			</div>
			<div class="operatorobr">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/bandit"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/4Vasjq82J1TNjNE38J7LmV/e1725f8d9ea2b85565e40b54faac85b8/Y0R6_BADGE_Bandit_L.png"></a>
				<h3>Bandit</h3>
			</div>
			<div class="operatorat">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/blitz"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/2YTGfm1Df9PtldLcGodcTV/9a235b550cdf5066d686cef750eba090/Y0R6_BADGE_Blitz_L.png"></a>
				<h3>Blitz</h3>
			</div>
			<div class="operatorat">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/iq"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/4xnVj2iZB8Otchiw7j69UO/13c864a4e2eb976c1978dc79411b450c/Y0R6_BADGE_IQ_L.png"></a>
				<h3>IQ</h3>
			</div>
			<div class="operatorat">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/fuze"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/1wkdQ0viuTEguji14qXMJG/5858418baa8cca04a6e42a2d6256c093/Y0R6_BADGE_Fuze_L.png"></a>
				<h3>Fuze</h3>
			</div>
			<div class="operatorat">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/glaz"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/5UAZVgyOutPh6bLTV3fGXf/c59d484fd599d09a947ec423b2119620/Y0R6_BADGE_Glaz_L.png"></a>
				<h3>Glaz</h3>
			</div>
			<div class="operatorobr">
				<a href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/tachanka"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/7hpI2mcmvyjC2vG6ieltLo/f217b1dc449c0514b55e471193a38c91/Y0R6_BADGE_Tachanka_L.png"></a>
				<h3>Tachanka</h3>
			</div>
			<div class="operatorobr">
				<a  href="https://www.ubisoft.com/pl-pl/game/rainbow-six/siege/game-info/operators/kapkan"><img id="opzdj" src="https://staticctf.akamaized.net/J3yJr34U2pZ2Ieem48Dwy9uqj5PNUQTn/797q7C5YA89eFqw4RB40ka/f9435d1b4d13d41472e22d305c961cb9/Y0R6_BADGE_Kapkan_L.png"></a>
				<h3>Kapkan</h3>
			</div>
		</div>
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
		Autor strony: Waither &copy; Wszelkie prawa zastrzerzone.<br>
		<script src="js/informacja.js"></script>
		&copy; 2015 Ubisoft Entertainment. All Rights Reserved. Tom Clancy’s, Rainbow Six, The Soldier Icon, Ubisoft and the Ubisoft logo are registered or unregistered trademarks of Ubisoft Entertainment in the U.S. and/or other countries. The “PS” Family logo is a registered trademark and “PS4” is a trademark of Sony Computer Entertainment Inc. Software platform logo (TM and ©) EMA 2006.<br>
		<p id="data1"></p>
	</div>
</div>
</body>
</html>