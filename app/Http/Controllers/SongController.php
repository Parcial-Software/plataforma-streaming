<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SongController extends Controller
{
    public function index()
    {
        $apiUrl = config('apiUrl');
        $response = Http::get($apiUrl . 'genders');
        $genders = $response->json();

        $response = Http::get($apiUrl . 'albums/user/'. session('id') );
        $albums = $response->json();


        return view('musica.añadir_musica', compact('genders', 'albums'));
    }

    public function index2()
    {
        $apiUrl = config('apiUrl');
        $response = Http::get($apiUrl . 'songs/user/'. session('id') );
        $songs = $response->json();
        
        $apiUrl = config('apiUrl');
        $response = Http::get($apiUrl . 'playlists/user/' . session('id'));
        $playlists = $response->json();
        return view('musica.index', compact('songs', 'playlists') );

    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'artist' => 'required',
            'lyrics' => 'required',
            'albumId' => 'required',
            'genderId' => 'required',
            'fileUrl' => 'required',
            'imageUrl' => 'required',
        ]);

        $apiUrl = config('apiUrl');
        $response = Http::post($apiUrl . 'Songs', [
            'name' => $request->input('name'),
            'imageUrl' => '',
            'fileUrl' => '',
            'artist' => $request->input('artist'),
            'lyrics' => '',
            'albumId' => $request->input('albumId'),
            'genderId' => $request->input('genderId'),
        ])->json();

        $file = $request->file('file');
        $response = Http::attach(
            'document', 
            file_get_contents($file), 
            $file->getClientOriginalName() 
        )->put($apiUrl . 'Songs/uploadFile/' . $response['id'])->json(); 

        $image = $request->file('image');
        $response = Http::attach(
            'document', 
            file_get_contents($image), 
            $image->getClientOriginalName() 
        )->put($apiUrl . 'Songs/uploadImage/' . $response['id'])->json(); 
        
        $song = $response;
        
        $aiUrl = config('aiUrl');
        $response = Http::post($aiUrl, [
            'id' => $song['id'],
            'data' => $song['fileUrl']
        ])->json();

        return redirect()->route('dashboard')->with('success', 'Cancion creada correctamente');
    }
 
}
