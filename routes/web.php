<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;


Route::get('/', [StaticController::class, 'index'])->name('home');
Route::get('/about', [StaticController::class, 'about'])->name('about');
Route::get('/contact', [StaticController::class, 'contact'])->name('contact');


Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
Route::post('/customers/store', [CustomerController::class, 'store'])->name('customers.store');



Route::delete('customers/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy');
Route::get('customers/edit/{id}', [CustomerController::class, 'edit'])->name('customers.edit');
Route::put('customers/{customer}', [CustomerController::class, 'update'])->name('customers.update');
Route::get('customers/{id}', [CustomerController::class, 'show'])->name('customers.show');



Route::get('/upload', [UploadController::class, 'create'])->name('upload.index');
Route::post('/upload', [UploadController::class, 'store'])->name('upload.store');


///Login Page and Sign Up and logout
Route::get('/signup', [UserController::class, 'index'])->name('users.index');
Route::post('/signup', [UserController::class, 'storedata'])->name('users.signup');


Route::get('/login', [UserController::class, 'login'])->name('users.login');
Route::post('/login', [UserController::class, 'check'])->name('users.check');

Route::get('/logout', [UserController::class, 'logout'])->name('users.logout');

