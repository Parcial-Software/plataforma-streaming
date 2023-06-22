<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProfileController extends Controller
{
    public function index()
    {
        $apiUrl = config('apiUrl');
        $response = Http::get($apiUrl . 'Users/' . session('id'));
        $user = $response->json();
        
        $response = Http::get($apiUrl . 'Suscriptions/user/' . session('id'));
        $suscriptions = $response->json();
        return view('perfil.index', compact('user', 'suscriptions'));
    }
}
