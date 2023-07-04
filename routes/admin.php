<?php

use App\Http\Controllers\Backend\AdminController;
use Illuminate\Support\Facades\Route;

/* Admin Routes */

Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
