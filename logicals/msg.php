<?php
if (isset($_POST['nev']) && isset($_POST['email']) && isset($_POST['szoveg'])) {
	try {
		$dbh = new PDO('mysql:host=localhost;dbname=polonia_users', 'root', '',
					   array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
		);
		$dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        
        $sqlInsert = "insert into uzenet(id, nev, email, szoveg)
						values(0, :nev, :email, :szoveg)";
		$stmt = $dbh->prepare($sqlInsert);
		$stmt->execute(array(':nev' => $_POST['nev'], ':email' => $_POST['email'],
						':szoveg' => $_POST['szoveg']));
		if ($count = $stmt->rowCount()) {
			$message = "Üzenetét elmentettük adatbázisunkban.";
			$again = false;
		} else {
			$message = "Üzenetét nem sikerült elmentetnünk az adatbázisunkban";
			$again = true;
		}  
	} catch (PDOException $e) {
		$message = "Hiba az üzenet adatbázisba mentésekor: " . $e->getMessage();
		$again = true;
	}
} else {
	header("Location: .");
}
?>