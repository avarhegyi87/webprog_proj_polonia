<?php
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['lastname']) && isset($_POST['firstname'])) {
	try {
		$dbh = new PDO('mysql:host=localhost;dbname=polonia_users', 'root', '',
					   array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
		);
		$dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

		$sqlSelect = "select id from users where username = :username";
		$sth = $dbh->prepare($sqlSelect);
		$sth->execute(array(':username' => $_POST['username']));
		if ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
			$message = "A felhasználó név már foglalt!";
			$again = true;
		} else {
			$sqlInsert = "insert into users(id, lastname, firstname, username, password)
						values(0, :lastname, :firstname, :username, :password)";
			$stmt = $dbh->prepare($sqlInsert);
			$stmt->execute(array(':lastname' => $_POST['lastname'], ':firstname' => $_POST['firstname'],
							   ':username' => $_POST['username'], ':password' => sha1($_POST['password'])));
			if ($count = $stmt->rowCount()) {
				$new_id = $dbh->lastInsertId();
				$message = "A regisztrációja sikeres.<br>Azonosítója: {$new_id}";
				$again = false;
			} else {
				$message = "A regisztráció nem sikerült.";
				$again = true;
			}
		}
	} catch (PDOException $e) {
		$message = "Hiba: " . $e->getMessage();
		$again = true;
	}
} else {
	header("Location: .");
}
?>