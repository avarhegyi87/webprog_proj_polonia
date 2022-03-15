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
	'/'=>array('file'=>'cimlap', 'text'=>'Címlap', 'menun'=>array(1,1)),
	'onkormanyzat'=>array('file'=>'onkormanyzat', 'text'=>'Önkormányzat', 'menun'=>array(1,1)),
	'galeria'=>array('file'=>'galeria', 'text'=>'Galéria', 'menun'=>array(1,1)),
	'videok'=>array('file'=>'videok', 'text'=>'Videók', 'menun'=>array(1,1)),
	'kapcsolat'=>array('file'=>'kapcsolat', 'text'=>'Kapcsolat', 'menun'=>array(1,1)),
	'belepes'=>array('file'=>'belepes', 'text'=>'Belépés', 'menun'=>array(1,0)),
	'kilepes'=>array('file'=>'kilep', 'text'=>'Kilépés', 'menun'=>array(0,1)),
	'belep'=>array('file'=>'belep', 'text'=>'', 'menun'=>array(0,0)),
	'regisztral'=>array('file'=>'regisztral', 'text'=>'', 'menun'=>array(0,0))
);

$error_page = array('file'=>'404','text'=>'A keresett oldal nem található');

$search = null;
?>