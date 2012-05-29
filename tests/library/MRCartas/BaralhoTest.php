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
    protected $baralho;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->baralho = new Baralho;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers MRCartas\Baralho::addCartaBaralho
     * @todo Implement testAddCartaBaralho().
     * @author Rafael
     */
    public function testAddCartaBaralho() {
        $this->popularBaralho();
        $this->assertSame($this->baralho->getBaralho()[0]->getNaipe(), 'paus');
        $this->assertSame($this->baralho->getBaralho()[$this->baralho->count() - 1]->getNaipe(), 'copas');
    }

    /**
     * Testa o limite de cartas do baralho, se for excedido será lançada uma exceção
     * @covers MRCartas\Baralho::addCartaBaralho
     * @todo Implement testAddCartaBaralho().
     * @author Rafael
     * @expectedException MRCartas\BaralhoException
     */
    public function testAddLimiteCartas() {
        $this->popularBaralho();
        $this->baralho->addCartaBaralho(new Carta());
        $this->baralho->addCartaBaralho(new Carta());
    }

    private function popularBaralho() {
        $naipes = array('paus', 'ouro', 'espada', 'copas');
        $valores = array('A', 'K', 'Q', 'J', '10', '9', '8', '7', '6', '5', '4', '3', '2');
        foreach ($naipes as $naipe) {
            foreach ($valores as $value) {
                $carta = new \MRCartas\Carta();
                $carta->setNaipe($naipe);
                $carta->setValor($value);
                $this->baralho->addCartaBaralho($carta);
            }
        }
    }

    /**
     * @covers MRCartas\Baralho::count
     * @author Rafael
     */
    public function testCount() {
        $this->popularBaralho();
        $this->assertSame($this->baralho->count(), 52);
    }

    /**
     * @covers MRCartas\Baralho::retiraCartaTopo
     * @todo Implement testRetiraCartaTopo().
     * @author Bruno
     */
    public function testRetiraCartaTopo() {
        $this->popularBaralho();
        $cartaRemovida = $this->baralho->retiraCartaTopo();
        $this->assertSame($cartaRemovida->getNaipe(), 'copas');
        $this->assertSame($cartaRemovida->getValor(), '2');
    }

    /**
     * @covers MRCartas\Baralho::retiraCartaFim
     * @todo Implement testRetiraCartaFim().
     * @author Lucas
     */
    public function testRetiraCartaFim() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers MRCartas\Baralho::divideBaralho
     * @todo Implement testDivideBaralho().
     * @author Juliano R
     */
    public function testDivideBaralho() {
        /**
         * Em construção...
         */
        $this->popularBaralho();
        $meioBaralho = $this->baralho->divideBaralho();
        //$numCartasMeioBaralho = $this->$meioBaralho;



        $this->assertSame($this->$meioBaralho, 26);
        
        


















//        $this->markTestIncomplete(
//                'This test has not been implemented yet.'
//        );
    }

    /**
     * @covers MRCartas\Baralho::embaralhaCartas
     * @todo Implement testEmbaralhaCartas().
     * @author
     */
    public function testEmbaralhaCartas() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers MRCartas\Baralho::passaCartaInicioFim
     * @todo Implement testPassaCartaInicioFim().
     * @author
     */
    public function testPassaCartaInicioFim() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers MRCartas\Baralho::getBaralho
     * @todo Implement testGetBaralho().
     * @author
     */
    public function testGetBaralho() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers MRCartas\Baralho::setCartas
     * @todo Implement testSetCartas().
     * @author
     */
    public function testSetCartas() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

}
