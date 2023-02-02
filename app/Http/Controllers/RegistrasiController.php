<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegistrasiController extends Controller
{
    public function index()
    {
        return view('fromlogin.regis');
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validateData['password'] = Hash::make($validateData['password']);
        
        User::create($validateData);


        return redirect('/')->with('success', 'Registrasi  berhasil! Silahkan Login!!');
    }
}
