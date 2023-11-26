<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilPelamarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profil_pelamar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->text('alamat');
            $table->date('ttl');
            $table->string('jk');
            $table->bigInteger('no_telp');
            $table->string('email');
            $table->string('password');
            $table->string('riwayat_pendidikan');
            $table->text('pengalaman_organisasi');
            $table->text('pengalaman_kerja');
            $table->string('skill');
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
        Schema::dropIfExists('profil_pelamars');
    }
}
