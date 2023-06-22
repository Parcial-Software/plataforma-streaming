<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FavoriteController extends Controller
{
    public function index()
    {
        $apiUrl = config('apiUrl');
        $response = Http::get($apiUrl . 'favorites/user/' . session('id'));
        $favorites = $response->json();
        return view('favorito.favoritos', compact('favorites'));
    }
}
