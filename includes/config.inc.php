<?php
$wnd_title = array(
	'title'=>'(másolat) Polonia Online',
	'motto'=>'Országos Lengyel Önkormányzat | Ogólnokrajowy Samorząd Polski na Węgrzech'
);

$header = array(
	'img-source'=>'biglogo.jpg',
	'img-alt'=>'logo'
);

$footer = array(
	'copyright'=>'Copyright '.date('Y').'.',
	'company'=>'Ádám Várhegyi-Miłoś (Y1JE9I)',
	'original'=>'https://www.polonia.hu'
);

$pages = array(
	'/'=>array('file'=>'cimlap', 'text'=>'Címlap', 'on_menu'=>array(1,1)),
	'archivum'=>array('file'=>'archivum', 'text'=>'Archívum', 'on_menu'=>array(1,1)),
	'galeria'=>array('file'=>'galeria', 'text'=>'Galéria', 'on_menu'=>array(1,1)),
	'belepes'=>array('file'=>'belepes', 'text'=>'Belépés', 'on_menu'=>array(1,0)),
	'kilepes'=>array('file'=>'kilepes', 'text'=>'Kilépés', 'on_menu'=>array(0,1)),
	'belep'=>array('file'=>'belep', 'text'=>'', 'on_menu'=>array(0,0)),
	'regisztral'=>array('file'=>'regisztral', 'text'=>'', 'on_menu'=>array(0,0))
);

$error_page = array('file'=>'404','text'=>'A keresett oldal nem található');

$search = null;
?>