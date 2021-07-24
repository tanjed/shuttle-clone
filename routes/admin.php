<?php

use App\Http\Controllers\Admin\AuthController;

Route::group(['prefix' => 'admin'],function (){
    Route::get('/login',[AuthController::class,'showLogin'])->name('show.admin.login');
    Route::post('/login',[AuthController::class,'postLogin'])->name('post.admin.login');
});
