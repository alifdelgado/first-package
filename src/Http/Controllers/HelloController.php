<?php

namespace Spike\FirstPackage\Http\Controllers;

use Spike\FirstPackage\Facades\FirstPackage;

class HelloController
{
    public function index()
    {
        return view('first-package::home', [
            'message' => FirstPackage::hello()
        ]);
    }
}