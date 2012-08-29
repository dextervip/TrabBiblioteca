<?php

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
}
