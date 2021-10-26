<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\C_Home;
use App\Http\Controllers\C_Auth;
use App\Http\Controllers\C_Dashboard;

Route::get('/', [C_Home::class, 'home_page']);

Route::get('/auth', [C_Auth::class, 'login_page']);
Route::post('/auth/login/proses', [C_Auth::class, 'login_proses']);

// dashboard 
Route::get('/app', [C_Dashboard::class, 'dashboard_page']);


// testing 
// Route::get('/app/tes-kategori', [C_Dashboard::class, 'kategori_temp']);