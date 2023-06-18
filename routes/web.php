<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\SongController;
use App\Models\Genero;
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

Route::post('/login', [AuthController::class, 'login'])->name('loginApi');
Route::post('/register', [AuthController::class, 'register'])->name('registerApi');
Route::get('/genders', [GenderController::class, 'index'])->name('gender.index');
Route::get('/gender/{id}', [GenderController::class, 'show'])->name('gender.show');
Route::post('/album', [AlbumController::class, 'store'])->name('album.store');
Route::get('/song', [SongController::class, 'index'])->name('song.index');
Route::post('/song', [SongController::class, 'store'])->name('song.store');


Route::get('/dashboard', function () {
    return view('dashboard.home');
})->name('dashboard');
Route::get('/music', function () {
    return view('musica.music');
})->name('musica.music');

Route::get('/generos_detalles', function () {
    return view('genero.generos_detalles');
})->name('genero.generos_detalles');

Route::get('/analisis', function () {
    return view('dashboard.analisis');
})->name('dashboard.analisis');

Route::get('/favoritos', function () {
    return view('favorito.favoritos');
})->name('favorito.favoritos');

Route::get('/eventos', function () {
    return view('evento.eventos');
})->name('evento.eventos');

Route::get('/eventos_detalles', function () {
    return view('evento.eventos_detalles');
})->name('evento.eventos_detalles');

Route::get('/crear_evento', function () {
    return view('evento.crear_evento');
})->name('evento.crear_evento');

Route::get('/añadir_musica', function () {
    return view('musica.añadir_musica');
})->name('musica.añadir_musica');

Route::get('/albums', function () {
    return view('album.albums');
})->name('album.albums');

Route::get('/artists', function () {
    return view('artists.artists');
})->name('artists.artists');

Route::get('/history', function () {
    return view('history.history');
})->name('history.history');


