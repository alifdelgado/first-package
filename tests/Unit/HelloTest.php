<?php

namespace Spike\FirstPackage\Tests\Unit;

use FirstPackage;
use Spike\FirstPackage\Models\Message;
use Spike\FirstPackage\Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HelloTest extends TestCase
{
    use RefreshDatabase;
    
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
        
        $this->assertEquals(
            "Hola desde mi primer paquete, Spike",
            hello("Spike")
        );
    }

    /** @test */
    public function can_interact_with_models_and_databases()
    {
        $message =  new Message();
        $message->content = 'Mensaje de prueba';
        $message->save();
        $this->assertEquals('Mensaje de prueba', Message::first()->content);
    }
}