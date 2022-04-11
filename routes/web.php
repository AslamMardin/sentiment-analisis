<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ApplicationControllers;
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

Route::get('/home', [ApplicationControllers::class, 'home']);
Route::get('/analisis', [ApplicationControllers::class, 'analisis']);

Route::fallback(function(){
	return view('tidak-ada');
});