<?php session_start(); ?>
<?php if (file_exists('./logicals/'.$search['file'].'.php')) { include("./logicals/{$search['file']}.php"); } ?>
<!DOCTYPE html>
<html lang="hu-hu">
    <head>
        <meta charset="utf-8">
        <title><?= $wnd_title['title'] . ((isset($wnd_title['motto'])) ? (' - ' . $wnd_title['motto']) : '') ?></title>
        <link rel="stylesheet" href="./styles/style.css" type="text/css">
        <script type="text/javascript" src="js/main.js"></script>
        <?php if (file_exists('./styles/' . $search['file'] . '.css')) { ?>
            <link rel="stylesheet" href="./styles/<?= $search['file'] ?>.css" type="text/css"><?php } ?>
    </head>

    <body>
        <header>
            <img src="./images/<?= $header['img-source'] ?>" alt="<?= $header['img-alt'] ?>">
            <h1><?= $wnd_title['title'] ?></h1>
            <?php if (isset($wnd_title['motto'])) { ?><h2><?= $wnd_title['motto'] ?></h2><?php } ?>
            <?php if (isset($_SESSION['login'])) { 
                ?>Bejelentkezve: <strong><?=$_SESSION['ln'] . " " . $_SESSION['fn']." (" . $_SESSION['login'] . ")" ?></strong>
            <?php } ?>
        </header>
        <div id="wrapper">
            <aside id="nav">
                <nav>
                    <ul>
                        <?php foreach ($pages as $url => $page) { ?>
                            <?php if (! isset($_SESSION['login']) && $page['on_menu'][0] || isset($_SESSION['login']) && $page['on_menu'][1]) { ?>
                                <li<?= (($page == $search) ? ' class="active"' : '') ?>>
                                    <a href="<?= ($url == '/') ? '.' : ('?page=' . $url) ?>">
                                        <?= $page['text'] ?>
                                    </a>
                                </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                </nav>
            </aside>
            <div id="content">
                <?php include("./templates/pages/{$search['file']}.tpl.php"); ?>
            </div>
        </div>
        <footer>
            <?php if (isset($footer['copyright'])) { ?>&copy;&nbsp;<?= $footer['copyright'] ?> <?php } ?>
            &nbsp;
            <?php if (isset($footer['company'])) { ?><?= $footer['company'] ?><?php } ?>
            &nbsp;
            <?php if (isset($footer['original'])) {?>

                <a id="original" href="<?= $footer['original'] ?>" target="_blank">Az oldal eredetije.</a>
                &nbsp;
                Ez az oldal egy egyetemi házi feladat keretében készült nem hivatalos oldal.

            <?php } ?>
        </footer>
    </body>
</html>