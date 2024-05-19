<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

//route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::get('/pegawai', function () {
    return view('admin.pegawai');
})->name('pegawai');
Route::get('/kehadiran', function () {
    return view('admin.kehadiran');
})->name('kehadiran');
Route::get('/cuti', function () {
    return view('admin.cuti');
})->name('cuti');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/user/home', function () {
    return view('user/home');
})->name('home');

Route::get('/index', function () {
    return view('admin.pegawai.index');
})->name('pegawai');

Route::get('/index', function () {
    return view('admin.kehadiran.index');
})->name('kehadiran');
