<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lancer', function () {
    return view("kobita");
});

Route::get('/demo', 'App\Http\Controllers\ProjectController@index');


// laravel start
// ------------------
// php artisan serve

// Make auto migration, Controller, Model in Laravel
// -----------------------------------------------------
// php artisan make:model Project -mc --resource


// migrate run
// ------------
// php artisan migrate




