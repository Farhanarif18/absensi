<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
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