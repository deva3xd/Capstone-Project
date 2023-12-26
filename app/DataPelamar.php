<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPelamar extends Model
{
    protected $table = 'data_pelamar';

    protected $fillable = [
        'id_loker', 
        'id_perusahaan',
        'id_wawancara', 
        'id_profil_pelamar', 
        'status' 
    ];

    public function loker()
    {
        return $this->belongsTo(Loker::class, 'id_loker');
    }

    public function wawancara()
    {
        return $this->belongsTo(Wawancara::class, 'id_wawancara');
    }

    public function pelamar()
    {
        return $this->belongsTo(Pelamar::class, 'id_profil_pelamar');
    }

    public function perusahaan()
    {
        return $this->belongsTo(Perusahaan::class, 'id_perusahaan');
    }
}
