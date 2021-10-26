<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblKategori extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_kategori', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_kategori', 50);
            $table -> char('nama', 100);
            $table -> text('deskripsi') -> nullable();
            $table -> char('tipe', 1); 
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
        Schema::dropIfExists('tbl_kategori');
    }
}
