<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ScheduleController;

Route::view('/', 'auth.login');
//Routing to Auth Controller #1
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
    Route::get('backlogin', 'backlogin')->name('backlogin');
    
 
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

//Routing to Auth Controller #2
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
     
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});

//Routing to Dashboard Controller
Route::get('/information', [DashboardController::class, 'info'])->name('information');
Route::get('/users', [DashboardController::class, 'users'])->name('users');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

//route to database for immunization schedule
Route::post('/schedules', [ScheduleController::class, 'store'])->name('storeSchedule');

//route to success notification on adding schedule immunization
Route::get('/success', [DashboardController::class, 'success'])->name('success');