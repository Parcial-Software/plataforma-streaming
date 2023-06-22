<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GenderController extends Controller
{
    public function index()
    {
        $apiUrl = config('apiUrl');
        $genders = Http::get($apiUrl . 'genders' )->json();
        
        return view('genero.index', compact('genders'));
    }

    public function show($genderId)
    {
        $apiUrl = config('apiUrl');
        $songs = Http::get($apiUrl . 'songs/gender/' . $genderId)->json();

        $response = Http::get($apiUrl . 'playlists/user/' . session('id'));
        $playlists = $response->json();

        

        return view('genero.show', compact('songs', 'playlists'));
    }

    public function gendersListened(Request $request)
    {
        $biUrl = config('biUrl');
        $grafica = Http::get($biUrl . 'mostListenedGenders')->json();
        return response($grafica, 200)->header('Content-type', 'application/json');
    }
   
    
}
