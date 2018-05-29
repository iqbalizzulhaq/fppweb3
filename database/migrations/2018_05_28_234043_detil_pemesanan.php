<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetilPemesanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detil_pemesanan', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->string('nama_bank',50);
            $table->bigInteger('nomor_rek');
            $table->string('bukti_pembayaran',150);
            $table->foreign('id')->references('id')->on('pesans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detil_pemesanan');
    }
}