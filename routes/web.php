<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SatriaDimarPutra_1462200179Controller;
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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/hero', function () {
    return view('hero');
});

Route::get('/aboutme', function () {
    return view('aboutme');
});

Route::get('/index', function () {
    return view('index');
});


