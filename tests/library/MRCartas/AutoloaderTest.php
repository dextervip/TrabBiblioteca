<?php
/**
 * Teste unitário para classe de autoloader
 *
 * @author Rafael
 */
class AutoloaderTest extends PHPUnit_Framework_TestCase
{

    public function setUp()
    {
        
    }

    public function testAutoloader()
    {
        try {
            $core = new \MRCartas\Core();
            $this->assertEquals('1.0.0', $core->getVersion());
            $this->assertEquals('1.0.0', \MRCartas\Core::VERSION);
        } catch (Exception $exc) {
            $this->fail($exc->getMessage());
        }
    }

}

