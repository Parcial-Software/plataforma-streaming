<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class PlaylistController extends Controller
{

    public function index()
    {
        $apiUrl = config('apiUrl');
        $response = Http::get($apiUrl . 'playlists/user/' . session('id'));
        $playlists = $response->json();
        return view('components.user.player')->with('playlists', $playlists);
    }

    public function create()
    {
        return view('playlist.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);
        $apiUrl = config('apiUrl');
        $response = Http::post($apiUrl . 'playlists', [
            'name' => $request->input('name'),
            'userId' => session('id'),
        ])->json();

        return redirect()->route('dashboard');
    }
}
