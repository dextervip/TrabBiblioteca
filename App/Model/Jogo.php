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

    /**
     * Construções e pre-definições da classe
     */
    public function __construct() {
        $this->baralho = new \MRCartas\Baralho();
        $this->descarte = new \MRCartas\Descarte();
        $this->popularBaralho();
        $this->baralho->embaralhaCartas();
        $this->jogador1 = new Jogador(1);
        $this->jogador2 = new Jogador(2);
        $this->turno = 1;
    }

    /**
     * A function popula baralho crrega as informações do baralho, 
     * como naipes e números de cartas.
     */
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
     * Função que retorna o baralho
     * @return baralho
     */
    public function getBaralho() {
        return $this->baralho;
    }

    /**
     * Função para buscar o gescarte
     * @return descarte
     */
    public function getDescarte() {
        return $this->descarte;
    }

    /**
     * Função para escolher
     * @param type $escolha
     */
    public function escolher($escolha) {
        $this->getJogador()->setEscolha($escolha);
    }

    /**
     * Função para obter a carta do inicio.
     * @return Carta
     */
    public function getCarta() {
        return $this->baralho->retiraCartaInicio();
    }

    /* @var $carta MRCartas\Carta */

    /**
     * 
     * @param \App\Model\MRCartas\Carta $carta
     * @return se a carta for par, o número dela, caso contrário, retorna false
     */
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
     * Função para obter o descarte do jogo
     */
    public function obterDescarte() {
        $this->getJogador()->addCartas($this->descarte->removerCartas());
    }

    /**
     * Função para obter o turno
     * @return turno
     */
    public function getTurno() {
        return $this->turno;
    }

    /**
     * Função para alternar entre os turnos dos jogadores
     * @return turno
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
     * Função para obter o jogadors
     * @return o jogador
     */
    public function getJogador() {
        $turno = 'jogador' . $this->turno;
        return $this->$turno;
    }

    /**
     * Funçãopara obter o jogador1
     * @return jogador1
     */
    public function getJogador1() {
        return $this->jogador1;
    }

    /**
     * Funçãopara obter o jogador2
     * @return jogador2
     */
    public function getJogador2() {
        return $this->jogador2;
    }

}
