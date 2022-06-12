<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/ruta',function(){
    return "hola mundo";
});
Route::get('/test',function(){
    return "GET OK";
});
Route::post('/test',function(){
    return "POST OK";
});
Route::put('/test',function(){
    return "PUT OK";
});
Route::patch('/test',function(){
    return "PATCH OK";
});
Route::delete('/test',function(){
    return "DELETE OK";
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
