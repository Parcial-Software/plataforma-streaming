<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\PayController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\SubscriptionsController;
use App\Models\Genero;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
    $apiUrl = config('apiUrl');
    $plans = Http::get($apiUrl . 'plans' )->json();
    return view('welcome', compact('plans'));
});

Route::post('/login', [AuthController::class, 'login'])->name('loginApi');
Route::post('/register', [AuthController::class, 'register'])->name('registerApi');
Route::get('/genders', [GenderController::class, 'index'])->name('gender.index');
Route::get('/gender/{id}', [GenderController::class, 'show'])->name('gender.show');
Route::post('/album', [AlbumController::class, 'store'])->name('album.store');
Route::get('/songs', [SongController::class, 'index'])->name('song.index');
Route::post('/song', [SongController::class, 'store'])->name('song.store');
Route::get('/plans', [PlanController::class, 'index'])->name('plan.index');
Route::post('/payment', [PayController::class, 'register'])->name('pay.register');
Route::get('/albumList', [AlbumController::class, 'index'])->name('album.index');
Route::get('/songsUser', [SongController::class, 'index2'])->name('song.index2');
Route::get('playlistCreate', [PlaylistController::class, 'create'])->name('playlist.create' );
Route::post('/playlist', [PlaylistController::class, 'store'])->name('playlist.store');
Route::get('/playlist', [PlaylistController::class, 'index'])->name('playlist.index');
Route::post('/subscription/{id}', [SubscriptionsController::class, 'pay'])->name('subscription.pay');
Route::post('/playlist/{playlistId}/song/{songId}', [PlaylistController::class, 'playlistSong'])->name('playlist.playlistSong');
Route::get('/perfil', [ProfileController::class, 'index'])->name('perfil.index');
Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::get('/music', function () {
    return view('musica.music');
})->name('musica.music');

Route::get('/generos_detalles', function () {
    return view('genero.generos_detalles');
})->name('genero.generos_detalles');

Route::get('/analisis', function () {
    $biUrl = config('biUrl');
    $songs = Http::get( $biUrl . 'fiveSongMoreFavorite' );
    $earning = Http::get($biUrl . 'earningsTotal');
    
    return view('dashboard.analisis', ['songs' =>  json_decode($songs), 'earnings' => json_decode($earning)]);
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


Route::get('/artists', function () {
    return view('artists.artists');
})->name('artists.artists');

Route::get('/history', function () {
    return view('history.history');
})->name('history.history');

Route::get('/payment', function () {
    return view('payment.pay');
})->name('payment.pay');

Route::post('/amountSubscriptionsByCountry/ajax', [SubscriptionsController::class, 'subscriptionByCountry'])
->name('subscription.bycountry');
Route::post('/mostListenedGenders/ajax', [GenderController::class, 'gendersListened'])
->name('gender.gendersListened');
Route::post('/earningsByPlanType/ajax', [PlanController::class, 'earningsByPlanType'])
->name('plan.earningsByPlanType');

Route::post('/favorite', function (Request $request) {
    $songId = $request->input('songId');

    $apiUrl = config('apiUrl');
    $response = Http::post($apiUrl . 'Favorites', [
        'userId' => session('id'),
        'songId' => $songId,
    ])->json();

    if ($response['status'] != 200) {
        return response()->json(['error' => 'Error al agregar la canción a favoritos'], 500);
    }

    return response()->json(['success' => 'Canción agregada a favoritos'], 200);
})->name('x');

Route::post('/addToPlayer', function (Request $request) {
    $songId = $request->input('songId');

    $apiUrl = config('apiUrl');
    $response = Http::post($apiUrl . 'Histories', [
        'userId' => session('id'),
        'songId' => $songId,
        'timestamp' => now(),
    ])->json();

    if ($response['status'] != 200) {
        return response()->json(['error' => 'Error al agregar la canción al reproductor'], 500);
    }

    return response()->json(['success' => 'Canción agregada al reproductor'], 200);
})->name('z');


