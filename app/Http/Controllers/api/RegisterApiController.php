<?php

namespace App\Http\Controllers\api;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\User as UserResource;
use App\Models\User;
use App\Http\Controllers\Controller;

class RegisterApiController extends Controller
{
    public function registerApi(RegisterRequest $request){
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),

        ]);

        $credentials = $request -> only('email', 'password');
        $token = auth()->attempt($credentials);
        return response (new UserResource($request->user()))
                ->additional(['meta' => [
                    'token' => $token,
                ]]);
}
}