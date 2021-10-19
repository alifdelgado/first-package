<?php

namespace Spike\FirstPackage\Tests;

use FirstPackage;
use Spike\FirstPackage\RouteServiceProvider;
use Spike\FirstPackage\FirstPackageServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            FirstPackageServiceProvider::class,
            RouteServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app)
    {
        return  [
            'FirstPackage'  =>  \Spike\FirstPackage\Facades\FirstPackage::class
        ];
    }
}