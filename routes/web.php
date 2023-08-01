<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendingController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SuspensionController;
use App\Http\Controllers\Test1Controller;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\ViewController;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use Spatie\LaravelIgnition\Http\Controllers\UpdateConfigController;

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
    return view('welcome');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/dashboard', [DashboardController::class, 'index']);
Route::get('admin/sample', [DashboardController::class, 'index1']);
Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/form', function () {
    return view('admin.form.index');
});
Route::get('admin/settings/account', function () {
    return view('admin.settings.account.index');
});
//Outoging Voucer
Route::get('admin/outgoing', function () {
    return view('admin.form.outgoingv');
});
Route::get('client/index', function () {
    return view('client.index');
});

Route::get('office/index', function () {
    return view('admin.office.index');
});

Route::get('office/incoming/voucher', function () {
    return view('admin.office.invoucher');
});

Route::get('office/outgoing/voucher', function () {
    return view('admin.office.outgoingvoucher');
});

Route::get('admin/dashboard', [DashboardController::class, 'index']);
Route::get('admin/client', [DashboardController::class, 'index1']);
// Route::get('admin/test',[TestController::class, 'create']);
Route::get('test', [Test1Controller::class, 'register']);
Route::get('admin/dashboard/account/update', [UpdateController::class, 'create']);
Route::get('admin/dashboard/account/create', [AccountController::class, 'index']);
Route::get('admin/dashboard/account/view', [ViewController::class, 'index']);
Route::post('admin/account/store', [AccountController::class, 'store'])->name('form.submit');
Route::get(' office/Account/Settings', [SettingsController::class, 'create']);
Route::get('admin/account/pending', [PendingController::class, 'create']);



use App\Http\Controllers\VoucherController;


Route::get('admin/account/pending', [PendingController::class, 'create']);
Route::post('/vouchers/{id}/suspend', [VoucherController::class, 'suspend'])->name('suspendVoucher');
Route::post('/vouchers/{id}/release', [VoucherController::class, 'release'])->name('releaseVoucher');
Route::get(' admin/Suspension', [SuspensionController::class, 'index']);



//Login Area

Route::get('login/auth', [LoginAuthController::class, 'login']);
//logout
Route::post('/logout', [LoginAuthController::class, 'logout'])->name('logoutauth');
