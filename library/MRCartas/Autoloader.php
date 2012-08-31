<?php

/*
 * License
 * ========================================
 * Biblioteca para manipulação de cartas
 * Copyright (C) 2012  Rafael Tavares Amorim e Marcelo Maia Lopes
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace MRCartas;

/**
 * Classe de autoloader para carregamento dinâmico das bibliotecas 
 */
class Autoloader {

    
    public static function load($class) {
        if (strpos($class, 'MRCartas') === FALSE) {
            return;
        }
        $class = str_replace ('\\', DIRECTORY_SEPARATOR , $class);
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




