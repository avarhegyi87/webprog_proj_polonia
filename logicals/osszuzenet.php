<?php
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=polonia_users', 'root', '',
					   array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
		);
		$dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

        $stmt = $dbh->query('SELECT * FROM msgs ORDER BY msg_id DESC');
        $qry_results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        if ($qry_results) {
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