<form action="slanje.php" method="post">
	<table>
		<tr>
			<td>Vase ime: </td>
			<td><input type="text" name="ime" size=30></td>
		</tr>
		<tr>
			<td>Vasa e-adresa: </td>
			<td><input type="text" name="email" size=30></td>
		</tr>
		<tr>
			<td>Vas pol: </td>
			<td><input type="radio" name="pol" value="m"> muski
				<input type="radio" name="pol" value="z"> zenski
			 </td>
		</tr>
		<tr>
			<td>Kako ste nas pronasli? </td>
			<td>
				<select name="referenca">
				<option value="search">masina za pretragu interneta</option>
				<option value="mediji">mediji</option>
				<option value="prijatelj">od prijatelja</option>
				<option selected value="drugo">drugo</option>
			</select>
			</td>
		</tr>	
		<tr>
			<td>Kontaktirajte me na e-mail</td>
			<td><input type="checkbox" name="kontaktiraj" value="y" checked></td>
		</tr>
		<tr>
			<td>Komentar</td>
			<td><textarea rows=4 cols=50 name="komentar">Vas komentar ovde</textarea></td>
		</tr>

	</table>
	<input type="submit" value="slanje podataka">
</form>