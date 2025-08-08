<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/registration', [RegistrationController::class, 'create'])->name('register.create');
Route::post('/registration', [RegistrationController::class, 'store'])->name('register.store');