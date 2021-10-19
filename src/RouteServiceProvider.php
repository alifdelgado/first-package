<?php

namespace Spike\FirstPackage;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = 'Spike\FirstPackage\Http\Controllers';

    public function map()
    {
        Route::namespace($this->namespace)
                ->group(__DIR__ . '/../routes/web.php');
    }
}