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
        return view('musica.añadir_musica', compact('genders', 'albums', 'songs'));
    }

    public function index2()
    {
        $apiUrl = config('apiUrl');
        $response = Http::get($apiUrl . 'songs/user/'. session('id') );
        $songs = $response->json();
        return view('musica.index', compact('songs') );

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
            'lyrics' => $request->input('lyrics'),
            'albumId' => $request->input('albumId'),
            'genderId' => $request->input('genderId'),
        ])->json();

        $file = $request->file('file');
        $response = Http::attach(
            'document', 
            file_get_contents($file), 
            $file->getClientOriginalName() 
        )->put($apiUrl . 'Songs/uploadFile/' . $response['id']); 

        $image = $request->file('image');
        $response = Http::attach(
            'document', 
            file_get_contents($image), 
            $image->getClientOriginalName() 
        )->put($apiUrl . 'Songs/uploadImage/' . $response['id']); 

        if ($response->status() != 200) {
            return redirect()->back()->withErrors(['error' => 'Error al crear la cancion'])->withInput();
        }

        return redirect()->route('dashboard')->with('success', 'Cancion creada correctamente');
    }

 
}
