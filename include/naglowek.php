<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>KOMIS SAMCHODOWY - KLASA IVi</title>
		<link href="css/style.css" rel="Stylesheet" type="text/css" />
	</head>
	<body>
	<?php
		session_start();
		$polaczenie = mysqli_connect('localhost', 'root', '','komis');
	?>
		<div class="baner">
			<a href="index.php"><img src="img/baner.jpg" /></a>
		</div>
		<div class="menu">
			<ul>
				<li><a href="logowanie.php">Logowanie</a></li>
				<li><a href="samochody.php">Lista samochodów</a></li>
				<li><a href="#">Link1</a></li>
				<li><a href="#">Link1</a></li>
				<li><a href="kontakt.php">Kontakt</a></li>
			</ul>
			
				<form action="szukaj.php" method="GET">
					<input class="szukaj" type="text" name="szukaj" placeholder="Szukaj.." />
				</form>
				<a href="wysz_zaawansowane.php" style="font-size:12pt">Wyszukiwanie zaawansowane</a>
			
		</div>
		<div class="zawartosc">