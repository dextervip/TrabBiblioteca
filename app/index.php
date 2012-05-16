<?php

include '/../build/package.phar';
/*
 * To change terhis template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of index
 *
 * @author Marcelo
 */
class index {

    private $listaCartas = array();

   

    public function adicionarCartas() {

        $baralho = new \MRCartas\Baralho();
        
        $naipes = array('paus', 'ouro','espada','copas');
        $valores = array('A','K','Q','J','10','9','8','7','6','5','4','3','2');
        foreach ($naipes as $naipe) {
            foreach  ($valores as $value) {
                $carta = new \MRCartas\Carta();
                $carta->setNaipe($naipe);
                $carta->setValor($value);
                $baralho->addCartaBaralho($carta);
            }
        }
        
       // $baralho->passaCartaInicioFim(); 
        
        
      // $baralho->retiraCartaFim();
      // $baralho->embaralhaCartas();
      // $baralho->addCartaBaralho($carta);
       //$baralho->retiraCartaTopo();
       //$baralho->retiraCartaFim();
       //$baralho->divideBaralho();
       //$baralho->divideBaralho();
       //$baralho->passaCartaInicioFim();
        
        
        var_dump($baralho->getBaralho());
    }

    
}

$i = new index();
 
 $i->adicionarCartas();

?>
