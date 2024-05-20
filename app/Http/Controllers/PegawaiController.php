<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pegawai;


class PegawaiController extends Controller
{
    public function index(){

    //mengambil data dari table pegwai
    $pegawai = pegawai :: get();

    // dd($pegawai);

    $no = 1;


    // mengirim data pegawai ke view index
    return view('admin.pegawai.index',compact('pegawai', 'no'));
    }
    public function create()
    {
        //Tamabah data
        $pegawai =  '' ;
        return view('admin.pegawai.create', compact('pegawai'));
    }

    public function store(Request $request)
{
    Pegawai::create([
        'nama' => $request->nama,
        'email' => $request->email,
        'alamat' => $request->alamat,
        'no_hp' => $request->no_hp,
        'username' => $request->username
    ]);
	// insert data ke table pegawai
	// DB::table('pegawai')->insert([
	// 	'nama' => $request->nama,
	// 	'email' => $request->email,
	// 	'alamat' => $request->alamat,
    //     'no_hp' => $request->no_hp,
    //     'username' => $request->username
	// ]);
	// alihkan halaman ke halaman pegawai
	return redirect('/pegawai');

    // return($request);
}
// method untuk edit data pegawai
public function edit($id)
{
    // $tes = Pegawai::all();

	// mengambil data pegawai berdasarkan id yang dipilih
	$pegawai = Pegawai::where('id', $id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('admin.pegawai.update', compact('pegawai'));
 
}

// update data pegawai
public function update(Request $request)
{
    // dd($request-> id);
	// update data pegawai
	$pegawai = Pegawai::where('id',$request->id)->update([
        // $request->validate([
		'nama' => $request->nama,
        'email' => $request->email,
        'alamat' => $request->alamat,
        'no_hp' => $request->no_hp,
        'username' => $request->username    
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/pegawai');
}


// method untuk hapus data pegawai
public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('pegawai')->where('id_pegawai',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/pegawai');
}

}
