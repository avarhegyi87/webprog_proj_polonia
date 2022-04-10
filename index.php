<?php
include('./includes/config.inc.php');
$search = $pages['/'];
if (isset($_GET['page'])) {
	if (isset($pages[$_GET['page']]) && file_exists("./templates/pages/{$pages[$_GET['page']]['file']}.tpl.php")) {
		$search = $pages[$_GET['page']];
	}
	else {
		$search = $error_page;
		header("HTTP/1.0 404 Not Found");
	}
}
include('./templates/index.tpl.php');
?>