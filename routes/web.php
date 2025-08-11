<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrationSuccess;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/registration', [RegistrationController::class, 'create'])->name('register.create');
Route::post('/registration', [RegistrationController::class, 'store'])->name('register.store');

Route::get('/test-email', function () {
    // Data dummy
    $nama = 'Akhmad Syaukani Akbar';
    $no_hp = '085219594240';
    $jenis_kelamin = 'Laki-laki';
    $email = 'cozycat2001@gmail.com'; // ganti dengan emailmu sendiri saat testing

    // Kirim email
    Mail::to($email)->send(new RegistrationSuccess($nama, $no_hp, $jenis_kelamin));

    return 'Email test telah dikirim ke ' . $email;
});

Route::get('/preview-email', function () {
    // Data dummy untuk preview
    $nama = 'Akhmad Syaukani Akbar';
    $no_hp = '085219594240';
    $jenis_kelamin = 'Laki-laki';

    // Tampilkan langsung di browser
    return new RegistrationSuccess($nama, $no_hp, $jenis_kelamin);
});