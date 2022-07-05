<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ControllerUtama;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\EloquentController;
use App\Http\Controllers\SalesOrderController;


Route::get('/MorpTo', [EloquentController::class, 'index']);

Route::get('/', function () {
    return view('Eloquent/index');
});
