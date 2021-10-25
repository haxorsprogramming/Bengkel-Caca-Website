<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\C_Home;
use App\Http\Controllers\C_Auth;

Route::get('/', [C_Home::class, 'home_page']);

Route::get('/auth', [C_Auth::class, 'login_page']);