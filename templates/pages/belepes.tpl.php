<form action = "?page=belep" method = "post">
	<fieldset>
		<legend>Bejelentkezés</legend>
		<br>
		<input type="text" name="username" placeholder="felhasználónév" pattern="^[1-9a-zA-Z-_.]{3,}$" required><br><br>
		<input type="password" name="password" placeholder="jelszó" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d\w\W]{8,}$" required><br><br>
		<input type="submit" name="login" value="Belépés">
		<br>&nbsp;
	</fieldset>
</form>
<h3>Regisztrálja magát, ha még nem felhasználó!</h3>
<form action = "?page=regisztral" method = "post">
	<fieldset>
		<legend>Regisztráció</legend>
		<br>
		<input type="text" name="lastname" placeholder="vezetéknév" pattern="^[a-zA-Z]{2,}$" required><br><br>
		<input type="text" name="firstname" placeholder="utónév" pattern="^[a-zA-Z]{2,}$" required><br><br>
		<input type="text" name="username" placeholder="felhasználói név" pattern="^[1-9a-zA-Z-_.]{3,}$" required><br><br>
		<input type="password" name="password" placeholder="jelszó" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d\w\W]{8,}$" required><br><br>
		<input type="submit" name="register" value="Regisztráció">
		<br>&nbsp;
	</fieldset>
</form>