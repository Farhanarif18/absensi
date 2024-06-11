<?php

use App\Models\Pegawai;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Models\User;

//route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard','App\Http\Controllers\AdminController@index' )->name('dashboard');

Route::get('/user/home', function () {
    return view('user/index');
})->name('home');

Route::get('/pegawai/create', function () {
    return view('admin.pegawai.create');
})->name('pegawai.create');

// Route::get('/kehadiran','App\Http\Controllers\UserController@index')
// ->name('kehadiran');



// Route::get('/kehadiran', function () {
//     return view('admin.ke    an.index');
// })->name('kehadiran'); 

// Route::get('/cuti', function () {
//     return view('admin.cuti.index');
// })->name('cuti');

Route::get('/kehadiran', function () {
    return view('admin.kehadiran.index');
})->name('kehadiran');

// Route::get('/pegawai', function () {
//     return view('admin.pegawai.index');
// })->name('pegawai');
Route::get('/cuti', 'App\Http\Controllers\PegawaiController@thadir')
    ->name('cuti');

Route::get('/pegawai', 'App\Http\Controllers\PegawaiController@index')
    ->name('pegawai');

Route::get('/pegawai/create', 'App\Http\Controllers\PegawaiController@create')
    ->name('create');

Route::POST('/pegawai/store', 'App\Http\Controllers\PegawaiController@store')
    ->name('store');

Route::get('/pegawai/edit/{id}', 'App\Http\Controllers\PegawaiController@edit')
    ->name('edit');

Route::post('/pegawai/update', 'App\Http\Controllers\PegawaiController@update')
    ->name('update');

Route::post('/absen', 'App\Http\Controllers\UserController@absen')->name('absen');

Route::post('/absen/pulang', 'App\Http\Controllers\UserController@absenPulang')->name('absenPulang');

// Route::delete('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@destroy')
// -> name ('hapus'); 

Route::get('/delete/{id}', 'App\Http\Controllers\PegawaiController@destroy')->name('destroy');

Route::get('/kehadiran', 'App\Http\Controllers\PegawaiController@hadir')
    ->name('kehadiran');

Route::get('/pegawai/tidakmasuk', 'App\Http\Controllers\PegawaiController@tdmasuk')
    ->name('tdmasuk');

Route::post('/pegawai/tidakmasuk', 'App\Http\Controllers\PegawaiController@tidakmasuk')
    ->name('tidakmasuk');

Route::get('/pegawai/cuti', 'App\Http\Controllers\PegawaiController@cuti')
    ->name('cuti');

Route::post('/pegawai/cuti', 'App\Http\Controllers\PegawaiController@prosesCuti')
    ->name('prosesCuti');

Route::get('/thadir', [PegawaiController::class, 'thadir'])->name('thadir');

Route::get('/cuti', [PegawaiController::class, 'dataCuti'])->name('dataCuti');


// Route::get('/pegawai', [PegawaiController::class, 'index']);

// metode nya get lalu masukkan namespace AuthController    
// attribute name merupakan penamaan dari route yang kita buat
// kita tinggal panggil fungsi route(name) pada layout atau controller
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'proses_login'])->name('proses_login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'proses_register'])->name('proses_register');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
// kita atur juga untuk middleware menggunakan group pada routing
// didalamnya terdapat group untuk mengecek kondisi login
// jika user yang login merupakan admin maka akan diarahkan ke AdminController
// jika user yang login merupakan user biasa maka akan diarahkan ke UserController
Route::group(['middleware' => ['guest']], function () {
    Route::get('admin', [AdminController::class, 'index'])->name('admin');
    Route::get('user', [UserController::class, 'index'])->name('user');

    // Route::group(['middleware' => ['cek_login:admin']], function () {
    //     Route::resource('admin', AdminController::class);
    // });
    // Route::group(['middleware' => ['cek_login:user']], function () {
    //     Route::resource('user', UserController::class);
    // });
});
