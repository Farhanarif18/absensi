<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Hadir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pegawai;
use App\Models\User as ModelsUser;
use App\Models\User;
use Workbench\App\Models\User as AppModelsUser;
use App\Models\Cuti;
use App\Models\Kehadiran;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

use function Laravel\Prompts\select;

class PegawaiController extends Controller
{
    public function index()
    {

        //mengambil data dari table user
        $pegawai = ModelsUser::get();

        // dd($pegawai);

        $no = 1;

        // mengirim data pegawai ke view index
        return view('admin.pegawai.index', compact('pegawai', 'no'));
    }
    public function create()
    {
        //Tamabah data
        $pegawai =  '';
        return view('admin.pegawai.create', compact('pegawai'));
    }

    public function store(Request $request)
    {
        ModelsUser::create([
            'name' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'username' => $request->username,
            'password' => $request->password,
            'level' => 'user'
        ]);
        return redirect('/pegawai');
    }
    // method untuk edit data pegawai
    public function edit($id)
    {
        // $tes = Pegawai::all();

        // mengambil data pegawai berdasarkan id yang dipilih
        $pegawai = ModelsUser::where('id', $id)->get();

        // passing data pegawai yang didapat ke view edit.blade.php
        return view('admin.pegawai.update', compact('pegawai'));
    }

    // update data pegawai
    public function update(Request $request)
    {
        // dd($request-> id);
        // update data pegawai
        $pegawai = ModelsUser::where('id', $request->id)->update([
            // $request->validate([
            'name' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'username' => $request->username,
            'password' => $request->password,
            'level' => 'user'
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }

    // method untuk hapus data pegawai
    public function destroy($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('user')->where('idi', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }

    public function hadir()
    {
        $pegawai = Hadir::with('user')->get();

        $no = 1;

        return view('admin.kehadiran.index', compact('pegawai', 'no'));
    }

    public function tdmasuk(Request $request)
    {
        return view('user.tidakmasuk');
    }
    public function tidakmasuk(Request $request)
    {
        Cuti::create([
            'id_user' => $request->session()->get('id'),
            'alasan' => $request->alasan,
            'tanggal' => now()
        ]);
        return redirect()->intended('/user/home');
    }


    public function thadir()
    {
        $data = Cuti::with('cuti')->get(); // Mengambil data Cuti dengan relasi user
        $no = 1;
        return view('admin.cuti.index', compact('data', 'no'));
    }
}
