<!DOCTYPE html>
<html lang="hu-hu">
<head>
    <meta charset="utf-8">
    <title><?= $wnd_title['title'] . ((isset($wnd_title['motto'])) ? (' - ' . $wnd_title['motto']) : '') ?></title>
    <link rel="stylesheet" href="./styles/style.css" type="text/css">
	<?php if(file_exists('./styles/' . $search['file'] . '.css')) { ?>
        <link rel="stylesheet" href="./styles/<?= $search['file']?>.css" type="text/css"><?php } ?>
</head>
<body>
    <header>
        <h1><?= $wnd_title['title'] ?></h1>
        <?php if (isset($wnd_title['motto'])) {
            ?>
            <h2><?= $wnd_title['motto'] ?></h2>
        <?php } ?>
    </header>
    <div id="wrapper">
        <aside id="nav">
            <nav>
                <ul>
                    <?php foreach ($pages as $url => $page) { ?>
                        <li<?= (($page == $search) ? ' class="active"' : '') ?>>
                            <a href="<?= ($url == '/') ? '.' : $url ?>">
                                <?= $page['text'] ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </nav>
        </aside>
        <div id="content">
            <?php include("./templates/pages/{$search['file']}.tpl.php"); ?>
        </div>
    </div>
    <footer>
        <?php if(isset($footer['copyright'])) { ?>&copy;&nbsp;<?= $footer['copyright'] ?> <?php } ?>
        &nbsp;
        <?php if(isset($footer['company'])) { ?><?= $footer['company'] ?> <?php } ?>
    </footer>
</body>
</html>