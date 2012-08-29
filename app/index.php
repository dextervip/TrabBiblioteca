<?php

include '/../build/package.phar';

/**
 * Description of index
 *
 */
class index {

    private $listaCartas = array();

    public function adicionarCartas() {

        $baralho = new \MRCartas\Baralho();

        $naipes = array('paus', 'ouro', 'espada', 'copas');
        $valores = array('A', 'K', 'Q', 'J', '10', '9', '8', '7', '6', '5', '4', '3', '2');
        foreach ($naipes as $naipe) {
            foreach ($valores as $value) {
                $carta = new \MRCartas\Carta();
                $carta->setNaipe($naipe);
                $carta->setValor($value);
                $baralho->addCartaBaralho($carta);
            }
        }
        echo "<br />BARALHO --------------------------------------------------------";
        //var_dump($baralho->getBaralho());
        
        echo($baralho->toString());

        echo "<br />----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</br>";

        echo "<br />TIRANDO CARTA DO INICIO PASSANDO PARA O FIM";
        $baralho->passaCartaInicioFim();
        var_dump($baralho->getBaralho());

        echo "<br />----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</br>";
        echo "<br />RETIRANDO CARTA DO FIM DO BARALHO";
        $baralho->retiraCartaFim();
        var_dump($baralho->getBaralho());

        echo "<br />----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</br>";
        echo "<br />EMBARALHANDO A CARTA";
        $baralho->embaralhaCartas();
        var_dump($baralho->getBaralho());

        echo "<br />----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</br>";
        echo "<br />RETIRANDO CARTA DO TOPO DO BARALHO";
        $baralho->retiraCartaTopo();
        var_dump($baralho->getBaralho());

        echo "<br />----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</br>";
        echo "<br />DIVIDIR BARALHO EM 2";
        $baralho->divideBaralho();
        var_dump($baralho->getBaralho());
    }

}

