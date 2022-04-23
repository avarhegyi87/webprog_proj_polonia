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
		$stmt->execute(array(':username' => isset($_SESSION['login']) ? $_SESSION['login'] : 'Vendég', 
							':real_name' => $_POST['nev'],
							':email' => $_POST['email'],
							':text' => $_POST['szoveg']));
		if ($count = $stmt->rowCount()) {
			$form_message = "Üzenetét elmentettük adatbázisunkban.";
			$form_success = true;
		} else {
			$form_message = "Üzenetét nem sikerült elmentetnünk az adatbázisunkban";
			$form_success = false;
		}  
	} catch (PDOException $e) {
		$form_message = "Hiba az üzenet adatbázisba mentésekor: " . $e->getMessage();
		$form_success = false;
	}
} ?>