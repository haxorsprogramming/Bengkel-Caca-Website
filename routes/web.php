<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\C_Home;
use App\Http\Controllers\C_Auth;
use App\Http\Controllers\C_Dashboard;
use App\Http\Controllers\C_Member;
use App\Http\Controllers\C_Daerah;

Route::get('/', [C_Home::class, 'home_page']);

Route::get('/auth', [C_Auth::class, 'login_page']);
Route::post('/auth/login/proses', [C_Auth::class, 'login_proses']);

// dashboard 
Route::get('/app', [C_Dashboard::class, 'dashboard_page']);
Route::get('/app/beranda', [C_Dashboard::class, 'beranda_page']);
// member page 
Route::get('/app/member', [C_Member::class, 'member_page']);
Route::post('/app/member/tambah/proses', [C_Member::class, 'proses_tambah_member']);
// testing 
// Route::get('/app/tes-kategori', [C_Dashboard::class, 'kategori_temp']);

// api 
Route::get('/daerah/get-provinsi/all', [C_Daerah::class, 'get_provinsi']);
// Route::get('/testing-api/get-provinsi', [C_Dashboard::class, 'tes_provinsi']);