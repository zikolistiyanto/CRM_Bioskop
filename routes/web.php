<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TicketController;

/*
|--------------------------------------------------------------------------
| Default / Landing Page
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('backend.dashboard.index');
})->name('home');

/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {
    return view('backend.dashboard.index');
})->name('dashboard');

/*
|--------------------------------------------------------------------------
| User Management (INTERNAL USER)
|--------------------------------------------------------------------------
*/
Route::get('/users', [UserController::class, 'index'])
    ->name('users.index');

Route::get('/users/{id}', [UserController::class, 'show'])
    ->name('users.show');

/*
|--------------------------------------------------------------------------
| Customer Management (CRM CUSTOMER)
|--------------------------------------------------------------------------
*/
Route::get('/customers', [CustomerController::class, 'index'])
    ->name('customers.index');

Route::get('/customers/{id}', [CustomerController::class, 'show'])
    ->name('customers.show');

/*
|--------------------------------------------------------------------------
| Ticketing / Complaint (DISIAPKAN, BELUM DIPAKAI)
|--------------------------------------------------------------------------
| Jangan dipanggil dulu di UI
*/
Route::get('/tickets', [TicketController::class, 'index'])
    ->name('tickets.index');

Route::get('/tickets/{id}', [TicketController::class, 'show'])
    ->name('tickets.show');

/*
|--------------------------------------------------------------------------
| Auth (BELUM DIPAKAI)
|--------------------------------------------------------------------------
*/
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
