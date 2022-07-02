<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ControllerUtama;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\SalesOrderController;


Route::get('/MorpTo', [LatihanController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
