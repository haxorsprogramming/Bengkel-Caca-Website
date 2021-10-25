<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblTimeline extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_timeline', function (Blueprint $table) {
            $table -> id();
            $table -> char('kd_timeline', 50);
            $table -> char('event', 100);
            $table -> text('deskripsi') -> nullable();
            $table -> timestamp('waktu'); 
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
        Schema::dropIfExists('tbl_timeline');
    }
}
