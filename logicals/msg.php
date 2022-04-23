<?php
if (isset($_POST['nev']) && isset($_POST['email']) && isset($_POST['szoveg'])) {
	try {
		$dbh = new PDO('mysql:host=localhost;dbname=polonia_users', 'root', '',
					   array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
		);
		$dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        
        $sqlInsert = "insert into msgs(username, real_name, email, msg_text)
						values(:username, :real_name, :email, :text)";
		$stmt = $dbh->prepare($sqlInsert);
		$stmt->execute(array(':username' =>  $_POST['nev'], 
							':real_name' => isset($_SESSION['login']) ? $_SESSION['login'] : 'Vendég',
							':email' => $_POST['email'],
							':text' => $_POST['szoveg']));
		if ($count = $stmt->rowCount()) {
			$message = "Üzenetét elmentettük adatbázisunkban.";
			$success = true;
		} else {
			$message = "Üzenetét nem sikerült elmentetnünk az adatbázisunkban";
			$success = false;
		}  
	} catch (PDOException $e) {
		$message = "Hiba az üzenet adatbázisba mentésekor: " . $e->getMessage();
		$again = true;
	}
} else {
	header("Location: .");
}
?>