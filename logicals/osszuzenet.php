<?php
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=polonia_users', 'root', '',
					   array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
		);
		$dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

        $stmt = $dbh->query('SELECT * FROM msg ORDER BY msg_id DESC');
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        //$sqlselect = "select * from msg order by msg_id desc";
        //$stmt = $dbh->prepare($sqlInsert);
        //$stmt->execute();
        if ($results) {
			$dblist_message = "Önök írták!";
            $dblist_success = true;
		} else {
			$dblist_message = "Üzenetét nem sikerült elmentetnünk az adatbázisunkban";
			$dblist_success = false;
		}
    } catch (PDOException $e) {
        $dblist_message = "Hiba az üzenetek betöltésekor: " . $e->getMessage();
        $dblist_success = false;
    }
?>