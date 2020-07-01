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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/form', function () {
//     return view('form');
// });

// Route::get('/welcomeku', function () {
//     return view('welcomeku');
// });

Route::get('/','HomeController@home');
Route::get('/form','AuthController@register');
Route::post('/welcomeku','AuthController@welcome_post');
// Route::get('/welcomeku','AuthController@welcome');
