<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    public function login(){
        return view('Dashboard/login');
    }

    function postLogin(Request $req){
        $req->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'email wajib diisi',
            'password.required' => 'password wajib diisi',
        ]);

        if(Auth::attempt(['email' => $req->email, 'password' => $req->password])){
            die("SUKSES");
        }else{
            return redirect('/')->withErrors('Email or Password is Wrong');
        }
    }
}
