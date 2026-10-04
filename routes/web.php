<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/adduser', function(){
    return view('adduser');
});

Route::post('/useraccount', [UsersController::class, 'store'])->name('useraccount.store');