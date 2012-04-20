<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Baralho
 *
 * @author Marcelo
 */
class Baralho {
    
    const LIMITE_CARTAS = 51;
    
    
    private $cartas = array();
    
    public function retiraCartaTopo(){
        return array_shift($cartas);
    }
    
    public function retiraCartaFim(){
        return array_pop($cartas);
    }
    
    public function divideBaralho(int $baralhoDesejado){
       $quantidadeAtual = count($cartas);
       if($baralhoDesejado){
           
       }
       
    }
}

?>
