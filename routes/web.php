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

Route::get('/home', function () {
    return view('dashboard.home');
})->name('dashboard.home');

Route::get('/music', function () {
    return view('dashboard.music');
})->name('dashboard.music');

Route::get('/generos', function () {
    return view('dashboard.generos');
})->name('dashboard.generos');

Route::get('/generos_detalles', function () {
    return view('dashboard.generos_detalles');
})->name('dashboard.generos_detalles');

Route::get('/analisis', function () {
    return view('dashboard.analisis');
})->name('dashboard.analisis');

Route::get('/favoritos', function () {
    return view('dashboard.favoritos');
})->name('dashboard.favoritos');

Route::get('/eventos', function () {
    return view('dashboard.eventos');
})->name('dashboard.eventos');

Route::get('/eventos_detalles', function () {
    return view('dashboard.eventos_detalles');
})->name('dashboard.eventos_detalles');

Route::get('/crear_evento', function () {
    return view('dashboard.crear_evento');
})->name('dashboard.crear_evento');

Route::get('/añadir_musica', function () {
    return view('dashboard.añadir_musica');
})->name('dashboard.añadir_musica');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
