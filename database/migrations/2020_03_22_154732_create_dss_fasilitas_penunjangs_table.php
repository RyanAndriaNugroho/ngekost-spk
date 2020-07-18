<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateDssFasilitasPenunjangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dss_fasilitas_penunjangs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->float('nilai');
            
            $table->timestamp('created_at')->default();
            $table->timestamp('updated_at')->default();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dss_fasilitas_penunjangs');
    }
}
