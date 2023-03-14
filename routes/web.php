<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TenantController;
use App\Http\Controllers\Admin\LandlordProfileController;

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
Route::prefix('/admin')->middleware(['auth','isAdmin'])->group(function(){

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin_dashboard');

    //Tenant Routes
    Route::group(['prefix' =>'tenant'], function(){
        Route::get('/', [TenantController::class, 'index'])->name('tenant_index');
        Route::get('/create', [TenantController::class, 'create'])->name('tenant_create');
        Route::post('/', [TenantController::class, 'store'])->name('tenant_store');
        Route::get('/get-tenant', [TenantController::class, 'getTenant'])->name('tenant_list');
    });

    //landlords Routes
    Route::group(['prefix' =>'landlord'], function(){
        Route::get('/', [LandlordProfileController::class, 'index'])->name('landlord_index');
        Route::get('/create', [LandlordProfileController::class, 'create'])->name('landlord_create');
        Route::post('/', [LandlordProfileController::class, 'store'])->name('landlord-store');
        Route::get('/get_landlord', [LandlordProfileController::class, 'getLandlord'])->name('landlord_list');
    });


});
