<?php
//defined('APPLICATION_PATH')
//        || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));
//
//set_include_path(implode(PATH_SEPARATOR, array(realpath(APPLICATION_PATH . '/../library'),
//            get_include_path(),
//        )));
//require_once 'MRCartas/Autoloader.php';

<<<<<<< HEAD

defined('APPLICATION_PATH')
        || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

set_include_path(implode(PATH_SEPARATOR, array(realpath(APPLICATION_PATH . '/../library'),
            get_include_path(),
        )));

require_once 'MRCartas/Autoloader.php';


=======
include('../build/package.phar');
$carta = new \MRCartas\Carta();
$carta->setNaipe("Ouro");
$carta->setValor(7);
var_dump($carta);
>>>>>>> 7241f2e7fe8ed052fd1f15b39b51fdef2fc75c58
