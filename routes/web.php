<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', RoleMiddleware::class . ':admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('/products', ProductController::class);
    Route::resource('/buyers', BuyerController::class);
    Route::get('/logs', [LogController::class, 'index'])->name('admin.logs');
    Route::get('/report', [ReportController::class, 'weekly'])->name('admin.report');
});

// Route::middleware('role:seller')->group(function(){/* seller routes */});
// Route::middleware('role:buyer')->group(function(){/* buyer routes */});
