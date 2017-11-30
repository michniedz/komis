<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>KOMIS SAMCHODOWY - KLASA IVi</title>
		<link href="../css/style.css" rel="Stylesheet" type="text/css" />
	</head>
	<body>
	<?php
		session_start();
		$polaczenie = mysqli_connect('localhost', 'root', '','komis');
	?>
		<div class="baner">
			<a href="index.php"><img src="../img/baner.jpg" /></a>
		</div>
		<div class="menu">
			<ul>//pracownik<br />
				<li><a href="samochody.php">Lista samochodów</a></li>
				<li><a href="dodaj_samochod.php">Dodaj samochód</a></li>
				<li><a href="zarezerwowane.php">Lista zarezerwowanych</a></li>
				<li><a href="dodaj_marke.php">Dodaj markę auta</a></li>
				/////admin <br />
				<li><a href="pracownicy.php">Lista pracowników</a></li>
				<li><a href="lista_klientow.php">Lista klientów</a></li>
			</ul>
			
				<form action="szukaj.php" method="GET">
					<input class="szukaj" type="text" name="szukaj" placeholder="Szukaj.." />
				</form>
				<a href="wysz_zaawansowane.php" style="font-size:12pt">Wyszukiwanie zaawansowane</a>
			
		</div>
		<div class="zawartosc">