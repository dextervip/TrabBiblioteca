<?php

namespace MRCartas;

/**
 * Esta classe é a representação de uma carta. Possui o naipe e o valor dessa 
 * carta.
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

    /**
     * Retorna o naipe da carta
     * 
     * @return type
     */
    public function getNaipe() {
        return $this->naipe;
    }

    /**
     * Seta o naipe dessa carta
     * 
     * @param type $naipe
     */
    public function setNaipe($naipe) {
        $this->naipe = $naipe;
    }

    /**
     * Obtém o valor dessa carta
     * 
     * @return type
     */
    public function getValor() {
        return $this->valor;
    }

    /**
     * Seta o valor dessa carta
     * 
     * @param type $valor
     */
    public function setValor($valor) {
        $this->valor = $valor;
    }
    
    /**
     * Retorna a carta em string
     * 
     * @return string
     */
    public function toString() {
        return $this->getValor() . ' de ' . $this->getNaipe();
    }

}

