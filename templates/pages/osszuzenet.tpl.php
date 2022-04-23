<?php
    if (isset($dblist_message)) {
        if ($dblist_success) {
            echo "<table>";
            while ($row = mysql_fetch_array($results)) {
                echo "<tr>";
                echo "<td>" . $row['real_name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['msg_text'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
    }
?>