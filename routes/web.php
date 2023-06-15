<?php

use App\Http\Controllers\GeneroController;
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

Route::get('/home', function () {
    return view('dashboard.home');
})->name('dashboard.home');

Route::get('/music', function () {
    return view('musica.music');
})->name('musica.music');

Route::resource('generos', GeneroController::class);

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

Route::get('/albums', function(){
    return view('album.albums');
})->name('album.albums');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
