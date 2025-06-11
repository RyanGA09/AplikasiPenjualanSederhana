<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminLogController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\StatisticController;
use App\Exports\BuyersExport;
use Maatwebsite\Excel\Facades\Excel;

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

Route::get('settings', [SettingController::class, 'index'])->name('admin.settings.index');
Route::post('settings', [SettingController::class, 'update'])->name('admin.settings.update');

Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('transactions', [TransactionController::class, 'index'])->name('admin.transactions.index');
    Route::patch('transactions/{transaction}', [TransactionController::class, 'updateStatus'])->name('admin.transactions.update');
});

Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');
});

Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::resource('categories', CategoryController::class)->names('admin.categories');
});

Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('statistics', [StatisticController::class, 'index'])->name('admin.statistics');
});

Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('export-buyers', function () {
        return Excel::download(new BuyersExport, 'buyers.xlsx');
    })->name('admin.export.buyers');
});

// Route::middleware('role:seller')->group(function(){/* seller routes */});
// Route::middleware('role:buyer')->group(function(){/* buyer routes */});

// Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
//     Route::get('logs', [AdminLogController::class, 'index'])->name('admin.logs.index');
// });
