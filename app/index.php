<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of index
 *
 * @author Marcelo
 */
class index {

    private $listaCartas = array();

    public function criarArray() {

        for ($index = 0; $index < 51; $index++) {
            $this->listaCartas[$index . 'teste'] = 'carta ' . $index;
        }
    }

    public function adicionarCartas() {

        $baralho = new MRCartas\Baralho();
        $carta = new MRCartas\Carta();
        $naipes = array('joao', 'pedro');
        foreach ($naipes as $naipe) {
            for ($index = 0; $index < 12; $index++) {
                $carta->setNaipe($naipe);
                $carta->setValor($index);
                $baralho->addCartaBaralho($carta);
            }
        }
        
        var_dump($baralho);
    }

}
defined('APPLICATION_PATH')
        || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

set_include_path(implode(PATH_SEPARATOR, array(realpath(APPLICATION_PATH . '/../library'),
            get_include_path(),
        )));

require_once 'MRCartas/Autoloader.php'; 

$i = new index();
 $i->criarArray();
 $i->adicionarCartas();

?>
