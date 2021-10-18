<?php

namespace Spike\FirstPackage;

class Hello
{
    public function hello($name = "Spike")
    {
        return "Hola desde mi primer paquete, {$name}";
    }
}