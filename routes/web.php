<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/coba', function () {
    return view('coba');
});

Route::get('template', function () {
    return view('template');
});

Route::get('tabel', function () {
    return view('tabel');
});

// Route::get('/helo', function () {
//     return 'ini laravel saya';
// });

// Route::get('/helo/{nilai1}/{nilai2}', function ($nila1) {
//     return 'ini laravel saya';
// });

