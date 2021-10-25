<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblKartuService extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_kartu_service', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_service', 40);
            $table -> char('member', 200);
            $table -> dateTime('waktu_registrasi');
            $table -> dateTime('waktu_service');
            $table -> dateTime('waktu_selesai');
            $table -> char('teknisi', 200);
            $table -> char('status', 50);
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
        Schema::dropIfExists('tbl_kartu_service');
    }
}
