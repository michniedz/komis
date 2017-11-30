<?php
	include('include/naglowek.php');
?>
	<h1>Wszystkie auta w komisie</h1>
<?php
	$zapytanie = mysqli_query($polaczenie, 'SELECT m.nazwa_marki, a.model, a.rok_produkcji, a.silnik FROM auta a, marki m WHERE a.id_marki=m.id_marki');
	while($wynik = mysqli_fetch_row($zapytanie)){
		echo $wynik[0].' '.$wynik[1].' rok produkcji: '.$wynik[2].' pojemność silnika: '.$wynik[3];
	}
	include('include/stopka.php');
?>
