<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ping', function () {
    return 'pong';
});

Route::prefix('api')->group(__DIR__.'/api.php');
