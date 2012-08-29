<?php

namespace MRCartas;

use MRCartas\Carta;

/**
 * Test class for Baralho.
 * Generated by PHPUnit on 2012-05-23 at 19:43:39.
 */
class BaralhoTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var Baralho
     */
    protected $monte;

    /**
     * 
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->monte = new Baralho;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers MRCartas\Baralho::addCarta
     * @todo Implement testAddCarta().
     * @author Rafael
     */
    public function testAddCarta() {
        $this->popularBaralho();
        $this->assertSame($this->monte->getCartas()[0]->getNaipe(), 'paus');
        $this->assertSame($this->monte->getCartas()[$this->monte->count() - 1]->getNaipe(), 'copas');
    }

    /**
     * Testa o limite de cartas do baralho, se for excedido será lançada uma exceção
     * @covers MRCartas\Baralho::addCarta
     * @todo Implement testAddCarta().
     * @author Rafael
     * @expectedException MRCartas\BaralhoException
     */
    public function testAddLimiteCartas() {
        $this->popularBaralho();
        $this->monte->addCarta(new Carta());
        $this->monte->addCarta(new Carta());
    }

    private function popularBaralho() {
        $naipes = array('paus', 'ouro', 'espada', 'copas');
        $valores = array('A', 'K', 'Q', 'J', '10', '9', '8', '7', '6', '5', '4', '3', '2');
        foreach ($naipes as $naipe) {
            foreach ($valores as $value) {
                $carta = new \MRCartas\Carta();
                $carta->setNaipe($naipe);
                $carta->setValor($value);
                $this->monte->addCarta($carta);
            }
        }
    }

    /**
     * @covers MRCartas\Baralho::count
     * @author Rafael
     */
    public function testCount() {
        $this->popularBaralho();
        $this->assertSame($this->monte->count(), 52);
    }

    /**
     * Testa se o metodo RetiraCartaInicio() pega a primeira carta adicionada no array
     *
     * @covers MRCartas\Baralho::retiraCartaInicio
     * @todo Implement testRetiraCartaInicio().
     * @author Bruno
     */
    public function testRetiraCartaInicio() {
        $this->popularBaralho();
        $cartaRemovida = $this->monte->retiraCartaInicio();
        $this->assertSame($cartaRemovida->getNaipe(), 'paus');
        $this->assertSame($cartaRemovida->getValor(), 'A');
    }

    /**
     * Testa se o metodo RetiraCartaFim() retira a carta desejada corretamente do fim do baralho
     *
     * @covers MRCartas\Baralho::retiraCartaFim
     * @todo Implement testRetiraCartaFim().
     * @author Bruno
     */
    public function testRetiraCartaFim() {
        $this->popularBaralho();
        $cartaRemovida = $this->monte->retiraCartaFim();
        $this->assertSame($cartaRemovida->getNaipe(), 'copas');
        $this->assertSame($cartaRemovida->getValor(), '2');
    }

    /**
     * Testa o método divideBaralho() presente na classee Bararalho.php
     * Este método é responsavel por dividir o baralho em duas partes iguais
     * e fornecer um retorno contendo a segunda parte do baralho,
     * a qual sera manipulada posteriormente 
     * e atualiza a primeira parte do mesmo.
     * 
     * @covers MRCartas\Baralho::divideBaralho
     * @todo Implement testDivideBaralho().
     * @author Juliano
     */
    public function testDivideBaralho() {
        $this->monte = new \MRCartas\Baralho();
        $this->popularBaralho();
        $this->monte->divideBaralho(14);

        $monte2 = new \MRCartas\Baralho();
        $naipes = array('paus', 'ouro', 'espada', 'copas');
        $valores = array('A', 'K', 'Q', 'J', '10', '9', '8', '7', '6', '5', '4', '3', '2');
        foreach ($naipes as $naipe) {
            foreach ($valores as $value) {
                $carta = new \MRCartas\Carta();
                $carta->setNaipe($naipe);
                $carta->setValor($value);
                $monte2->addCarta($carta);
            }
        }
        $monte2->divideBaralho(14);
        $cartas1 = $this->monte->getCartas();
        $cartas2 = $monte2->getCartas();

        $this->assertEquals($cartas1[0]->getNaipe(), 'ouro');
        $this->assertEquals($cartas1[0]->getValor(), 'K');
        $this->assertEquals($cartas1[51]->getNaipe(), 'ouro');
        $this->assertEquals($cartas1[51]->getValor(), 'A');

        $this->assertEquals($cartas1, $cartas2);
    }

    /**
     * Testa se o baralho fica diferente depois de embaralhar as cartas.
     * @covers MRCartas\Baralho::embaralhaCartas
     * @todo Implement testEmbaralhaCartas().
     * @author renan
     */
    public function testEmbaralhaCartas() {
        
        $baralho = new \MRCartas\Baralho();
        $cartasAdd = array();
        $i = 0;
        $naipes = array('paus', 'ouro', 'espada', 'copas');
        $valores = array('A', 'K', 'Q', 'J', '10', '9', '8', '7', '6', '5', '4', '3', '2');
        foreach ($naipes as $naipe) {
            foreach ($valores as $value) {
                $carta = new \MRCartas\Carta();
                $carta->setNaipe($naipe);
                $carta->setValor($value);
                $baralho->addCarta($carta);
                $cartasAdd[$i] = $carta;
                $i++;
            }
        }
        //$baralho->setCartas($cartasAdd);
        $baralho->embaralhaCartas();
        $this->assertNotEquals($baralho->getCartas(), $cartasAdd);
        
    }

    /**
     * Testa se a carta passa do início do monte para o fim.
     * O teste ocorre com o baralho vazio, o baralho com apenas uma carta e o 
     * baralho com duas cartas.
     * @covers MRCartas\Baralho::passaCartaInicioFim
     * @todo Implement testPassaCartaInicioFim().
     * @author thiago
     */
    public function testPassaCartaInicioFim() {
        $baralho = new \MRCartas\Baralho();
        $baralho->passaCartaInicioFim();
        $this->assertEquals($baralho->getCartas(), array());

        $asPaus = new \MRCartas\Carta('A', 'paus');
        $baralho->addCarta($asPaus);
        $baralho->passaCartaInicioFim();
        $this->assertEquals($baralho->getCartas()[0], $asPaus);

        $dezOuro = new \MRCartas\Carta('10', 'ouro');
        $baralho->addCarta($dezOuro);
        $baralho->passaCartaInicioFim();
        $this->assertEquals($baralho->getCartas()[1], $asPaus);
        $this->assertEquals($baralho->getCartas()[0], $dezOuro);
    }

    /**
     * Testa se são retornadas as cartas do baralho corretamente.
     * @covers MRCartas\Baralho::getCartas
     * @todo Implement testGetCartas().
     * @author thiago
     */
    public function testGetCartas() {
        $baralho = new \MRCartas\Baralho();
        $cartasAdd = array();
        $i = 0;
        $naipes = array('paus', 'ouro', 'espada', 'copas');
        $valores = array('A', 'K', 'Q', 'J', '10', '9', '8', '7', '6', '5', '4', '3', '2');
        foreach ($naipes as $naipe) {
            foreach ($valores as $value) {
                $carta = new \MRCartas\Carta();
                $carta->setNaipe($naipe);
                $carta->setValor($value);
                $baralho->addCarta($carta);
                $cartasAdd[$i] = $carta;
                $i++;

                $this->assertEquals($baralho->getCartas(), $cartasAdd);
            }
        }
    }
    
    /**
     * Testa se o baralho enviado foi realmente atribuido.
     * @covers MRCartas\Baralho::setCartas
     * @todo Implement testSetCartas().
     * @author renan
     */
    public function testSetCartas() {
        
        $baralho = new \MRCartas\Baralho();
        $cartasAdd = array();
        $i = 0;
        $naipes = array('paus', 'ouro', 'espada', 'copas');
        $valores = array('A', 'K', 'Q', 'J', '10', '9', '8', '7', '6', '5', '4', '3', '2');
        foreach ($naipes as $naipe) {
            foreach ($valores as $value) {
                $carta = new \MRCartas\Carta();
                $carta->setNaipe($naipe);
                $carta->setValor($value);
                $baralho->addCarta($carta);
                $cartasAdd[$i] = $carta;
                $i++;
            }
        }
        $baralho->setCartas($cartasAdd);
        $this->assertEquals($baralho->getCartas(), $cartasAdd);
        
    }
    
}
