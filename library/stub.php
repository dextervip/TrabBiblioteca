<?php

Phar::mapPhar();

class Autoloader {

    public static function load($class) {
        include_once 'phar://package.phar/' . $class . '.php';
    }

}

spl_autoload_extensions('.php, .class.php');
spl_autoload_register(array(__NAMESPACE__ . '\Autoloader', 'load'));
__HALT_COMPILER();