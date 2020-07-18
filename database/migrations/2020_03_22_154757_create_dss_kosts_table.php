<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateDssKostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dss_kosts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->integer('harga');
            $table->integer('jarak');
            $table->integer('luas_kamar');
            $table->string('foto');
            $table->string('tipe');
            $table->unsignedInteger('id_fasilitas_kamar')->index('fk_fasilitas_kamar');
            $table->unsignedInteger('id_fasilitas_penunjang')->index('fk_fasilitas_penunjang');
            $table->unsignedInteger('id_fasilitas_lingkungan')->index('fk_fasilitas_lingkungan');


            // $table->timestamp('created_at')->nullable();
            // $table->timestamp('updated_at')->nullable();

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
        Schema::dropIfExists('dss_kosts');
    }
}
