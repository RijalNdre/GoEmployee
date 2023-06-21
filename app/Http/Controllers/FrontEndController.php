<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class FrontEndController extends Controller
{
    public function loginapi(Request $request){

        $response = Http::post("http://localhost:8000/api/loginApi",[
            'email'=>$request->input('email'),
            'password'=>$request->input('password')
        ]);
        
        if ($response->successful()) {
            // Successful login
            return redirect()->intended('dashboard');
            // Store the access token for further API requests
        } else {
            return view('login.index');
        }
    }
}
