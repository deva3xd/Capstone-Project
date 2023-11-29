<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLokersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loker', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_perusahaan');
            $table->string('nama');
            $table->string('jabatan');
            $table->string('lulusan');
            $table->string('jurusan');
            $table->string('skill');
            $table->text('pengalaman_kerja');
            $table->string('syarat');
            $table->string('tanggung_jawab');
            $table->text('deskripsi');
            $table->date('batas_lamaran');
            $table->text('alamat');
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
        Schema::dropIfExists('lokers');
    }
}
