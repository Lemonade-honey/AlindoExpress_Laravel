<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        return view('Dashboard/dashboard');
    }

    public function admin(){
        echo 'ini admin role';
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
