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
        return view('genero.show', compact('songs'));
    }
    
    
}
