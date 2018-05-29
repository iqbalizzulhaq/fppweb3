<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Members extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->string('username',16)->primary();
            $table->string('password',16);
            $table->string('nama', 50);
            $table->string('email', 50)->unique();
            $table->string('alamat', 150);
            $table->string('status',20);
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
        Schema::dropIfExists('members');
    }
}