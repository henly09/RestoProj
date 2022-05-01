<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\tblcustomerController;
use App\Http\Controllers\tblreservationsController;

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
Route::any('/menu', [IndexController::class, 'menu'])->name('menu'); // menu
Route::any('/logout', [IndexController::class, 'logout'])->name('logout'); // logout

// Index Functions
Route::any('/loginchecker', [IndexController::class, 'loginchecker'])->name('loginchecker'); // loginchecker
Route::any('/signupchecker', [IndexController::class, 'signupchecker'])->name('signupchecker'); // signupchecker

// Customer
Route::any('/customerregister', [tblcustomerController::class, 'customerregister'])->name('customerregister'); // customerregister
Route::any('/deletecustomerinfo/{Cust_id}', [tblcustomerController::class, 'deletecustomerinfo'])->name('deletecustomerinfo'); // deletecustomerinfo
Route::any('/editcustomerinfo/{Cust_id}', [tblcustomerController::class, 'editcustomerinfo'])->name('editcustomerinfo'); // editcustomerinfo
Route::any('/customeredited', [tblcustomerController::class, 'customeredited'])->name('customeredited'); // customeredited

// Reservation
Route::any('/issuereservation', [tblreservationsController::class, 'issuereservation'])->name('issuereservation'); // createreservation
Route::any('/deletereservation/{Res_id}', [tblreservationsController::class, 'deletereservation'])->name('deletereservation'); // deletereservation
