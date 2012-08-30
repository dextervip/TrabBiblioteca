<?php
namespace App\Model;
/**
 * Description of Jogo
 *
 * @author thiago
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
    
    public function __construct() {
        $this->baralho = new \MRCartas\Baralho();
        $this->popularBaralho();
        $this->jogador1 = new Jogador();
        $this->jogador2 = new Jogador();
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
    
    public function escolher($idJogador, $escolha) {
        if ($idJogador == $this->jogador1->getId()) {
            $this->jogador1->setEscolha($escolha);
        } else if ($idJogador == $this->jogador2->getId()) {
            $this->jogador2->setEscolha($escolha);
        }
    }
    
    public function getCarta() {
        $this->baralho->retiraCartaInicio();
    }
    
    /* @var $carta MRCartas\Carta */
    public function isPar($carta) {
        return $carta->isPar();
    }
    
    /* @var $carta MRCartas\Carta */
    public function addCartaDescarte($carta) {
        $this->descarte->addCarta($carta);
    }
    
    public function getDescarte($idJogador) {
        if ($idJogador == $this->jogador1->getId()) {
            for ($i = 0; $i < $this->descarte->count(); $i++) {
                $this->jogador1->addCarta($this->descarte->removerCarta($i));
            }
        } else if ($idJogador == $this->jogador2->getId()) {
            for ($i = 0; $i < $this->descarte->count(); $i++) {
                $this->jogador2->addCarta($this->descarte->removerCarta($i));
            }
        }
    }
}
