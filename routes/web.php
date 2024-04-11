<?php

use App\Http\Controllers\Auth\LoginController;
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
Route::get('/logout',function(){
    Auth::logout();
    return redirect('/');
})->name('logout');

Auth::routes();

Route::group(['middleware' => 'auth'], function (){
    Route::group(['as'=>'user-panel.'],function (){
        Route::resource('products', \App\Http\Controllers\ProductController::class);
    });

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::group(['middleware' => 'permission:admin-panel-access'], function (){
        Route::get('admin/dashboard', function () {
            return view('admin-panel.dashboard');
        })->name('admin.dashboard');

        Route::resource('admin/products', App\Http\Controllers\AdminPanel\ProductController::class);
    });
});


