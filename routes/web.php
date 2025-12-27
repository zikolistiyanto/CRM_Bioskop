<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\PipelineController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\InteractionController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Default / Dashboard
|--------------------------------------------------------------------------
*/
Route::get('/', [DashboardController::class, 'index'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| Resource Routes
|--------------------------------------------------------------------------
*/
Route::resource('users', UserController::class)->only(['index', 'show']);
Route::resource('customers', CustomerController::class);
Route::resource('tickets', TicketController::class);
Route::put('tickets/{id}/status', [TicketController::class, 'updateStatus'])->name('tickets.updateStatus');
Route::resource('leads', LeadController::class);
Route::resource('interactions', InteractionController::class)->only(['index', 'store', 'destroy']);
Route::get('/pipelines', [PipelineController::class, 'index'])->name('pipelines.index');

/*
|--------------------------------------------------------------------------
| Auth
|--------------------------------------------------------------------------
*/
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
