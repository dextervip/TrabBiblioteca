<?php


$url_request = $_SERVER['REQUEST_URI'];
define('APPLICATION_PATH', $_SERVER['APPLICATION_PATH']);
define('APPLICATION_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/TrabBiblioteca/public/');


$url = substr_replace($url_request, '', 0, strlen(APPLICATION_PATH));




var_dump($url);



