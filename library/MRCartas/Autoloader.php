<?php
namespace MRCartas;
/**
 * Classe de autoloader para carregamento dinâmico das bibliotecas 
 */
class Autoloader
{
    public static function load($class)
    {
        include_once $class . '.php';
    }
}

/* Verifica versão do PHP */
if (version_compare(PHP_VERSION, '5.3.0') == -1) {
    throw new \Exception('Você não possui a versão minima 5.3.0 do PHP');
}
/* Registra Classe de Autoload */
spl_autoload_extensions('.php, .class.php');
spl_autoload_register(array(__NAMESPACE__ . '\Autoloader', 'load'));



