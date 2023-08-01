<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\PendingController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\LoginAuthController;
use App\Http\Controllers\SuspensionController;
use App\Http\Controllers\Admin\DashboardController;

// Default welcome route
Route::get('/', function () {
    return view('welcome');
});

// Home route
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin routes
Route::prefix('admin')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index']);
    Route::get('sample', [DashboardController::class, 'index1']);
    Route::get('form', function () {
        return view('admin.form.index');
    });
    Route::get('settings/account', function () {
        return view('admin.settings.account.index');
    });

    // More admin routes can be added here
});

// Client route
Route::get('client/index', function () {
    return view('client.index');
});

// Office routes
Route::prefix('office')->middleware(['auth'])->group(function () {
    Route::get('index', function () {
        return view('admin.office.index');
    });

    Route::get('incoming/voucher', function () {
        return view('admin.office.invoucher');
    });

    Route::get('outgoing/voucher', function () {
        return view('admin.office.outgoingvoucher');
    });

    // More office routes can be added here
});

// Dashboard routes
Route::prefix('admin')->group(function () {
    Route::get('dashboard/account/update', [UpdateController::class, 'create']);
    Route::get('dashboard/account/create', [AccountController::class, 'index']);
    Route::get('dashboard/account/view', [ViewController::class, 'index']);
    Route::post('account/store', [AccountController::class, 'store'])->name('form.submit');
    Route::get('account/settings', [SettingsController::class, 'create']);
    Route::get('account/pending', [PendingController::class, 'create']);
});

// Voucher routes
Route::prefix('admin')->group(function () {
    Route::get('account/pending', [PendingController::class, 'create']);
    Route::post('vouchers/{id}/suspend', [VoucherController::class, 'suspend'])->name('suspendVoucher');
    Route::post('vouchers/{id}/release', [VoucherController::class, 'release'])->name('releaseVoucher');
    Route::get('Suspension', [SuspensionController::class, 'index']);
});

// Test routes
Route::get('test', [Test1Controller::class, 'register']);

// Login routes
Route::get('login', [LoginAuthController::class, 'login']);
Route::post('/logout', [LoginAuthController::class, 'logout'])->name('logoutauth');
