<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/adduser', function(){
    return view('adduser');
})->name('adduser');

Route::post('/useraccount', [UsersController::class, 'store'])->name('useraccount.store');

Route::get('/users', [UsersController::class, 'index'])->name('users.index');
