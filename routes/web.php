<?php

use App\Http\Controllers\AuthController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('accueil');
});

Route::get('/connexion', function () {
    return view('connexion');
});

Route::post('/connexion', [AuthController::class, 'login']);

Route::get('/inscription', function () {
    return view('inscription');
});

Route::post('/inscription', [AuthController::class, 'register']);
