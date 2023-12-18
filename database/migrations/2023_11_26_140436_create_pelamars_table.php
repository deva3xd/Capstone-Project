<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelamarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelamar', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user');
            $table->string('nama');
            $table->text('alamat');
            $table->date('ttl');
            $table->string('jk');
            $table->bigInteger('no_telp');
            $table->string('email');
            $table->string('password');
            $table->string('pendidikan');
            $table->string('nama_institusi');
            $table->text('pengalaman_organisasi');
            $table->text('pengalaman_kerja');
            $table->text('skill');
            $table->string('sertifikasi');
            $table->integer('gaji_diinginkan');
            $table->string('lampiran');
            $table->string('cv');
            $table->string('foto');
            $table->bigInteger('npwp');
            $table->bigInteger('nik');
            $table->string('status_nikah');
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
        Schema::dropIfExists('pelamars');
    }
}
