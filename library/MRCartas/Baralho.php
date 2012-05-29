<?php

namespace MRCartas;

//A biblioteca de manipulação de baralho, por padrão o tradicional de 52 cartas sem curingas, 
// que  deve fornecer uma representação das cartas e funções/métodos/etc para manipulação das cartas
// São esperadas as
//  funções de  embaralhar,
//   cortar em duas partes (em uma determinada posição e juntando em um único baralho no final)
//   retirar uma carta do inicio e do final, 
//   passar uma carta do inicio para o final (sem mostrar que carta é), 
//   e a criação de um monte de descarte do qual podemos ver qualquer carta sem removê-la 
//   (no monte de compra uma carta só pode ser vista se for removida dele).

/**
 * Description of Baralho
 *
 * @author Marcelo
 */
class Baralho {

    const LIMITE_CARTAS = 52;

    private $cartas = array();
    private $descarte = array();

    /**
     * retira a carta do inicio do array
     * @return Array 
     */
    public function retiraCartaTopo() {
        return array_pop($this->cartas);
    }

    /**
     * retira a carta do fim do array
     * @return Array 
     */
    public function retiraCartaFim() {
        return array_shift($this->cartas);
    }

    /**
     * Método que divide o baralho em duas partes, 
     * retorna a segunda parte e atualiza a primeira parte
     * 
     *  @return array 
     */
    public function divideBaralho() {
        $num = count($this->cartas) / 2;

        $parte1 = array_slice($this->cartas, 0, $num);
        $parte2 = array_slice($this->cartas, $num);
        $this->cartas = $parte1;
        return $parte2;
    }

    /**
     * metodo para adicionar carta no baralho
     * @param Carta $carta 
     */
    public function addCartaBaralho(\MRCartas\Carta $carta) {
        if (count($this->cartas) > self::LIMITE_CARTAS) {
            throw new \MRCartas\BaralhoException(\MRCartas\BaralhoException::LIMITE_CARTAS_EXCEDIDO);
        }
        $this->cartas[] = $carta;
    }

    /**
     * metodo para embaralhar a lista de cartas 
     */
    public function embaralhaCartas() {
        shuffle($this->cartas);
    }

    /**
     *  metodo para retirar carta do inicio do baralho e move-la para o fim do baralho 
     */
    public function passaCartaInicioFim() {
        $cartaTopo = array_shift($this->cartas);
        array_push($this->cartas, $cartaTopo);
    }

    /**
     * metodo para acessar a lista
     * @return Array 
     */
    public function getBaralho() {
        return $this->cartas;
    }

    public function setCartas(array $cartas) {
        foreach ($cartas as $carta) {
            if ($carta instanceof \MRCartas\Baralho == false) {
                throw new \MRCartas\BaralhoException(\MRCartas\BaralhoException::PARAMETRO_INVALIDO);
            }
        }
        if (count($this->cartas) > self::LIMITE_CARTAS) {
            throw new \MRCartas\BaralhoException(\MRCartas\BaralhoException::LIMITE_CARTAS_EXCEDIDO);
        }
        $this->cartas = $cartas;
    }

    /**
     * Returna o número de cartas no baralho
     * @return int
     */
    public function count() {
        return count($this->cartas);
    }

}

