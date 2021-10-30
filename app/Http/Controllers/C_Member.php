<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\M_Profile_Member;

class C_Member extends Controller
{
    public function member_page()
    {
        $data_member = M_Profile_Member::all();
        $dr = ['data_member' => $data_member];
        return view('member.member_page', $dr);
    }
}
