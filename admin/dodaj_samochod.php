<?php
	include('include/naglowek.php');
	
	if(isset($_SESSION['login']) && isset($_SESSION['id_pracownika'])){
?>		
		<form action="dod_auto.php" method="get">
			<label>Marka
				<select name="id_marki">
					<?php
						$zap = mysqli_query($polaczenie, 'SELECT * FROM marki');
						while($wynik = mysqli_fetch_row($zap)){
							echo '<option value='.$wynik[0].'>'.
								  $wynik[1].'</option>';
						}							
					?>
				</select><br />
			</label>
			<label>Model<input type="text" name="model" /></label><br />
			<label>Rok produkcji<input type="number" min="1900" name="rok_produkcji" /></label><br />
			<label>Kolor<input type="text" name="kolor" /></label><br />
			<label>Przebieg<input type="number" name="przebieg" /></label><br />
			<label>Kraj pochodzenia<input type="text" name="kraj_pochodzenia" /></label><br />
			<label>Rodzaj paliwa
				<select name="rodzaj_paliwa">
					<option value="benzyna">benzyna</option>
					<option value="diesel">diesel</option>
					<option value="benzyna_gaz">benzyna/gaz</option>
					<option value="elektryczny">elektryczny</option>
				</select><br /></label>	
			<label>Nadwozie
				<select name="nadwozie">
					<option value="Limuzyna">Limuzyna</option>
					<option value="Sedan">Sedan</option>
					<option value="Kombi">Kombi</option>
					<option value="Minivan">Minivan</option>
					<option value="SUV">SUV</option>
					<option value="Kabriolet">Kabriolet</option>
					<option value="Coupe">Coupe</option>
				</select><br /></label>	
			<label>Silnik<input type="number" name="silnik" /></label><br />
			<label>Skrzynia biegów
				<select name="skrzynia_biegow">
					<option value="manualna">manualna</option>
					<option value="automatyczna">automatyczna</option>
				</select><br /></label>	
			<input type="hidden" name="status" value="0" />
			<label>Cena<input type="number" name="cena" /></label><br />	
			<fieldset>
				<legend>Wyposażenie dodatkowe</legend>
				<label>ABS<input type="checkbox" name="abs" /></label>
				<label>Klimatyzacja<input type="checkbox" name="klimatyzacja" /></label>
				<label>ESP<input type="checkbox" name="esp" /></label>
				<label>Wspomaganie kierownicy<input type="checkbox" name="wspomaganie_kierownicy" /></label><br />
				<label>Elektryczne szyby<input type="checkbox" name="elektryczne_szyby" /></label>
				<label>Centralny zamek<input type="checkbox" name="centralny_zamek" /></label>
				<label>Radio<input type="checkbox" name="radio" /></label>
				<label>Szyberdach<input type="checkbox" name="szyberdach" /></label><br />
				<label>Czujnik parkowania<input type="checkbox" name="czujnik_parkowania" /></label>
				<label>Czujnik deszczu<input type="checkbox" name="czujnik_deszczu" /></label>
				<label>Czujnik zmierzchu<input type="checkbox" name="czujnik_zmierzchu" /></label>
				<label>Podgrzewane fotele<input type="checkbox" name="podgrzewane_fotele" /></label><br />
				<label>Elektryczne lusterka<input type="checkbox" name="elektryczne_lusterka" /></label>
				<label>GPS<input type="checkbox" name="gps" /></label>
				<label>Tempomat<input type="checkbox" name="tempomat" /></label>
				<input type="submit" value="Dodaj" />
			</fieldset>
			
		</form>
<?php
		
	} else {
		header('Location: index.php');
	}
	
	include('include/stopka.php');
?>