<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AlbumController extends Controller
{
    public function index()
    {
        $apiUrl = config('apiUrl');
        $response = Http::get($apiUrl . 'Albums');
        $albums = $response->json();

        $response = Http::get($apiUrl . 'Albums/user/'. session('id'));
        $userAlbums = $response->json();

        $response = Http::get($apiUrl . 'Songs');
        $songs = $response->json();
    

        return view('album.index', compact('albums', 'userAlbums', 'songs'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'image' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $apiUrl = config('apiUrl');
        $response = Http::post($apiUrl . 'Albums', [
            'name' => $request->input('name'),
            'imageUrl' => '',
            'userId' => session('id'),
        ]);


        $file = $request->file('image');
        $response = Http::attach(
            'document', 
            file_get_contents($file), 
            $file->getClientOriginalName() 
        )->put($apiUrl . 'Albums/uploadImage/' . $response['id']); 

        if ($response->status() != 200) {
            return redirect()->back()->withErrors(['error' => 'Error al crear el album'])->withInput();
        }

        return redirect()->route('song.index');
    }
}
