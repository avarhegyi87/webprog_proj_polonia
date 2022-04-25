<?php session_start(); ?>
<?php if (file_exists('./logicals/' . $search['file'] . '.php')) {
    include("./logicals/{$search['file']}.php");
} ?>
<!DOCTYPE html>
<html lang="hu-hu">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $wnd_title['title'] . ((isset($wnd_title['motto'])) ? (' - ' . $wnd_title['motto']) : '') ?></title>
    <link rel="stylesheet" href="./styles/style.css" type="text/css">
    <script type="text/javascript" src="js/main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <?php if (file_exists('./styles/' . $search['file'] . '.css')) { ?>
        <link rel="stylesheet" href="./styles/<?= $search['file'] ?>.css" type="text/css"><?php } ?>
</head>

<body>
    <header>
        <img src="./images/<?= $header['img-source'] ?>" alt="<?= $header['img-alt'] ?>">
        <h1><?= $wnd_title['title'] ?></h1>
        <?php if (isset($wnd_title['motto'])) { ?><h4 id="motto"><?= $wnd_title['motto'] ?></h4><?php } ?>
        <?php if (isset($_SESSION['login'])) {
        ?>Bejelentkezve: <strong><?= $_SESSION['ln'] . " " . $_SESSION['fn'] . " (" . $_SESSION['login'] . ")" ?></strong>
    <?php } ?>
    </header>
    <div id="wrapper">
        <aside id="nav">
            <nav class="navbar navbar-expand-sm navbar-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <?php foreach ($pages as $url => $page) { ?>
                            <?php if (!isset($_SESSION['login']) && $page['on_menu'][0] || isset($_SESSION['login']) && $page['on_menu'][1]) { ?>
                                <li class="nav-item">
                                    <a <?= (($page == $search) ? ' class="nav-link active"' : 'class="nav-link"') ?> href="<?= ($url == '/') ? '.' : ('?page=' . $url) ?>">
                                        <?= $page['text'] ?>
                                    </a>
                                </li>
                            <?php } ?>
                        <?php } ?>
                        <button class="btn btn-light navbar-btn" onclick="window.open('<?= $footer['original'] ?>')" target="_blank">
                            Ugrás az eredeti oldalra
                        </button>
                    </ul>
                </div>
            </nav>
        </aside>
        <div id="container">
            <?php include("./templates/pages/{$search['file']}.tpl.php"); ?>
        </div>
    </div>
    <footer>
        <?php if (isset($footer['copyright'])) { ?>&copy;&nbsp;<?= $footer['copyright'] ?> <?php } ?>
    &nbsp;
    <?php if (isset($footer['company'])) { ?><?= $footer['company'] ?><?php } ?>
    &nbsp;
    <?php if (isset($footer['original'])) { ?>
        <p id="authors-note">
            Ez az oldal egy egyetemi házi feladat keretében készült, nem hivatalos oldal.
            &nbsp;
            <a id="original" href="<?= $footer['original'] ?>" target="_blank">Az oldal eredetije.</a>
        </p>
    <?php } ?>
    </footer>
</body>

</html>