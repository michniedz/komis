<?php
	include('include/naglowek.php');
	
	if(isset($_SESSION['login']) && isset($_SESSION['id_pracownika'])){

		$id_auta=$_GET['id_auta'];
		$zapytanie = mysqli_query($polaczenie, "delete from auta where id_auta=$id_auta");
		$zapytanie2 = mysqli_query($polaczenie, "delete from dodatkowe_wyposazenia where id_wyposazenia=$id_auta");
		if($zapytanie && $zapytanie2){
			echo 'Auto usunięte';
		} else echo 'Błąd podczas usuwania z bazy danych!!!';
		
	} else {
		header('Location: index.php');
	}
	
	include('include/stopka.php');
?>