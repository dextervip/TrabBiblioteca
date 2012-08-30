<?php
namespace App\Model;
/**
 * Description of Jogador
 *
 * @author thiago
 */
class Jogador {
    
    private $id;
    private $escolha;
    
    /* @var $cartas \MRCartas\Baralho */
    private $cartas;
    
    public function __construct($id = null) {
        $this->id = $id;
        $this->cartas = new \MRCartas\Baralho();
    }
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getEscolha() {
        return $this->escolha;
    }

    public function setEscolha($escolha) {
        $this->escolha = $escolha;
    }

    public function getCartas() {
        return $this->cartas;
    }

    public function setCartas($cartas) {
        $this->cartas = $cartas;
    }
    
    public function addCartas($cartas) {
        $this->cartas->addCartas($cartas);
    }
    
    public function count() {
        return $this->cartas->count();
    }
}