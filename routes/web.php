<?php

use Illuminate\Support\Facades\Route;
use Spike\FirstPackage\Http\Controllers\HelloController;

Route::get(config('first-package.route'), [HelloController::class, 'index']);