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
            $table -> date('tanggal_lahir') -> nullable();
            $table -> char('email', 100);
            $table -> char('no_hp', 40);
            $table -> char('kabupaten', 10);
            $table -> char('kecamatan', 10);
            $table -> char('kelurahan', 10);
            $table -> char('postal_code', 10);
            $table -> text('alamat');
            $table -> char('level', 1);
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
