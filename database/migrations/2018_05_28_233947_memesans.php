    <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Memesans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memesans', function (Blueprint $table) {
            $table->unsignedInteger('id_user');
            $table->unsignedInteger('id_pesan');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_pesan')->references('id')->on('pesans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('memesans');
    }
}