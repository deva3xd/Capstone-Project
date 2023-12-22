<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPelamar extends Model
{
    protected $table = 'data_pelamar';

    protected $fillable = [
        'id_loker', 
        'id_wawancara', 
        'id_profil_pelamar', 
        'status' 
    ];

    public function lowongan()
    {
        return $this->belongsTo('App\Loker', 'id_loker');
    }

    public function wawancara()
    {
        return $this->belongsTo('App\Wawancara', 'id_wawancara');
    }

    public function pelamar()
    {
        return $this->belongsTo('App\Pelamar', 'id_pelamar');
    }
}
