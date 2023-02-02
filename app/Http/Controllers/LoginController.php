<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('fromlogin.login');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email::dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
          $request->session()->regenerate();  
          return redirect()->intended('/menu');
        }

        return back()->with('loginErorr', 'login gagal !!');
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();

        request()->session()->regenerateToken();
        
        return redirect('/');
    }
}
