<!DOCTYPE html>
<html lang="hu-hu">
<meta charset="utf-8">
<title><?= $header['title'] . ((isset($header['motto'])) ? (' - ' . $header['motto']) : '') ?></title>
<link rel="stylesheet" href="./styles/style.css" type="text/css">
<?php if (file_exists('./styles/' . $search['file'] . '.css')) {
	?>
    <link rel="stylesheet" href="./styles/<?= $search['file'] ?>.css" type="text/css">
<?php } ?>
<body>
<header>
    <h1><?= $header['title'] ?></h1>
	<?php if (isset($header['motto'])) {
		?>
        <h2><?= $header['motto'] ?></h2>
	<?php } ?>
</header>
<nav>
    <ul>
		<?php foreach ($pages as $url => $page) { ?>
            <li<?= (($page == $search) ? 'class="acivated"' : '') ?>>
                <a href="<?= ($url == '/') ? '.' : ('$page=' . $url) ?>">
					<?= $page['text'] ?>
                </a>
            </li>
		<?php } ?>
    </ul>
</nav>
<?php include("pages/{$search['file']}.tpl.php"); ?>
</body>
</html>