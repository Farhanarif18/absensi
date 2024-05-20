<?php

use App\Models\Pegawai;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\PegawaiController;

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

Route::get('/user/home', function () {
    return view('user/home');
})->name('home');

Route::get('/pegawai/create', function () {
    return view('admin.pegawai.create');
})->name('pegawai.create');

Route::get('/kehadiran', function () {
    return view('admin.kehadiran.index');
})->name('kehadiran'); 

Route::get('/cuti', function () {
    return view('admin.cuti.index');
})->name('cuti');

// Route::get('/pegawai', function () {
//     return view('admin.pegawai.index');
// })->name('pegawai');

Route::get('/pegawai','App\Http\Controllers\PegawaiController@index')
->name('pegawai');

Route::get('/pegawai/create','App\Http\Controllers\PegawaiController@create')
->name('create');

Route::POST('/pegawai/store','App\Http\Controllers\PegawaiController@store')
-> name ('store');

Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit')
-> name('edit');
	
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update')
-> name('update');

Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus')
-> name ('hapus'); 


// Route::get('/pegawai', [PegawaiController::class, 'index']);
