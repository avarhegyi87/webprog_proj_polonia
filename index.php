<?php
include('./includes/config.inc.php');
echo "SERVER['REQUEST_URI']: ".$_SERVER['REQUEST_URI'];
if (isset($_GET['page'])) {
	echo " ||| GET['page']: ".$_GET['page'];
} else {
	echo " ||| GET not set";
}
//$url = $_SERVER['REQUEST_URI'];
//$stringArray = explode("/",$url);
//$page = $stringArray[count($stringArray)-1];
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
//else $search = $pages['/'];
include('./templates/index.tpl.php');
?>