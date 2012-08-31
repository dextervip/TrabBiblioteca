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
     * Função para obter o ID
     * @return id
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Função para definir o ID
     * @param type $id
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * Função para obter a escolha
     * @return escolha
     */
    public function getEscolha() {
        return $this->escolha;
    }

    /**
     * Função para definir a escolha
     * @param type $escolha
     */
    public function setEscolha($escolha) {
        $this->escolha = $escolha;
    }

    /**
     * Função para obter as cartas
     * @return cartas
     */
    public function getCartas() {
        return $this->cartas;
    }

    /**
     * Função para definir as cartas
     * @param \MRCartas\Baralho $cartas
     */
    public function setCartas($cartas) {
        $this->cartas = $cartas;
    }

    /**
     * Função para adicionar as cartas
     * @param \MRCartas\Baralho $cartas
     */
    public function addCartas($cartas) {
        $this->cartas->addCartas($cartas);
    }

    /**
     * Funão para obter o número de cartas
     * @return número de cartas no baralho
     */
    public function count() {
        return $this->cartas->count();
    }

}