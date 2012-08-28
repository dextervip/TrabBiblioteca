<?php

namespace MRCartas;

/**
 * Description of Carta
 *
 * @author Marcelo
 */
class Carta {

    private $naipe;
    private $valor;

    function __construct($naipe = null, $valor = null) {
        $this->naipe = $naipe;
        $this->valor = $valor;
    }

    public function getNaipe() {
        return $this->naipe;
    }

    public function setNaipe($naipe) {
        $this->naipe = $naipe;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }
    
    public function toString() {
        return $this->getValor() . ' de ' . $this->getNaipe();
    }

}

