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
        // $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'first-package');
        $this->publishes([
            __DIR__ . '/../resources/views/'    =>  resource_path('views/vendor/first-package')
        ], 'first-package-views');
    }
}