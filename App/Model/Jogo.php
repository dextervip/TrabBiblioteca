<?php

namespace App\Model;

/**
 * Description of Jogo
 *
 * @author Grupo E.S
 */
class Jogo {
    /* @var $baralho MRCartas\Baralho */

    private $baralho;

    /* @var $baralho MRCartas\Descarte */
    private $descarte;

    /* @var $jogador1 Jogador */
    private $jogador1;

    /* @var $jogador2 Jogador */
    private $jogador2;
    private $turno;

    public function __construct() {
        $this->baralho = new \MRCartas\Baralho();
        $this->descarte = new \MRCartas\Descarte();
        $this->popularBaralho();
        $this->baralho->embaralhaCartas();
        $this->jogador1 = new Jogador(1);
        $this->jogador2 = new Jogador(2);
        $this->turno = 1;
    }

    private function popularBaralho() {
        $naipes = array('paus', 'ouro', 'espada', 'copas');
        $valores = array('A', 'K', 'Q', 'J', '10', '9', '8', '7', '6', '5', '4', '3', '2');
        foreach ($naipes as $naipe) {
            foreach ($valores as $value) {
                $carta = new \MRCartas\Carta();
                $carta->setNaipe($naipe);
                $carta->setValor($value);
                $this->baralho->addCarta($carta);
            }
        }
    }

    /**
     * 
     * @return type
     */
    public function getBaralho() {
        return $this->baralho;
    }

    /**
     * 
     * @return type
     */
    public function getDescarte() {
        return $this->descarte;
    }

    /**
     * 
     * @param type $escolha
     */
    public function escolher($escolha) {
        $this->getJogador()->setEscolha($escolha);
    }

    public function getCarta() {
        return $this->baralho->retiraCartaInicio();
    }

    /* @var $carta MRCartas\Carta */

    public function isPar($carta) {
        return $carta->isPar();
    }

    /* @var $carta MRCartas\Carta */

    /**
     * 
     * @param \App\Model\MRCartas\Carta $carta
     */
    public function addCartaDescarte($carta) {
        $this->descarte->addCarta($carta);
    }

    /**
     * 
     */
    public function obterDescarte() {
        $this->getJogador()->addCartas($this->descarte->removerCartas());
    }

    /**
     * 
     * @return type
     */
    public function getTurno() {
        return $this->turno;
    }

    /**
     * 
     * @return type
     */
    public function trocarTurno() {
        $turno = $this->turno;
        if ($turno == 1) {
            $this->turno = 2;
        } else if ($turno == 2) {
            $this->turno = 1;
        } else {
            // chora que o algoritmo deu pau :s
        }
        return $turno;
    }

    /**
     * 
     * @return type
     */
    public function getJogador() {
        $turno = 'jogador' . $this->turno;
        return $this->$turno;
    }

    /**
     * 
     * @return type
     */
    public function getJogador1() {
        return $this->jogador1;
    }

    /**
     * 
     * @return type
     */
    public function getJogador2() {
        return $this->jogador2;
    }

}
