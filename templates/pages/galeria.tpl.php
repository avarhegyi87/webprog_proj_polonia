<h2>Galéria</h2>
<h3>Feltöltés a galériába</h3>
<?php
    include('./includes/config.inc.php');
    $msg = array();

    if (isset($_POST['imgsend'])) {
        $files = array_filter($_FILES['images']['name']);
        $imgcount = count($files);
        $file = $_FILES['images'];
        
        for ($i = 0; $i < $imgcount; $i++) {
            if ($file['error'][$i] == 4) {
                # nem lett fájl feltöltve
            } elseif (!in_array($file['type'][$i], $ALLOWED_PICTYPES)) {
                $msg[] = " Nem megfelelő típus: " . $file['name'][$i];
            } elseif ($file['error'][$i] == 1 or $file['error'][$i] == 2 or $file['size'][$i] > $MAXPICSIZE) {
                $msg[] = " Túl nagy állomány: " . $file['name'][$i];
            } else {
                $finalloc = $PICFOLDER.strtolower($file['name'][$i]);
                if (file_exists($finalloc)) {
                    $msg[] = " Már létezik: " . $file['name'][$i];
                } else {
                    move_uploaded_file($file['tmp_name'][$i], $finalloc);
                    $msg[] = " Fájl feltöltve: " . $file['name'][$i];
                }
            }
            print_r($msg);
        }
    }
?>
<?php
    if (isset($_SESSION['login'])) {
        if (!empty($msg)) {
            echo '<ul>';
            foreach ($msg as $u) {
                echo "<li>$u</li>";
            }
            echo '</ul>';
        }
        ?>
        <form action="?page=galeria" method="post" enctype="multipart/form-data">
        <label>Válasszon egy fájlt: <input type="file" name="images[]" multiple required></label>
        <input type="submit" name="imgsend" value="Feltöltés">
        </form>
        <?php
    } else {
        ?>Képfeltöltéshez jelentkezzen be a felhasználónevével és jelszavával, vagy regisztráljon, ha még nincsen fiókja!<?php
    }
    
?>
<h3>Képek</h3>
<?php
    arsort($pics);
    foreach ($pics as $file => $imgdate) { ?>
        <div class="image">
            <a href="<?php echo $PICFOLDER.$file ?>">
                <img src="<?php echo $PICFOLDER.$file ?>">
            </a>
            <p>Név: <?php echo $file ?></p>
            <p>Dátum: <?php echo date($DATEFORMAT, $imgdate) ?></p>
        </div>
    <?php } ?>