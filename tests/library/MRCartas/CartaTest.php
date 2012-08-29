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
         * Chama a variável 'object' que é um objeto da classe
         * Carta.php, acessa o método 'setNaipe' 
         * e define por paramêtro a string(naipe) de 'paus'.
         */
        $this->object->setNaipe('paus');

        /**
         * Testa se a string(naipe) retornada pelo método invocado 'getNaipe()' é 'paus'.
         */
        $this->assertSame($this->object->getNaipe(), 'paus');
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
    public function testGetSetValor() {
        $valores = array('A', 'K', 'Q', 'J', '10', '9', '8', '7', '6', '5', '4', '3', '2');
        foreach ($valores as $value) {
            /**
             * Chama a variável 'object' que é um objeto da classe
             * Carta.php, acessa o método 'setValor' 
             * e define por paramêtro a string $value.
             */
            $this->object->setValor($value);

            /**
             * Testa se a string(valor) retornada pelo método invocado 'getValor()' é a mesma
             * de $value.
             */
            $this->assertSame($this->object->getValor(), $value);
        }
    }

    public function testGetSetValorWithWrongValues() {
        $valores = array('D','P', 'X', 'U', 'O', '88', '18', 'o47', '50', '941', '41', '41', '24', '4u23','876','P0X4','T35T3');
        foreach ($valores as $value) {
            /**
             * Chama a variável 'object' que é um objeto da classe
             * Carta.php, acessa o método 'setValor' 
             * e define por paramêtro a string $value.
             */
            try{
            $this->object->setValor($value);
            
            /**
             * Testa se a string(valor) retornada pelo método invocado 'getValor()' é a mesma
             * de $value.
             */
            $this->assert($this->object->getValor(), $value);
            } catch (InvalidArgumentException $expected){
                return;
            }
             $this->fail('Nao ocorreu execeção.');
            }
        }
    

    /**
     * @covers MRCartas\Carta::setValor
     * @todo Implement testSetValor().
     */
    public function testSetValor() {
        /**
         * Atribui o valor 5 para uma variável chamada valor
         */
        $valor = "5";
        /**
         * Chama a variável 'object' que é um objeto da classe
         * Carta.php, acessa o método 'setValor' 
         * e define por paramêtro o atributo valor.
         */
        $this->object->setValor($valor);

        /**
         * Testa se a string(valor) retornada pelo método invocado 'getValor()'
         * é o mesmo que se encontra na variável valor.
         */
        $this->assertSame($this->object->getValor(), $valor);



        // Remove the following lines when you implement this test.
        $this->fail('Não implementado ainda');
    }

}

