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
    return view ('index0129');
});

Route::get('/Artikel', function () {
    return view ('Artikel0129');
});

Route::get('/Contact Us', function () {
    return view ('Contact Us0129');
});