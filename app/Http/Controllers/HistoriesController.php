<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HistoriesController extends Controller
{
    public function index()
    {
        $apiUrl = config('apiUrl');
        $response = Http::get($apiUrl . 'histories/user/' . session('id'));
        $histories = $response->json();
        return view('history.history', compact('histories'));
    }
}
