<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $table = 'profil_pelamar';

    protected $fillable = [
        'nama',
        'alamat',
        'ttl',
        'jk',
        'no_telp',
        'email',
        'password',
        'pendidikan',
        'nama_institusi',
        'pengalaman_organisasi',
        'pengalaman_kerja',
        'skill',
        'sertifikasi',
        'gaji_diinginkan',
        'lampiran',
        'cv',
        'npwp',
        'nik',
        'status_nikah',
    ];
}
