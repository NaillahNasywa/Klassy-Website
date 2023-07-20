<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\DatauserController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\LandingController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('users/export/', [MenuController::class, 'export']);

Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route::get('Landing', [LandingController::class, 'Landing'])->name('Landing');
Route::post('Landing', [LandingController::class, 'Landing_action'])->name('Landing.action');
Route::get('Landingpage', [LandingController::class, 'Landingpage'])->name('Landingpage');
Route::post('Landingpage', [LandingController::class, 'Landingpage_action'])->name('Landingpage.action');
// Route::get('password', [LandingController::class, 'password'])->name('password');
// Route::post('password', [LandingController::class, 'password_action'])->name('password.action');
Route::get('lp', [LandingController::class, 'lp'])->name('lp');




Route::get('dashboard', function () {
    return view('dashboard.db');
});

Route::get('/dashboard/tb', function () {
    return view('dashboard.tb');
});

Route::get('/dashboard/tb', function () {
    return view('dashboard.tb');
});

Route::get('/landingpage', function () {
    return view('landingpage.lp');
});

Route::get('/notif', function () {
    return view('notif.notification');
});

Route::get('/Menu', [MenuController::class, 'index'])->name('Menu.index');
Route::get('/Menu/create', [MenuController::class, 'create'])->name('Menu.create');
Route::post('/Menu/store', [MenuController::class, 'store'])->name('Menu.store');
Route::get('/Menu/show/{id}', [MenuController::class, 'show'])->name('Menu.show');
Route::get('/Menu/{id}/edit', [MenuController::class, 'edit'])->name('Menu.edit');
Route::put('/Menu/update/{id}', [MenuController::class, 'update'])->name('Menu.update');
Route::delete('/Menu/destroy/{id}', [MenuController::class, 'destroy'])->name('Menu.destroy');

Route::get('/Pengguna', [PenggunaController::class, 'index'])->name('Pengguna.index');
Route::get('/Pengguna/create', [PenggunaController::class, 'create'])->name('Pengguna.create');
Route::post('/Pengguna/store', [PenggunaController::class, 'store'])->name('Pengguna.store');
Route::get('/Pengguna/show/{id}', [PenggunaController::class, 'show'])->name('Pengguna.show');
Route::get('/Pengguna/{id}/edit', [PenggunaController::class, 'edit'])->name('Pengguna.edit');
Route::put('/Pengguna/update/{id}', [PenggunaController::class, 'update'])->name('Pengguna.update');
Route::delete('/Pengguna/destroy/{id}', [PenggunaController::class, 'destroy'])->name('Pengguna.destroy');


Route::get('auth/{provider}', [GoogleController::class, 'redirectToProvider']);

Route::get('auth/{provider}/callback', [GoogleController::class, 'handleProviderCallback']);

Route::get('/laporan', 'App\Http\Controllers\LaporanController@index');
Route::get('/exportlaporan', 'App\Http\Controllers\LaporanController@export');