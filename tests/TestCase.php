<?php

namespace Spike\FirstPackage\Tests;

use FirstPackage;
use Spike\FirstPackage\RouteServiceProvider;
use Spike\FirstPackage\FirstPackageServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getEnvironmentSetUp($app)
    {
        parent::getEnvironmentSetUp($app);
        $app['config']->set('database.default', 'testing');
        $app['config']->set('database.connection.testing', [
            'driver' => 'sqlite',
            'database' =>   ':memory'
        ]);
    }

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