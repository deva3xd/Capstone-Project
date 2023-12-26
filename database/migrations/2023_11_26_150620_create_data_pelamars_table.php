<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataPelamarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pelamar', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_loker');
            $table->integer('id_perusahaan');
            $table->integer('id_wawancara')->nullable();
            $table->integer('id_profil_pelamar');
            $table->string('status');
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
        Schema::dropIfExists('data_pelamars');
    }
}
