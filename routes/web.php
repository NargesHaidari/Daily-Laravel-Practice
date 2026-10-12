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

Route::put('/users/{id}', [UsersController::class, 'update'])->name('useraccount.update');

Route::delete('/users/{id}', [UsersController::class, 'destroy'])->name('useraccount.delete');

Route::get('/account/{id}', function($id){
    $account = Users::findOrFail($id);
    return view('account', compact('account'));
})->name('account.show');
