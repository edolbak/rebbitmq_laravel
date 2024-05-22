<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->controller(AdminController::class)->group(function (){
    Route::get('/test','index');
//    Route::get('/test1','test1');
});
