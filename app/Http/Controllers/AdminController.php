<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\cuti;
use App\Models\Hadir;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){

        $pegawai = User::all();
        $hadir = Hadir::all();
        $cuti = cuti::all();

        return view('admin.dashboard1', compact('pegawai', 'hadir', 'cuti'));
    }
}
