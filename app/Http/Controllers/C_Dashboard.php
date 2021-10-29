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
        return view('dashboard.beranda_page');
    }
    public function tes_api(Request $request)
    {
        $key = $request->bearerToken();
        $dr = ['key' => $key];
        return \Response::json($dr);
    }
}
