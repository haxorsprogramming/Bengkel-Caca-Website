<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblProfileMember extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_profile_member', function (Blueprint $table) {
            $table -> id();
            $table -> char('username', 50);
            $table -> char('nama_lengkap', 20);
            $table -> date('tanggal_lahir');
            $table -> char('password', 100); 
            $table -> char('active', 1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_profile_member');
    }
}
