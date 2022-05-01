<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

// Indexes
Route::any('/', [IndexController::class, 'login'])->name('login'); // login
Route::any('/signup', [IndexController::class, 'signup'])->name('signup'); // signup
Route::any('/dashboard', [IndexController::class, 'dashboard'])->name('dashboard'); // dashboard
Route::any('/reservations', [IndexController::class, 'reservations'])->name('reservations'); // reservations
Route::any('/createreservations', [IndexController::class, 'createreservations'])->name('createreservations'); // createreservations
Route::any('/registercustomer', [IndexController::class, 'registercustomer'])->name('registercustomer'); // registercustomer
Route::any('/customerlist', [IndexController::class, 'customerlist'])->name('customerlist'); // customerlist
Route::any('/reservationhistory', [IndexController::class, 'reservationhistory'])->name('reservationhistory'); // reservationhistory
Route::any('/logout', [IndexController::class, 'logout'])->name('logout'); // logout

// Functions
Route::any('/loginchecker', [IndexController::class, 'loginchecker'])->name('loginchecker'); // login
Route::any('/signupchecker', [IndexController::class, 'signupchecker'])->name('signupchecker'); // signup
