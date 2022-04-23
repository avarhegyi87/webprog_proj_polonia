<?php
    if (isset($dblist_message)) {
        echo "<h3>" . $dblist_message . "</h3>";
        if ($dblist_success) { ?>
            <table border=1>
            <tr>
                <th>Felhasználó</th>
                <th>Név</th>
                <th>Email cím</th>
                <th>Üzenet</th>
            </tr>
            <?php
            foreach ($qry_results as $row) {
                echo "<tr>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['real_name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['msg_text'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
    }
?>