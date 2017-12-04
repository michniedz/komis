<?php
	include('include/naglowek.php');
	
	if(isset($_SESSION['login']) && isset($_SESSION['id_pracownika'])){
		
		$id_auta = $_GET['id_auta'];
		$zapytanie = mysqli_query($polaczenie, 
		"SELECT `auta`.*, `dodatkowe_wyposazenia`.*
			FROM `dodatkowe_wyposazenia`, `auta` WHERE `auta`.`id_dodatkowego_wyposazenia`=`dodatkowe_wyposazenia`.`id_wyposazenia` and `auta`.`id_auta`=$id_auta");
		while($wynik = mysqli_fetch_array($zapytanie)){
			echo 'Model: '.$wynik['model'].'<br />';
			echo 'Rok produkcji: '.$wynik['rok_produkcji'].'<br />';
			echo 'Kolor: '.$wynik['kolor'].'<br />';
			echo 'Przebieg: '.$wynik['przebieg'].'<br />';
			echo 'Kraj pochodzenia: '.$wynik['kraj_pochodzenia'].'<br />';
			echo 'Rodzaj paliwa: '.$wynik['rodzaj_paliwa'].'<br />';
			echo 'Nadwozie: '.$wynik['nadwozie'].'<br />';
			echo 'Silnik: '.$wynik['silnik'].'<br />';
			echo 'Skrzynia biegów: '.$wynik['skrzynia_biegow'].'<br />';
			if($wynik['status'] == 1)
				echo 'Status: zarezerwowane<br />';
			else echo 'Status: wolne<br />';
			echo 'Cena: '.$wynik['cena'].'<br />';
			
			if($wynik['abs'] == 1)
				echo 'abs, ';
			if($wynik['klimatyzacja'] == 1)
				echo 'klimatyzacja, ';
			if($wynik['esp'] == 1)
				echo 'esp, ';
			if($wynik['wspomaganie_kierownicy'] == 1)
				echo 'wspomaganie kierownicy, ';
			if($wynik['elektryczne_szyby'] == 1)
				echo 'elektryczne szyby, ';
			if($wynik['centralny_zamek'] == 1)
				echo 'centralny zamek, ';
			if($wynik['radio'] == 1)
				echo 'radio, ';
			if($wynik['szyberdach'] == 1)
				echo 'szyberdach, ';
			if($wynik['czujnik_parkowania'] == 1)
				echo 'czujnik parkowania, ';
			if($wynik['czujnik_deszczu'] == 1)
				echo 'czujnik deszczu, ';
			if($wynik['czujnik_zmierzchu'] == 1)
				echo 'czujnik zmierzchu, ';
			if($wynik['podgrzewane_fotele'] == 1)
				echo 'podgrzewane fotele, ';
			if($wynik['elektryczne_lusterka'] == 1)
				echo 'elektryczne lusterka, ';
			if($wynik['gps'] == 1)
				echo 'gps, ';
			if($wynik['tempomat'] == 1)
				echo 'tempomat, ';
		
		}
	} else {
		header('Location: index.php');
	}
	
	include('include/stopka.php');
?>