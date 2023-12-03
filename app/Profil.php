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

    // Field yang tidak diisi secara massal
    protected $guarded = [
        'email',
        'password',
    ];
}
