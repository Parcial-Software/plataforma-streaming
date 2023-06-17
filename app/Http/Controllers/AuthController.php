<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $apiUrl = config('apiUrl');
        $response = Http::post($apiUrl . 'Users/login', [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);

        if ($response->status() != 200){ 
            return redirect()->back()->withErrors(['error' => 'Credenciales incorrectas'])->withInput();
        }
        
        session([
            'id' => $response['id'],
            'roleId' => $response['roleId'],
            'name' => $response['name'],
        ]);

        return redirect()->route('dashboard');
    }

    public function showRegister()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $apiUrl = config('apiUrl');
        $response = Http::post($apiUrl . 'Users', [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'roleId' => 2,
        ]);
       
        if ($response->status() != 201){ 
            return redirect()->back()->withErrors(['error' => 'Error al registrar'])->withInput();
        }
        return redirect()->route('login')->with('success', 'Registro exitoso. Inicia sesión');
    }

}
