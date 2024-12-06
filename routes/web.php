<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/',[MainController::class,'allTransaction']);

Route::get('/add-transaction',[MainController::class,'AddTransaction']);
Route::post('/save-transaction',[MainController::class,'saveTransaction'])->name('save');


