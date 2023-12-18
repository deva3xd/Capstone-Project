<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelamar extends Model
{
    protected $table = 'pelamar';

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
        'foto',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
