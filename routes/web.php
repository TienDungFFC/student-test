<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\RegisterController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\Student\StudentController;

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

Route::get('/', function () {
    return view('auth/login');
});



Route::name('admin.')->group(function () {
    Route::name('auth.')->group(function() {
        Route::get('login', [LoginController::class, 'index'])->name('show-login');
        Route::post('login', [LoginController::class, 'login'])->name('login');
        Route::get('register', [RegisterController::class, 'index'])->name('show-register');
        Route::post('register', [RegisterController::class, 'register'])->name('register');
    });

    Route::prefix('admin')->middleware(['auth'])->group(function() {
        Route::prefix('dashboard')->name('dashboard.')->group(function () {
            Route::get('/', [DashboardController::class, 'index'])->name('show');
        });
        Route::prefix('student')->name('student.')->group(function () {
            Route::get('/', [StudentController::class, 'index'])->name('show');
        });
    });

});
