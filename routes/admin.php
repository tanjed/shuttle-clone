<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;

Route::group(['prefix' => 'admin'],function (){
    Route::get('/login',[AuthController::class,'showLogin'])->name('show.admin.login');
    Route::post('/login',[AuthController::class,'postLogin'])->name('post.admin.login');

    Route::group(['middleware' => 'admin'],function (){
        Route::get('/logout',[AuthController::class,'logout'])->name('post.admin.logout');
        Route::get('/dashboard',[DashboardController::class,'index'])->name('admin.dashboard');
    });
});
