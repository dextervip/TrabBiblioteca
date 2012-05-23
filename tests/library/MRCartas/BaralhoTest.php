<?php

namespace MRCartas;

/**
 * Test class for Baralho.
 * Generated by PHPUnit on 2012-05-23 at 19:43:39.
 */
class BaralhoTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Baralho
     */
    protected $baralho;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->baralho = new Baralho;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }
    
    /**
     * @covers MRCartas\Baralho::addCartaBaralho
     * @todo Implement testAddCartaBaralho().
     * @author Rafael
     */
    public function testAddCartaBaralho()
    {
        $naipes = array('paus', 'ouro','espada','copas');
        $valores = array('A','K','Q','J','10','9','8','7','6','5','4','3','2');
        foreach ($naipes as $naipe) {
            foreach  ($valores as $value) {
                $carta = new \MRCartas\Carta();
                $carta->setNaipe($naipe);
                $carta->setValor($value);
                $this->baralho->addCartaBaralho($carta);
            }
        }
        $this->assertSame($this->baralho->getBaralho()[0]->getNaipe(), 'paus');
        $this->assertSame($this->baralho->count(), 52);
    }

    /**
     * @covers MRCartas\Baralho::retiraCartaTopo
     * @todo Implement testRetiraCartaTopo().
     * @author Bruno
     */
    public function testRetiraCartaTopo()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers MRCartas\Baralho::retiraCartaFim
     * @todo Implement testRetiraCartaFim().
     * @author Lucas
     */
    public function testRetiraCartaFim()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers MRCartas\Baralho::divideBaralho
     * @todo Implement testDivideBaralho().
     * @author
     */
    public function testDivideBaralho()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    

    /**
     * @covers MRCartas\Baralho::embaralhaCartas
     * @todo Implement testEmbaralhaCartas().
     * @author
     */
    public function testEmbaralhaCartas()
    {
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
    public function testPassaCartaInicioFim()
    {
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
    public function testGetBaralho()
    {
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
    public function testSetCartas()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

}
