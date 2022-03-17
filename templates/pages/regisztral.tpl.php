<!DOCTYPE html>
<html>
<head>
	<title>Regisztráció</title>
	<meta charset="utf-8">
</head>
<body>
<?php if(isset($message)) { ?>
	<h1><?= $message ?></h1>
	<?php if($again) { ?>
		<a href="?page=belepes">Próbálja újra!</a>
	<?php } ?>
<?php } ?>
</body>
</html>