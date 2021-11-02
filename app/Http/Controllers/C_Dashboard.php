<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\M_Kategori;
use App\Models\M_Provinsi;

class C_Dashboard extends Controller
{
    public function dashboard_page()
    {
        return view('dashboard.dashboard_page');
    }
    public function beranda_page()
    {
        return view('dashboard.beranda_page');
    }
    public function tes_provinsi()
    {
        $provinsi = M_Provinsi::all();
        dd($provinsi);
    }
}
