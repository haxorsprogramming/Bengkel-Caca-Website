<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\M_User;

class C_Auth extends Controller
{

    public function login_page()
    {
        return view('auth.login_page');
    }

    public function login_proses(Request $request)
    {
        /**
         * Get post variable
         */
        $username = $request -> username;
        $password = $request -> password;
        /**
         * Check total user
         */
        $jumlah_user = M_User::where('username', $username) -> count();
        /**
         * Check & give result if user total < 1
         */
        if($jumlah_user == 0){
            $dr = ['status' => 'no_user'];
        }else{
            /**
             * Get password from database with model
             */
            $data_user = M_User::where('username', $username) -> first();
            $password_user_db = $data_user -> password;
            /**
             * Get password verify with native php
             */
            $cek_password = password_verify($password, $password_user_db);
            /**
             * Check if password true or false
             */
            if($cek_password == true){
                /**
                 * if true, create session & status success of respond
                 */
                // session(['user_login' => $username]);
                $dr = ['status' => 'success'];
            }else{
                /**
                 * if false, create status error of respond
                 */
                $dr = ['status' => 'wrong_password'];
            }
        }
        return \Response::json($dr);
    }

}
