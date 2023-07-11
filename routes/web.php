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

Route::middleware(['guest'])->group(function () {
    Route::get('/', [SesiController::class, 'login']);
    Route::post('/', [SesiController::class, 'postLogin'])->name('login');
});
// default kalo sudah login => /home
Route::get('/home', function () {
    return redirect('/');
});

Route::get('/test/{date}', [PaketController::class, 'DD']);

Route::middleware(['auth'])->group(function () {
    // harus login
    Route::prefix('dashboard')->group(function (){
        Route::get('/', [DashboardController::class, 'index']);
        Route::get('/logout', [DashboardController::class, 'logout']);

        Route::get('/staf', [UserController::class, 'index']);
        Route::get('/staf/find', [UserController::class, 'search']);
    });

    Route::name('paket.')->group(function () {
        Route::prefix('paket')->group(function () {
            Route::get('/', [PaketController::class, 'listPaket'])->name('index');
            Route::get('/create', [PaketController::class, 'createPaket'])->name('create');
            Route::post('/create', [PaketController::class, 'postTambahPaket'])->name('post-tambah');
    
            Route::get('/{resi}', [PaketController::class, 'detailPaket'])->name('show');
        });
    });

    Route::middleware(["role:admin"])->group(function () {
        Route::get('/dashboard/admin', [DashboardController::class, 'admin']);
        Route::get('/dashboard/staf/create', [UserController::class, 'createAccount']);
        Route::post('/dashboard/staf/create', [UserController::class, 'postCreateAccount']);
        Route::get('/dashboard/staf/delete/{id}', [UserController::class, 'deleteAccount']);
    });
});

// Route::get('/', function () {
//     return view('welcome');
// });
