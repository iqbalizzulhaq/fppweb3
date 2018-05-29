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
            $table->string('username',16);
            $table->unsignedInteger('id');
            $table->foreign('username')->references('username')->on('members');
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
        Schema::dropIfExists('memesans');
    }
}