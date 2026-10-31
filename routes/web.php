<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;

// Landing Page
Route::get('/', [PageController::class, 'index'])->name('home');

// About Page
Route::get('/about', [PageController::class, 'about'])->name('about');

// Customer Accounts Page
Route::get('/customers', [CustomerController::class, 'index'])->name('customers');

// User Accounts Page
Route::get('/users', [UserController::class, 'index'])->name('users');
