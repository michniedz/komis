<?php
	include('include/naglowek.php');
	
	if(isset($_SESSION['login']) && isset($_SESSION['id_pracownika'])){
?>		
		<form action="" method="get">
			<label>Nazwa marki<input type="text" name="nazwa_marki" /></label><br />
			<input type="submit" value="Dodaj" />
		</form>
<?php
		if (isset($_GET['nazwa_marki'])){
			$zapytanie = mysqli_query($polaczenie, 'INSERT INTO marki VALUES (null, "'.$_GET['nazwa_marki'].'")');
			if($zapytanie){
				echo 'Marka DODANA!';
			} else echo 'Błąd podczas dodawania do bazy danych!!!';
		}
	} else {
		header('Location: index.php');
	}
	
	include('include/stopka.php');
?>