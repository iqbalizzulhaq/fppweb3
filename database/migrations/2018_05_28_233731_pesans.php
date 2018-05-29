<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pesans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('pesans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('barang');
            $table->string('tipe');
            $table->integer('jlh_item');
            $table->string('design',150);
            $table->string('status',15);            
            $table->bigInteger('total_harga');
            $table->rememberToken();
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
        Schema::dropIfExists('pesans');
    }
}