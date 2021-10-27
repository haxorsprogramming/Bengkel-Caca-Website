<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\M_Kategori;

class C_Dashboard extends Controller
{
    public function dashboard_page()
    {
        return view('dashboard.dashboard_page');
    }
    public function beranda_page()
    {
        echo "Halaman beranda";
    }
}
