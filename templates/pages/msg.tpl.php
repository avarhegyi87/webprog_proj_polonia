<?php if (isset($_POST['nev']) && isset($_POST['email']) && isset($_POST['szoveg'])) {
    
    echo '<div class="elso">';
    echo "Az Ön üzenete a következő: <br />";
    echo "<br />";
    echo "</div>";

    echo '<div class="elso">';
    $name = $_POST['nev'];
    echo "<b>Az ön  neve: </b>".$name."<br />";
    echo "</div>";

    echo '<div class="elso">';
    $email = $_POST['email'];
    echo "<b>Az ön email címe: </b>".$email."<br />";
    echo "</div>";

    echo '<div class="elso">';
    $msg = $_POST['szoveg'];
    echo "<b>Az ön üzenete: </b>".$msg."<br />";
    echo "</div>";

    if(isset($message)) {
        echo '<div class="elso">';
        echo $message;
        echo "</div>";
    }
} else {
    echo '<div class="elso">';
    echo 'Nem küldött üzenetet. Az <a href="?page=kapcsolat">"Írjon nekünk"</a> menüpontban megteheti.';
    echo "<br />";
    echo "</div>";
} ?>
