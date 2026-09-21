<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});

Route::get('/nama/{raihanhersa}', function ($param1) {
    return 'Nama saya: '.$param1;
});

Route::get('/nim/{param1?}', function ($param1 = '2557301069') {
    return 'NIM saya: '.$param1;
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
});





Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);

Route::get('/home', [HomeController::class, 'index']);