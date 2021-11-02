<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\M_Provinsi;

class C_Helper extends Controller
{
    public function get_provinsi()
    {
        $provinsi = M_Provinsi::all();
        return $provinsi;
    }
}
