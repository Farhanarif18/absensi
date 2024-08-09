<?php

namespace App\Http\Controllers;

use App\Exports\CutiExport;
use App\Exports\UsersExport;
use App\Exports\HadirExport;
use App\Exports\AbsenExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelExportController extends Controller
{
    public function cuti()
    {
        return Excel::download(new CutiExport, 'Cuti.xlsx');
    }
    public function user()
    {
        return Excel::download(new UsersExport, 'User.xlsx');
    }
    public function hadir()
    {
        return Excel::download(new HadirExport, 'Hadir.xlsx');
    }
    public function absen()
    {
    return Excel::download(new AbsenExport, 'Absen.xlsx');
    }
    
}
