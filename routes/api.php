<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;


Route::resource('customer',App\Http\Controllers\CustomerController::class);

