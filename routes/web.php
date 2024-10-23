<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuickbookAuthController;
use Illuminate\Support\Facades\Route;
use Rap2hpoutre\LaravelLogViewer\LogViewerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('logs/{user_name}/{password}', [LogViewerController::class, 'index'])->where(['user_name' => env('LOG_USERNAME'), 'password' => env('LOG_PASSWORD')]);

Route::get('/', function () {return view('auth.login');})->name('login');
Route::get('/login', function () {return view('auth.login');})->name('login');

Route::post('login-check', [AuthController::class, 'loginCheck'])->name('login.check');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'decrypt'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    // quickbook
    Route::get('/quickbook/auth', [QuickbookAuthController::class, 'auth'])->name('quickbook.auth');
    Route::get('/quickbook/configure', [QuickbookAuthController::class, 'configure'])->name('quickbook.configure');

    Route::get('change-password', [ChangePasswordController::class,'index'])->name('change.password');
    Route::post('change-password-store', [ChangePasswordController::class,'store'])->name('change.password.store');
});

