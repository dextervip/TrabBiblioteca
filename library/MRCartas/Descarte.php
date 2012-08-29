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
