<?php
	include('include/naglowek.php');
	
	if(isset($_SESSION['login']) && isset($_SESSION['id_pracownika'])){
		
		$id_marki = $_GET['id_marki'];
		$model = $_GET['model'];
		$rok_produkcji = $_GET['rok_produkcji'];
		$kolor  = $_GET['kolor'];
		$przebieg  = $_GET['przebieg'];
		$kraj_pochodzenia  = $_GET['kraj_pochodzenia'];
		$rodzaj_paliwa  = $_GET['rodzaj_paliwa'];
		$nadwozie  = $_GET['nadwozie'];
		$rodzaj_paliwa = $_GET['rodzaj_paliwa'];
		$silnik  = $_GET['silnik'];
		$skrzynia_biegow  = $_GET['skrzynia_biegow'];
		$status = $_GET['status'];
		$cena = $_GET['cena'];
		$zap_ile = mysqli_query($polaczenie, 'Select * from auta');
		$ilosc = mysqli_num_rows($zap_ile);
		$data =  date('m/d/Y');
		$zapytanie = mysqli_query($polaczenie, 
		'INSERT INTO auta VALUES(null, '.$id_marki.', "'.$model.'", '.$rok_produkcji.', "'.$kolor.'", '.$przebieg.', "'.$kraj_pochodzenia.'", "'.$rodzaj_paliwa.'", "'.$nadwozie.'", '.$silnik.', "'.$skrzynia_biegow.'", '.$status.', '.$cena.', '.($ilosc+1).', now())');
		if($zapytanie)
			echo 'Dodane autoo';
		else 
			echo 'Błąd 1';
		if(isset($_GET['abs']))
			$abs = 1;
		else
			$abs = 0;
		if(isset($_GET['klimatyzacja']))
			$klimatyzacja  = 1;
		else
			$klimatyzacja = 0;
		if(isset($_GET['esp']))
			$esp = 1;
		else
			$esp = 0;
		if(isset($_GET['wspomaganie_kierownicy']))
			$wspomaganie_kierownicy = 1;
		else
			$wspomaganie_kierownicy = 0;
		if(isset($_GET['elektryczne_szyby']))
			$elektryczne_szyby = 1;
		else
			$elektryczne_szyby = 0;
		if(isset($_GET['centralny_zamek']))
			$centralny_zamek = 1;
		else
			$centralny_zamek = 0;
		if(isset($_GET['radio']))
			$radio = 1;
		else
			$radio = 0;
		if(isset($_GET['szyberdach']))
			$szyberdach  = 1;
		else
			$szyberdach = 0;
		if(isset($_GET['czujnik_parkowania']))
			$czujnik_parkowania = 1;
		else
			$czujnik_parkowania = 0;
		if(isset($_GET['czujnik_deszczu']))
			$czujnik_deszczu = 1;
		else
			$czujnik_deszczu = 0;
		if(isset($_GET['czujnik_zmierzchu']))
			$czujnik_zmierzchu = 1;
		else
			$czujnik_zmierzchu = 0;
		if(isset($_GET['podgrzewane_fotele']))
			$podgrzewane_fotele = 1;
		else
			$podgrzewane_fotele = 0;
		if(isset($_GET['elektryczne_lusterka']))
			$elektryczne_lusterka = 1;
		else
			$elektryczne_lusterka = 0;
		if(isset($_GET['gps']))
			$gps = 1;
		else
			$gps = 0;
		if(isset($_GET['tempomat']))
			$tempomat = 1;
		else
			$tempomat = 0;
		
		$zapytanie2 = mysqli_query($polaczenie,'INSERT INTO dodatkowe_wyposazenia VALUES('.($ilosc+1).', '.$abs.', '.$klimatyzacja.', '.$esp.', '.$wspomaganie_kierownicy.', '.$elektryczne_szyby.', '.$centralny_zamek.', '.$radio.', '.$szyberdach.', '.$czujnik_parkowania.', '.$czujnik_deszczu.', '.$czujnik_zmierzchu.', '.$podgrzewane_fotele.', '.$elektryczne_lusterka.', '.$gps.','.$tempomat.')');
		if($zapytanie2)
			echo 'Dodane wyposazenie';
		else 
			echo 'Błąd 2';
	} else {
		header('Location: index.php');
	}
	
	include('include/stopka.php');
?>