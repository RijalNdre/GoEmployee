<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logoutController extends Controller
{
    public function logout(Request $request)
    {
        auth()->guard('web')->logout();
 
        request()->session()->invalidate();
 
        request()->session()->regenerateToken();
 
        return redirect()->route('hal_login');
    }
}
