<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblProduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_produk', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_produk', 50);
            $table -> char('nama_produk', 20);
            $table -> text('deskripsi') -> nullable();
            $table -> char('kategori', 3);
            $table -> char('satuan', 100);
            $table -> integer('harga'); 
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
        Schema::dropIfExists('tbl_produk');
    }
}
