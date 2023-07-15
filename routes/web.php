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
    // Route::resource('categories',CategoryController::class);
    Route::get('categories',[CategoryController::class,'index'])->name('categoriesAll');

    Route::get('/categories/create', [CategoryController::class, 'create']);
    Route::post('/categories', [CategoryController::class, 'store']);
    Route::get('/categories/{id}/edit', [CategoryController::class, 'edit']);
    Route::put('/categories/{id}', [CategoryController::class, 'update']);
    Route::delete('/categories/{id}', [CategoryController::class, 'destroy']);

});


