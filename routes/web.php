<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;



Route::get('/', function () {
    return view('menu');
});

Route::resource('customers', CustomerController::class, ['except' => 'show']);

