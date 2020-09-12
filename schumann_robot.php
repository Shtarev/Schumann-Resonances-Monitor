<?php
	define('ROOT_DIR', str_replace('\\', '/', dirname(__FILE__)));  
	// создаем директорию в которую сохранить изображение
	if(!is_dir(ROOT_DIR.'/shumann_img')){
		mkdir(ROOT_DIR.'/shumann_img');
	}
	// ссылка где на сайте Томского НИИ находится изображение
	$link = "http://sosrff.tsu.ru/new/shm.jpg";
	// куда на сервере грузить фото под именем в виде даты
	$deport = ROOT_DIR."/shumann_img/".date( "Y.m.d_H.i" ).".jpg";
	$file = file_get_contents($link); // парсим фото в строку
	file_put_contents($deport, $file); // пкркводим фото из строки в файл
?>