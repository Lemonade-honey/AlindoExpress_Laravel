<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $today = count(Paket::whereDate('created_at', Carbon::today())->get());
        $mount = count(Paket::whereYear('created_at', '=', date('Y'))->whereMonth('created_at', '=', date('m'))->get());
        $staf = count(DB::table('users')->get());
        return view('Dashboard/dashboard', compact('today', 'mount', 'staf'));
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
