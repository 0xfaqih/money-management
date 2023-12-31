<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PemasukanController;

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
    return view('home', [
        'title' => 'Home',
    ]);
});

Route::get('/features', function () {
    return view('features', [
        'title' => 'Features',
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/dashboard/income', [PemasukanController::class, 'index']);

Route::resource('/dashboard/income', IncomeController::class)->middleware('auth');
Route::resource('/dashboard/expense', ExpenseController::class)->middleware('auth');

Route::get('/dashboard/income-pdf', [PdfController::class, 'cetakincome'])->name('cetak')->middleware('auth');
Route::get('/dashboard/expense-pdf', [PdfController::class, 'cetakexpense'])->name('cetak')->middleware('auth');



