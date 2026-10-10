<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Models\Users;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/adduser', function(){
    return view('adduser');
})->name('adduser');

Route::post('/useraccount', [UsersController::class, 'store'])->name('useraccount.store');

Route::get('/users', [UsersController::class, 'index'])->name('users.index');

Route::get('/users/{id}/edit', [UsersController::class, 'edit'])->name('useraccount.edit');

Route::post('/users/{id}', [UsersController::class, 'update'])->name('useraccount.update');
