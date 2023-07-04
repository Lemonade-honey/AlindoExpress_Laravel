<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    public function login(){
        return view('login');
    }

    function postLogin(Request $req){
        $req->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Email tidak valid',
            'password.required' => 'Password wajib diisi',
        ]);

        if(Auth::attempt(['email' => $req->email, 'password' => $req->password])){
            return redirect('/dashboard');
        }else{
            return redirect()->back()->withErrors('Email atau Password salah');
        }
    }
}
