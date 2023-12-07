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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/who-we-are', [App\Http\Controllers\HomeController::class, 'about'])->name('who-we-are');
Route::get('/area-of-expertise', [App\Http\Controllers\HomeController::class, 'areas'])->name('areas-of-expertise');
Route::get('/area-of-expertise/{slung}', [App\Http\Controllers\HomeController::class, 'area'])->name('area-of-expertise');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact-us');
Route::get('/news-and-updates', [App\Http\Controllers\HomeController::class, 'news'])->name('news-and-updates');
Route::get('/news-and-updates/{slung}', [App\Http\Controllers\HomeController::class, 'news_details'])->name('news-and-update');

Route::get('/terms-and-conditions', [App\Http\Controllers\HomeController::class, 'terms'])->name('terms-and-conditions');
Route::get('/privacy-policy', [App\Http\Controllers\HomeController::class, 'privacy'])->name('privacy-policy');
Route::get('/copyright-statement', [App\Http\Controllers\HomeController::class, 'copyright'])->name('copyright-statement');
Route::get('/disclaimer', [App\Http\Controllers\HomeController::class, 'disclaimer'])->name('disclaimer');
Route::get('/cookie-policy', [App\Http\Controllers\HomeController::class, 'cookie'])->name('cookie');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
