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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', function () {
    return view('praktikum 1.home');
});
Route::get('/about-us', function () {
    return view('praktikum 1.about-us');
});
Route::get('/contact-us', function () {
    return view('praktikum 1.contact-us');
});
Route::get('/news', function () {
    return view('praktikum 1.news');
});
Route::get('/product', function () {
    return view('praktikum 1.product');
});
Route::get('/program', function () {
    return view('praktikum 1.program');
});
