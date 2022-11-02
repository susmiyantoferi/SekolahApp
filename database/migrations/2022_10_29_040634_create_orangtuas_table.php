<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrangtuasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orangtuas', function (Blueprint $table) {
            $table->id();
            $table->string('no_kk')->unique();
            $table->string('nik_ayh')->unique();
            $table->string('nama_ayh');
            $table->string('kerja_ayh');
            $table->string('agama_ayh');
            $table->string('pend_ayh');
            $table->string('gaji_ayh');
            $table->string('status_ayh');
            $table->string('nik_ibu')->unique();
            $table->string('nama_ibu');
            $table->string('kerja_ibu');
            $table->string('agama_ibu');
            $table->string('pend_ibu');
            $table->string('gaji_ibu');
            $table->string('status_ibu');
            $table->string('hp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orangtuas');
    }
}
