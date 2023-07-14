<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::group(
//     ['namespace' => 'admin', 'prefix'=>'admin'], function(){
//         Route::get('/dashboard',[DashboardController::class,'index']);
//     }
// );

Route::prefix('admin')->group(function () {
    Route::get('dashboard',[DashboardController::class,'index'])->name('admin');
    Route::resource('categories',CategoryController::class);
});


