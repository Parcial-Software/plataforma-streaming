<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $apiUrl = config('apiUrl');
        $response = Http::get($apiUrl . 'songs' );
        $songs = $response->json();

        $response = Http::get($apiUrl . 'albums' );
        $albums = $response->json();
        return view('dashboard.home', compact('songs', 'albums'));
    }
}
