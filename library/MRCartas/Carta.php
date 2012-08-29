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

