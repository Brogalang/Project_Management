<?php

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

Route::post('/login_by_mail', [\App\Http\Controllers\LoginByMailController::class, 'login_by_mail']);

Route::group(['middleware' => 'auth'], function () {
    Route::resource('projects', App\Http\Controllers\projectController::class);
    Route::resource('rABS', App\Http\Controllers\RABController::class);
    Route::resource('rabDetails', App\Http\Controllers\rab_detailController::class);
    Route::resource('rabSubDetails', App\Http\Controllers\rab_sub_detailsController::class);
    Route::resource('invoices', App\Http\Controllers\invoicesController::class);
    Route::get('/invoices/add/{id}', [App\Http\Controllers\invoicesController::class, 'tambah'])->name('tambah');
});

//Route search
Route::get('/project', [App\Http\Controllers\projectController::class, 'search'])->name('search');


Route::resource('clients', App\Http\Controllers\clientsController::class);


Route::resource('purchaseOrders', App\Http\Controllers\purchase_orderController::class);


Route::resource('costPayments', App\Http\Controllers\cost_paymentController::class);


Route::resource('revenueInvoices', App\Http\Controllers\revenue_invoiceController::class);


Route::resource('revenuePayments', App\Http\Controllers\revenue_paymentController::class);


Route::resource('laporan_mingguan', App\Http\Controllers\lap_proyekController::class);
Route::get('/loaddata', [App\Http\Controllers\lap_proyekController::class, 'loaddata'])->name('loaddata');
Route::get('/edit_lap', [App\Http\Controllers\lap_proyekController::class, 'edit_lap'])->name('edit_lap');
Route::get('/delete_lap', [App\Http\Controllers\lap_proyekController::class, 'delete_lap'])->name('delete_lap');
Route::get('/loadpending', [App\Http\Controllers\lap_proyekController::class, 'loadpending'])->name('loadpending');
Route::get('/deletepending', [App\Http\Controllers\lap_proyekController::class, 'deletepending'])->name('deletepending');
Route::get('/loadtask', [App\Http\Controllers\lap_proyekController::class, 'loadtask'])->name('loadtask');
Route::get('/delete_task', [App\Http\Controllers\lap_proyekController::class, 'delete_task'])->name('delete_task');
