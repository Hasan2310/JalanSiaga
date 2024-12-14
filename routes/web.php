<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserReportController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\StatistikController;
use App\Http\Controllers\HomeController;


Route::get('/', [StatistikController::class, 'index'])->name('index');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/laporkan', function () {
    return view('report');
})->name('laporkan');

Route::resource('report', ReportController::class);
Route::middleware(['auth'])->group(function () {
    Route::get('/user-report', [UserReportController::class, 'index'])->name('user.reports');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('user', UserController::class);
Route::resource('admin', AdminController::class);
Route::resource('reports', ReportsController::class);

Route::resource('register', RegisterController::class);
Route::resource('login', LoginController::class);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
