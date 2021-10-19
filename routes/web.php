<?php

use Illuminate\Support\Facades\Route;
use Spike\FirstPackage\Http\Controllers\HelloController;

Route::get('hello-route', [HelloController::class, 'index']);