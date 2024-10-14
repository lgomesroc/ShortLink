<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

// Rota para a página inicial
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Rotas de autenticação
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.submit');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Rota para dashboard
Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard')->middleware('auth');

// Rota para exibir o formulário de registro
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
// Rota para processar o registro
Route::post('register', [AuthController::class, 'register'])->name('register.submit');

// Rota para alterar a senha
Route::get('change-password', [AuthController::class, 'showChangePasswordForm'])->name('change.password');
Route::post('change-password', [AuthController::class, 'changePassword'])->name('change.password.submit');

// Rota para página inicial após login
Route::get('/home', [HomeController::class, 'index'])->name('home');
