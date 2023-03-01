<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TenantController;

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
Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admindashboard');

    //Tenant Routes
    Route::group(['prefix' =>'tenant'], function(){
        Route::get('/', [TenantController::class, 'index'])->name('tenant_index');
        Route::get('/create', [TenantController::class, 'create'])->name('tenant_create');
        Route::post('/', [TenantController::class, 'store'])->name('tenant_store');
    });


});
