<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\RegionController;


/*
|--------------------------------------------------------------------------
| Home
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');



Route::get('/rules', function () {
    return view('pages.rules');
})->name('rules');

Route::get('/check-registration', function () {
    return view('pages.check-registration');
})->name('check-registration');


/*
|--------------------------------------------------------------------------
| Region
|--------------------------------------------------------------------------
*/


Route::get('/regions/cities/{province}', [RegionController::class, 'cities'])
    ->name('regions.cities');

Route::get('/regions/districts/{city}', [RegionController::class, 'districts'])
    ->name('regions.districts');

Route::get('/regions/villages/{district}', [RegionController::class, 'villages'])
    ->name('regions.villages');

/*
|--------------------------------------------------------------------------
| Registration
|--------------------------------------------------------------------------
*/

Route::get('/registration', [RegistrationController::class, 'create'])->name('register.create');


Route::post('/registration', [RegistrationController::class, 'store'])->name('register.store');


/*
|--------------------------------------------------------------------------
| Checkout
|--------------------------------------------------------------------------
*/

Route::get('/checkout/{orderId}', [RegistrationController::class, 'checkout'])->name('checkout.show');


/*
|--------------------------------------------------------------------------
| Payment
|--------------------------------------------------------------------------
*/

Route::get('/payment/status/{orderId}', [RegistrationController::class, 'paymentStatus'])->name('payment.status');

