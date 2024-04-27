<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\DoctorController;

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
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/aboutus', [DashboardController::class, 'aboutus'])->name('aboutus');
Route::get('/doctor', [DashboardController::class, 'doctor'])->name('doctor');

//route to database for immunization schedule
Route::post('/schedules', [ScheduleController::class, 'store'])->name('storeSchedule');

//route to success notification on adding schedule immunization and cek schedule
Route::get('/success', [DashboardController::class, 'success'])->name('success');

//route to get schedule time
Route::get('/schedule', [ScheduleController::class, 'schedule'])->name('schedule');

//routing to hospitals available
Route::get('/hospitals', [ScheduleController::class, 'hospitals'])->name('hospitals');

//routing to vaccination information
Route::get('/vaccine', [ScheduleController::class, 'vaccine'])->name('vaccine');

//routing to user information
Route::get('/users', [ScheduleController::class, 'user'])->name('user');

//routing to doctor information
Route::get('/doctor', [DoctorController::class, 'doctor'])->name('doctor');