<?php
	define('ROOT_DIR', str_replace('\\', '/', dirname(__FILE__)));
	if(!is_dir(ROOT_DIR.'/shumann_img')){
		mkdir(ROOT_DIR.'/shumann_img');
	}
	$link = "http://sosrff.tsu.ru/new/shm.jpg";
	$deport = ROOT_DIR."/shumann_img/".date( "Y.m.d_H.i" ).".jpg";
	$file = file_get_contents($link);
	file_put_contents($deport, $file);
?>
