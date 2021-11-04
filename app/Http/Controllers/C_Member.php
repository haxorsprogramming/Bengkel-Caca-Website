<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\M_Profile_Member;


class C_Member extends Controller
{
    protected $C_Helper;

    public function __construct(C_Helper $C_Helper)
    {
        $this -> C_Helper = $C_Helper;
    }

    public function member_page()
    {
        $data_member = M_Profile_Member::all();
        $data_provinsi = $this -> C_Helper -> get_provinsi();
        $dr = ['data_member' => $data_member, 'data_provinsi' => $data_provinsi];
        return view('member.member_page', $dr);
    }
    public function proses_tambah_member(Request $request)
    {

    }
}
