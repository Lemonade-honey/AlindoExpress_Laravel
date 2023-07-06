<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['guest'])->group(function (){
    Route::get('/login', [SesiController::class, 'login']);
    Route::post('/login', [SesiController::class, 'postLogin'])->name('login');
});
// default kalo sudah login => /home
Route::get('/home', function (){
    return redirect('/');
});

Route::get('/paket', [PaketController::class, 'listPaket']);
Route::get('/paket/create', [PaketController::class, 'createPaket']);

Route::middleware(['auth'])->group(function (){
    // harus login
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/dashboard/logout', [DashboardController::class, 'logout']);

    Route::get('/dashboard/staf', [UserController::class, 'index']);
    Route::get('/dashboard/staf/find', [UserController::class, 'search']);
    
    Route::middleware(["role:admin"])->group(function () {
        Route::get('/dashboard/admin', [DashboardController::class, 'admin']);
        Route::get('/dashboard/staf/create', [UserController::class, 'createAccount']);
        Route::post('/dashboard/staf/create', [UserController::class, 'postCreateAccount']);
        Route::get('/dashboard/staf/delete/{id}', [UserController::class, 'deleteAccount']);
    });
});

Route::get('/', function(){
    return view('welcome');
});