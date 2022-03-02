<?php

use App\Http\Controllers\AuthController;
 
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('profile', [AuthController::class, 'profile']);
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [AuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');
Route::get('change-password', [AuthController::class,'edit'])->name('change-password');
Route::post('change-password', [AuthController::class,'store'])->name('change.password');
Route::get('add_data', [AuthController::class, 'home'])->name('add_data');
Route::post('add_data',[AuthController::class,'profileUpdate'])->name('profileupdate');