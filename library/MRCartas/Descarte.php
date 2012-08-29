<?php

namespace MRCartas;

/**
 * Descarte é um baralho que recebe as cartas descartadas pelos jogadores.
 *
 * @author thiago
 */
class Descarte extends Baralho {
    
    /**
     * Remove uma carta do descarte
     * 
     * @param int $posicao
     * @return Carta
     */
    public function removerCarta($posicao) {
        $carta = $this->getCarta($posicao);
        unset($this->cartas[$posicao]);
        return $carta;
    }
    
    /**
     * Obtém uma carta do descarte
     * 
     * @param int $posicao
     * @return Carta
     */
    public function getCarta($posicao) {
        return $this->cartas[$posicao];
    }
}
