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
 * Descarte é um baralho que recebe as cartas descartadas pelos jogadores.
 *
 * @author thiago
 */
class Descarte extends BaralhoAbstract {
    
    /**
     * Remove e limpa o descarte
     * 
     * @return array de Cartas
     */
    public function removerCartas() {
        $cartas = $this->cartas;
        $this->cartas = null;
        $this->cartas = array();
        return $cartas;
    }
    
    /**
     * Visualiza uma carta do descarte
     * 
     * @param int $posicao
     * @return Carta
     */
    public function verCarta($posicao) {
        return $this->cartas[$posicao];
    }
}
