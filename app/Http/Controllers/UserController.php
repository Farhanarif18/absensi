<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Hadir;
use App\Models\Kehadiran;
use App\Models\Pegawai;
use App\Models\User;
use App\Models\Cuti;
use Illuminate\Http\Request;
use Carbon\Carbon;

class UserController extends Controller
{
    //
    public function index(){
        return view('user.index');
    }

    public function absen(Request $request)
    {
        $ket = 0;

        if (strtotime(Carbon::now()->format('H:i')) > strtotime("07:30")) {
            $ket = 90;
        } else {
            $ket = 100;
        }


        // dd ($request->session()->get('id'));
        Hadir::create([
            'id_user' => $request->session()->get('id'),
            'jam_datang' => Carbon::now()->format('H:i'),
            'insentive' => $ket
        ]);
        
        
        return redirect()->intended('/user/home');
    }

    


}

