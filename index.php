<?php
include('./includes/config.inc.php');
if (isset($_GET['page'])) {
	$page = $_GET['page'];
	if (isset($pages[$page]) && file_exists("./templates/pages/{$pages[$page]['file']}.tpl.php")) {
		$search = $pages[$page];
	} else {
		$search = $error_page;
		header("HTTP/1.0 404 Not Found");
	}
} else {
	$search = $pages['/'];
}
include('./templates/index.tpl.php');
?>
