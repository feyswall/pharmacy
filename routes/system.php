<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\InventoriesController;
use App\Http\Controllers\PharmaciesController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\UsersManagementController;


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

Route::resource('/cat', CategoriesController::class );

Route::resource('/invetory', InventoriesController::class );

Route::resource('/pharmacy', PharmaciesController::class );

Route::resource('/sale', SalesController::class );

Route::resource('/report', ReportsController::class );

Route::resource('/user', UsersManagementController::class );