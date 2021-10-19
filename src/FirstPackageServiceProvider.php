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

        $this->mergeConfigFrom($this->basePath('config/first-package.php'), 'first-package');
    }
    
    public function boot()
    {
        // $this->loadRoutesFrom($this->basePath('routes/web.php'));
        $this->loadViewsFrom($this->basePath('resources/views'), 'first-package');
        $this->loadMigrationsFrom($this->basePath('database/migrations'));
        $this->loadTranslationsFrom($this->basePath('resources/lang'), 'first-package');
        $this->loadJsonTranslationsFrom($this->basePath('resources/lang/json'));
        $this->publishes([
            $this->basePath('resources/lang')   =>  resource_path('lang/vendor/first-package')
        ], 'first-package-translations');
        $this->publishes([
            $this->basePath('database/migrations')  =>  database_path('migrations')
        ], 'first-package-migrations');
        $this->publishes([
            $this->basePath('resources/views/') =>  resource_path('views/vendor/first-package')
        ], 'first-package-views');
        $this->publishes([
            $this->basePath('config/first-package.php') =>  base_path('config/first-package.php'),
        ], 'first-package-config');
        $this->publishes([
            $this->basePath('resources/static') =>  public_path('vendor/first-package')
        ], 'first-package-static-assets');
    }

    protected function basePath($path = '')
    {
        return __DIR__ . "/../{$path}";
    }
}