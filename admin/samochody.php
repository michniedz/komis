<?php
	include('include/naglowek.php');
	
	if(isset($_SESSION['login']) && isset($_SESSION['id_pracownika'])){
		$zapytanie = mysqli_query($polaczenie, 
		'SELECT a.id_auta, m.nazwa_marki, a.model, a.rok_produkcji, a.status, a.data_dodania 
		FROM auta a, marki m 
		WHERE a.id_marki=m.id_marki');
		echo '<table border="1">
				 <tr>
					<th>Lp</th>
					<th>Marka</th>
					<th>Model</th>
					<th>Rok produkcji</th>
					<th>Status</th>
					<th>Data dodania</th>
					<th>Operacje</th>
				 </tr>';
		while($wynik = mysqli_fetch_array($zapytanie)){
			echo '<tr>
					<td>'.$wynik['id_auta'].'</td>
					<td>'.$wynik['nazwa_marki'].'</td>
					<td>'.$wynik['model'].'</td>
					<td>'.$wynik['rok_produkcji'].'</td>
					<td>'.$wynik['status'].'</td>
					<td>'.$wynik['data_dodania'].'</td>
					<td>operacje</td>
				  </tr>';
		}
		echo '</table>';
	} else {
		header('Location: index.php');
	}
	
	include('include/stopka.php');
?>