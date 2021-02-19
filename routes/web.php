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
    return view('home', ['nav' => 'home', 'title' => 'HOME']);
});

Route::get('/about', function () {
    return view('about', ['nav' => 'about', 'title' => 'ABOUT']);
});

Route::get('/portfolio', function () {
    return view('portfolio', ['nav' => 'portfolio', 'title' => 'PORTFOLIO']);
});

Route::get('/contact', function () {
    return view('contact', ['nav' => 'contact', 'title' => 'CONTACT']);
});