<?php

namespace App\Model;

/**
 * Description of Jogador
 *
 * @author Grupo E.S
 */
class Jogador {

    private $id;
    private $escolha;

    /* @var $cartas \MRCartas\Baralho */
    private $cartas;

    /**
     * Construções e pre-definições da classe
     * @param type $id
     */
    public function __construct($id = null) {
        $this->id = $id;
        $this->cartas = new \MRCartas\Baralho();
    }

    /**
     * 
     * @return type
     */
    public function getId() {
        return $this->id;
    }

    /**
     * 
     * @param type $id
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * 
     * @return type
     */
    public function getEscolha() {
        return $this->escolha;
    }

    /**
     * 
     * @param type $escolha
     */
    public function setEscolha($escolha) {
        $this->escolha = $escolha;
    }

    /**
     * 
     * @return type
     */
    public function getCartas() {
        return $this->cartas;
    }

    /**
     * 
     * @param \MRCartas\Baralho $cartas
     */
    public function setCartas($cartas) {
        $this->cartas = $cartas;
    }

    /**
     * 
     * @param \MRCartas\Baralho $cartas
     */
    public function addCartas($cartas) {
        $this->cartas->addCartas($cartas);
    }

    /**
     * 
     * @return type
     */
    public function count() {
        return $this->cartas->count();
    }

}