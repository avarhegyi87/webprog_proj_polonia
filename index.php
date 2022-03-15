<?php
	include('./includes/config.inc.php');
	echo $_SERVER['REQUEST_URI'];
	$url = $_SERVER['REQUEST_URI'];
	$stringArray = explode("/",$url);
	$page = $stringArray[count($stringArray)-1];
	if ($page != "") {
		if (isset($pages[$page]) && file_exists("./templates/pages/{$pages[$page]['file']}.tpl.php")) {
			$search = $pages[$page];
		} 
		else {
			$search = $error_page;
			header("HTTP/1.0 404 Not Found");
		}
	}
	else $search = $pages['/'];
	include('./templates/index.tpl.php');
?>
