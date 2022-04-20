<?php
<<<<<<< Updated upstream
if (isset($_POST['nev']) && isset($_POST['email']) && isset($_POST['szoveg']))
{
    echo '<div class="elso">';
    echo "Az Ön üzenet a következő: <br />";
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
}

else {
    echo '<div class="elso">';
    echo "Az Ön üzenet a következő: <br />";
    echo "<br />";
    echo "</div>";

    echo '<div class="elso">';
    echo 'Nem adott meg üzenetet. Az <a href="?page=kapcsolat">"Írjon nekünk"</a> menüpontban megteheti.';
    echo " menüponttal megteheti!";
    echo "<br />";
    echo "</div>";
}
?>
=======

	if(!isset($_POST['nev']) || strlen($_POST['nev']) < 5)
	{
		exit("Hibás név: ".$_POST['nev']);
	}

	$re = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';
	if(!isset($_POST['email']) || !preg_match($re,$_POST['email']))
	{
		exit("Hibás email: ".$_POST['email']);
	}

	if(!isset($_POST['szoveg']) || empty($_POST['szoveg']))
	{
		exit("Hibás szöveg: ".$_POST['szoveg']);
	}


?>
>>>>>>> Stashed changes
