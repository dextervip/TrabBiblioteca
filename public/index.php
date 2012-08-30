<?php

$url_request = $_SERVER['REQUEST_URI'];
define('APPLICATION_PATH', $_SERVER['APPLICATION_PATH']);
define('APPLICATION_URL', 'http://' . $_SERVER['HTTP_HOST']);

$url = '/' . substr_replace($url_request, '', 0, strlen(APPLICATION_PATH));


set_include_path(get_include_path() . PATH_SEPARATOR . realpath(__DIR__ . '/../'));
set_include_path(get_include_path() . PATH_SEPARATOR . realpath(__DIR__ . '/../library'));
require_once '/../library/MRCartas/Autoloader.php';
require_once 'App/JogoApp.php';
require_once 'App/Model/Jogo.php';
require_once 'App/Model/Jogador.php';


$jogoApp = new \App\JogoApp();

require_once 'Zend/Session/Namespace.php';
$session = new Zend_Session_Namespace();
if (isset($session->jogo) === false) {
    $session->jogo = new \App\Model\Jogo();
}


$jogoApp->get('/', function () use($session){
            var_dump($session->jogo->getCarta());
            die;
            require '../App/View/Home.php';
        });

$jogoApp->get('/oi', function () {
            echo 'helloooo mano!';
        });


$jogoApp->run($url);
