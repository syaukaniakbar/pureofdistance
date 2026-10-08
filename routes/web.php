<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\RegionController;
use Illuminate\Support\Facades\Mail;


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



Route::get('/test-mail', function () {
    try {
        Mail::raw('Hello! This is a test email from Pureofdistance Run 2026.', function ($message) {
            $message->to('syaukaniakbar2019@gmail.com')
                    ->subject('Test Email - Pureofdistance Run 2026');
        });

        return 'Email sent successfully!';
    } catch (\Throwable $e) {
        return 'Email failed: ' . $e->getMessage();
    }
});

