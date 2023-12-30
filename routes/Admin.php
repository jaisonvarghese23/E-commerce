<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;


Route::name ('admin.')->group(function (){
Route::get('admin/login', [LoginController::class,'login']);
Route::Post('do-login', [LoginController::class,'dologin'])->name('do.login');
Route::get('admin/Dashboard',[DashboardController::class,'dashboard'])->name('dashboard');

Route::name ('product.')->prefix('admin/products')->group(function (){

Route::get('/',[ProductController::class,'list'])->name('list');
Route::get('create',[ProductController::class,'create'])->name('create');
Route::post('save',[ProductController::class,'save'])->name('save');
Route::get('delete/{id}',[ProductController::class,'delete'])->name('delete');



});
});
