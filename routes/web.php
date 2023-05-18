<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('prue');
});

// Ruta de inicio de sesión de Facebook
Route::get('/login/facebook', 'App\Http\Controllers\Auth\LoginController@redirectToFacebook');

// Ruta de devolución de llamada de Facebook
Route::get('/login/facebook/callback', 'App\Http\Controllers\Auth\LoginController@handleFacebookCallback');
