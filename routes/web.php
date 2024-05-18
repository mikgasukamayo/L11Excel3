<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
  
Route::get('users', [UserController::class, 'index']);
Route::get('users-export', [UserController::class, 'export'])->name('users.export');
Route::post('users-import', [UserController::class, 'import'])->name('users.import');

Route::resource('products', ProductController::class);