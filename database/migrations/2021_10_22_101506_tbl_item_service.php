<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblItemService extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_item_service', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_item', 50);
            $table -> char('nama_item', 20);
            $table -> text('deskripsi') -> nullable();
            $table -> char('tipe', 1);
            $table -> char('kategori', 3);
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
        Schema::dropIfExists('tbl_item_service');
    }
}
