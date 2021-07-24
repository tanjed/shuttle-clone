<?php


use App\Http\Controllers\Client\HomeController;

Route::get('/',[HomeController::class,'showHome'])->name('client.show.home');
Route::get('/business',[HomeController::class,'showBusiness'])->name('client.show.business');
Route::get('/rent',[HomeController::class,'showRent'])->name('client.show.rent');
Route::get('/women',[HomeController::class,'showWomen'])->name('client.show.women');
