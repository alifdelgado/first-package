<?php

namespace Spike\FirstPackage;

use Illuminate\Support\ServiceProvider;

class FirstPackageServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('first-package', function() {
            return new Hello;
        });
    }
    
    public function boot()
    {
    }
}