<?php

Phar::mapPhar();

class Autoloader {

    public static function load($class) {
        if (strpos($class, 'MRCartas') === FALSE) {
            return;
        }
        include_once 'phar://package.phar/' . $class . '.php';
    }

}

spl_autoload_extensions('.php, .class.php');
spl_autoload_register(array(__NAMESPACE__ . '\Autoloader', 'load'));
__HALT_COMPILER();