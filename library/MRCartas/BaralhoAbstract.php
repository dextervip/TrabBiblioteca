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
 * BaralhoAbstract é uma classe que abstrai alguns conceitos sobre baralhos em
 * geral. As classes Baralho e Descarte herdam dessa classe.
 *
 * @author thiago
 */
abstract class BaralhoAbstract {
    
    /**
     * O número limite de cartas que um baralho pode possuir
     */
    const LIMITE_CARTAS = 52;

    /**
     * Array de cartas do baralho.
     * @var array
     */
    protected $cartas = array();
    
    /**
     * Método para adicionar uma carta no baralho
     * 
     * @param Carta $carta 
     */
    public function addCarta(\MRCartas\Carta $carta) {
        if (count($this->cartas) > self::LIMITE_CARTAS) {
            throw new \MRCartas\BaralhoException(\MRCartas\BaralhoException::LIMITE_CARTAS_EXCEDIDO);
        }
        $this->cartas[] = $carta;
    }
    
    /**
     * Método para adicionar várias cartas no baralho
     * 
     * @param Carta $carta 
     */
    public function addCartas($cartas) {
        foreach ($cartas as $carta) {
            $this->addCarta($carta);
        }
    }
    
    /**
     * Retira a carta do inicio do array
     * 
     * @return Carta
     */
    public function retiraCartaInicio() {
        return array_shift($this->cartas);
    }
    
    /**
     * Retorna o número de cartas no baralho
     * 
     * @return int
     */
    public function count() {
        return count($this->cartas);
    }
}
