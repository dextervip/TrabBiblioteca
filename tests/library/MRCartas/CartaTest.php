<?php

namespace MRCartas;

/**
 * Test class for Carta.
 * Generated by PHPUnit on 2012-05-23 at 19:43:50.
 */
class CartaTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var Carta
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new Carta;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers MRCartas\Carta::getNaipe
     * @todo Implement testGetNaipe().
     * @author Juliano R
     */
    public function testGetNaipe() {

        /**
         * Em construção...
         */
        $this->object->setNaipe('paus');
        $this->assertSame($this->object->getBaralho()[0]->getNaipe(), 'paus');
    }

    /**
     * @covers MRCartas\Carta::setNaipe
     * @todo Implement testSetNaipe().
     */
    public function testSetNaipe() {
        // Remove the following lines when you implement this test.
        $this->fail('Não implementado ainda');
    }

    /**
     * @covers MRCartas\Carta::getValor
     * @todo Implement testGetValor().
     */
    public function testGetValor() {
        // Remove the following lines when you implement this test.
        $this->fail('Não implementado ainda');
    }

    /**
     * @covers MRCartas\Carta::setValor
     * @todo Implement testSetValor().
     */
    public function testSetValor() {
        // Remove the following lines when you implement this test.
        $this->fail('Não implementado ainda');
    }

}

