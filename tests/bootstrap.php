<?php

defined('APPLICATION_PATH')
        || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

set_include_path(implode(PATH_SEPARATOR, array(realpath(__DIR__ . '/../library'),
            get_include_path(),
        )));

set_include_path(get_include_path() . PATH_SEPARATOR . realpath(__DIR__ . '/../'));
set_include_path(get_include_path() . PATH_SEPARATOR . realpath(__DIR__ . '/../library'));
require_once 'MRCartas/Autoloader.php';
require_once 'App/JogoApp.php';
require_once 'App/Model/Jogo.php';
require_once 'App/Model/Jogador.php';

