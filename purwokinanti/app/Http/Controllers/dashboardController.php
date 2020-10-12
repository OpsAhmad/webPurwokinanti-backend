<?php

namespace App\Http\Controllers;

use App\Models\Keluarga;
use App\Models\Kependudukan;
use App\Models\Visitor;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    /*
    * Function index() / Menampilkan data-data umum
    */
    public function index()
    {
        /* Visitor */
        $visitor = Visitor::where('id', 1)->first()->count;
        /* Penduduk */
        $jumlahPenduduk = new Kependudukan;
        /* Keluarga */
        $jumlahKeluarga = new Keluarga;
        return view('admin.dashboard', compact('visitor', 'jumlahPenduduk', 'jumlahKeluarga'));
    }
}
