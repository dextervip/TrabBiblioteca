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
 * Baralho é a classe que implementa os métodos de um baralho. Nele os jogadores 
 * buscam as cartas.
 *
 * @author Marcelo
 */
class Baralho extends BaralhoAbstract {

    /**
     * Retira a carta do inicio do array
     * @return Array 
     */
    public function retiraCartaInicio() {
        return array_shift($this->cartas);
    }

    /**
     * retira a carta do fim do array
     * @return Array 
     */
    public function retiraCartaFim() {
        return array_pop($this->cartas);
    }

    /**
     * Método que divide o baralho em duas partes, 
     * retorna a segunda parte e atualiza a primeira parte
     * 
     *  @return array 
     */
    /*public function divideBaralho() {
        $num = count($this->cartas) / 2;

        $parte1 = array_slice($this->cartas, 0, $num);
        $parte2 = array_slice($this->cartas, $num);
        $this->cartas = $parte1;
        return $parte2;
    }*/
    
    /**
     * Divide o baralho na posição do baralho passada por parâmetro, passando o
     * subconjunto de cartas inferior para cima e o subconjunto de cartas 
     * superior para baixo.
     * 
     * @param int $posicaoCorte
     */
    public function divideBaralho($posicaoCorte) {
        $num = count($this->cartas) / $posicaoCorte;
        $parte1 = array_slice($this->cartas, 0, $num);
        $parte2 = array_slice($this->cartas, $num);
        array_merge($parte2, $parte1);
        $this->cartas = $parte2;
    }

    /**
     * Método para embaralhar o baralho
     */
    public function embaralhaCartas() {
        shuffle($this->cartas);
    }

    /**
     *  Método para retirar carta do inicio do baralho e move-la para o fim do baralho 
     */
    public function passaCartaInicioFim() {
        $cartaTopo = array_shift($this->cartas);
        if ($cartaTopo != null) {
            array_push($this->cartas, $cartaTopo);
        }
    }

    /**
     * Método para obter todas as cartas do baralho.
     * 
     * @return array 
     */
    public function getBaralho() {
        return $this->cartas;
    }

    /**
     * Seta um array de cartas no baralho.
     * 
     * @param array $cartas
     * @throws \MRCartas\BaralhoException
     */
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
     * Retorna o número de cartas no baralho
     * 
     * @return int
     */
    public function count() {
        return count($this->cartas);
    }

    /**
     * Retorna todas as cartas do baralho em uma string
     * 
     * @return string
     */
    public function toString() {
        $valCarta = '';
        /* @var $carta \MRCartas\Carta */
        foreach ($this->cartas as $carta) {
            $valCarta .= $carta->toString() . '<br />';
        }
        return $valCarta;
    }
}

