<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('front.index');
});

Route::get('/who-we-are', function () {
    return view('front.about');
});

Route::get('/area-of-expertise', function () {
    return view('front.excellences');
});
Route::get('/area-of-expertise/slung', function () {
    return view('front.excellence');
});

Route::get('/contact-us', function () {
    return view('front.contact');
});
