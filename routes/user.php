<?php

use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\DashboardController;
Route::get('/',function (){
    return redirect()->route('show.user.login');
});
Route::group(['prefix' => 'user'],function (){
    Route::get('/login',[AuthController::class,'showLogin'])->name('show.user.login');
    Route::post('/login',[AuthController::class,'postLogin'])->name('post.user.login');
    Route::get('/register',[AuthController::class,'showRegister'])->name('show.user.register');

    Route::group(['middleware' => 'user'],function (){
        Route::get('/logout',[AuthController::class,'logout'])->name('post.user.logout');
        Route::get('/dashboard',[DashboardController::class,'index'])->name('user.dashboard');
    });
});
