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
Route::get('/user', function () {
    return view('backend.user.index');
})->name('user.index');

Route::get('/users/{id}', [UserController::class, 'show'])
    ->name('users.show');

/*
|-------------------------------------------------------------------------- 
| Customer Management
|-------------------------------------------------------------------------- 
*/
Route::get('/customer', function () {
    return view('backend.customer.index');
})->name('customer.index');

Route::get('/customer/{id}', [CustomerController::class, 'show'])
    ->name('customer.show');

/*
|--------------------------------------------------------------------------
| Ticketing / Complaint (DISIAPKAN, BELUM DIPAKAI)
|--------------------------------------------------------------------------
| Jangan dipanggil dulu di UI
*/
Route::get('/ticket', function () {
    return view('backend.ticket.index');
})->name('ticket.index');


Route::get('/tickets/{id}', [TicketController::class, 'show'])
    ->name('ticket.show');

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
