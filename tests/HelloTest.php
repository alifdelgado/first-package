<?php

namespace Spike\FirstPackage\Tests;

use FirstPackage;

class HelloTest extends TestCase
{
    /** @test */
    public function it_returns_the_message()
    {
        $this->assertEquals(
            "Hola desde mi primer paquete, Spike",
            FirstPackage::hello()
        );
        
        $this->assertEquals(
            "Hola desde mi primer paquete, Jet",
            FirstPackage::hello("Jet")
        );
    }
}