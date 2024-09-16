<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api', [HomeController::class, 'index']);
Route::get('/test', [HomeController::class, 'showForm']);

Route::post('/register' , [UserController::class , 'reigster']);
Route::get('/register' , [UserController::class, 'test']);


