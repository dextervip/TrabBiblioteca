<?php

session_start();

$url_request = $_SERVER['REQUEST_URI'];
define('APPLICATION_PATH', $_SERVER['APPLICATION_PATH']);
define('APPLICATION_URL', 'http://' . $_SERVER['HTTP_HOST']);

$url = '/' . substr_replace($url_request, '', 0, strlen(APPLICATION_PATH));


set_include_path(get_include_path() . PATH_SEPARATOR . realpath(__DIR__ . '/../'));
require_once '/../library/MRCartas/Autoloader.php';
require_once 'App/JogoApp.php';
require_once 'App/Model/Jogo.php';
require_once 'App/Model/Jogador.php';


$jogoApp = new \App\JogoApp();

//if (isset($_SESSION['jogo']) == false) {
   $_SESSION['jogo'] = new \App\Model\Jogo();
//}


$jogoApp->get('/', function () {
            var_dump($_SESSION['jogo']->getCarta());
            die;
            require '../App/View/Home.php';
        });

$jogoApp->get('/oi', function () {
            echo 'helloooo mano!';
        });


$jogoApp->run($url);
