<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Member extends Controller
{
    public function member_page()
    {
        return view('member.member_page');
    }
}
