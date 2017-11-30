<?php
	include('include/naglowek.php');
	
	if(isset($_POST['login']) && isset($_POST['haslo'])){
			
		$zapytanie = mysqli_query($polaczenie, 'SELECT * FROM pracownicy WHERE login="'.$_POST['login'].'" and haslo="'.$_POST['haslo'].'"');
		if($wynik = mysqli_fetch_array($zapytanie)){
			$_SESSION['login']=$_POST['login'];
			$_SESSION['id_pracownika']=$wynik['id_pracownika'];
			echo 'Jesteś zalogowany jako '.$wynik['imie'].' '.$wynik['nazwisko'];
		}
	}else{
?>
	<h1>Logowanie ADMINISTRATORA</h1>
	<form action="" method="POST">
		<label>Login <input class="logowanie" type="text" name="login" /></label><br />
		<label>Hasło <input class="logowanie" type="password" name="haslo" /></label><br />
		<input type="submit" value="Zaloguj" />
	</form>
<?php
	}
	include('include/stopka.php');
?>
