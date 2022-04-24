<?php
    if (isset($dblist_message)) {
        echo "</br>";
        echo "<h1 class='intro'>" . $dblist_message . "</h1>";
        echo "</br>";
        if ($dblist_success) { ?>
            <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Felhasználó</th>
                <th scope="col">Név</th>
                <th scope="col">Email cím</th>
                <th scope="col">Üzenet</th>
            </tr>
        </thead>
            <?php
            foreach ($qry_results as $row) {
                echo "<tr>";
                echo "<td>" . $row['msg_id'] . "</td>";
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