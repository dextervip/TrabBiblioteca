<?php

defined('APPLICATION_PATH')
        || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

set_include_path(implode(PATH_SEPARATOR, array(realpath(__DIR__ . '/../library'),
            get_include_path(),
        )));

require_once 'MRCartas/Autoloader.php';

