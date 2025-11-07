<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimuladorCreditosControllerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/simuladorcreditos.index', function () {
    return view('inicio');
});
