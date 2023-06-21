<?php

namespace App\Http\Controllers;
use App\Http\Resources\User as UserResource;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function hal_register(){
        return view('register.index');
    }

    public function register(RegisterRequest $request){
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),

        ]);

        // $credentials = $request -> only('email', 'password');
        // $token = auth()->attempt($credentials);

        // return response (new UserResource($request->user()))
        //         ->additional(['meta' => [
        //             'token' => $token,
        //         ]]);
        return redirect()->route('hal_login');
        // return response()->json([
        //     'msg'=>'Register berhasil',
        //     'user'=> $user
        // ]);
    }
}
