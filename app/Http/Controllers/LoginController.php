<?php

namespace App\Http\Controllers;
use App\Http\Resources\User as UserResource;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class LoginController extends Controller
{
    public function hal_login(){
        return view('login.index');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'Invalid credentials'], 401);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'Could not create token'], 500);
        }

        //Ketika login berhasil
        // return response()->json(compact('token'));

        request()->session()->regenerate();
        return redirect()->intended('dashboard');
    }

    
    // public function login(LoginRequest $request){
    //     $credentials = $request -> only('email', 'password');
    //     if(!$token = auth()->attempt($credentials)){
    //         return response()->json(['error'=>'invalid_credential'], 401);
    //     };

    //     return (new UserResource($request->user()))
    //             ->additional(['meta' => [
    //                 'token' => $token,
    //             ]]);
    // }
}
