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
    return view('home');
});

Route::get('/artikel', function () {
    return view('artikel');
});

Route::get('/layanan', function () {
    return view('layanan');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/surveikerentanan', function () {
    return view('blogs/survei');
});

Route::get('/metodologi-itsa', function () {
    return view('blogs/metodologiitsa');
});

Route::get('/kerentanan-log4j', function () {
    return view('blogs/log4j');
});

Route::get('/soppage', function () {
    return view('sop');
});

Route::get('/juknis', function () {
    return view('juknis');
});

Route::get('/risalah', function () {
    return view('risalah');
});

Route::get('/bacajuknis', function () {
    return view('juknis/juknis_1.pdf');
});

Route::get('/soppage', [App\Http\Controllers\SopController::class, 'index'])->name('soppage');
Route::get('/juknispage', [App\Http\Controllers\JuknisController::class, 'index'])->name('juknispage');
Route::get('/risalahpage', [App\Http\Controllers\RisalahController::class, 'index'])->name('risalahpage');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
