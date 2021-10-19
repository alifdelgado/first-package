<?php

namespace Spike\FirstPackage\Tests;

class CanGetTheMessageTest extends TestCase
{
    /** @test */
    public function can_get_the_message()
    {
        $this->get('hello-route')->assertSee("Hola desde mi primer paquete, Spike");
    }

    /** @test */
    public function can_get_the_message_through_a_view()
    {
        $this->get('hello-route')->assertViewIs('first-package::home');
    }
}