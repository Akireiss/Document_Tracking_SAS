<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('admin/dashboard', [DashboardController::class, 'index']);


 Route::get('admin/sample', [DashboardController::class, 'index1']);
 Route::get('/', function () {
    return view('welcome');
});


Route::get('admin/form', function () {
    return view('admin.form.index');
});
//user

// Settings

Route::get('admin/settings/account', function () {
    return view('admin.settings.account.index');
});




//Clietn Dashbaord
Route::get('client/index', function () {
    return view('client.index');
});


Route::get('office/index', function () {
    return view('admin.office.index');
});

Route::get('office/incoming/voucher', function () {
    return view('admin.office.invoucher');
});
