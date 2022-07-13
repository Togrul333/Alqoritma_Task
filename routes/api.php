<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::post('bond/{id}/order',[\App\Http\Controllers\OrderController::class,'order']);
Route::get('bond/{id}/payouts',[\App\Http\Controllers\BondController::class,'payouts']);
Route::post('bond/order/{id}',[\App\Http\Controllers\BondController::class,'amount']);
