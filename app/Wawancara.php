<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wawancara extends Model
{
    protected $table = 'wawancara';

    protected $guarded = [
        'id',
        'created_at',
        'updatedcont_at',
    ];

    public function datapelamar() {
        return $this->belongsTo(DataPelamar::class, 'id_data_pelamar');
    }
    public function perusahaan() {
        return $this->belongsTo(Perusahaan::class, 'id_perusahaan');
    }
    public function pelamar() {
        return $this->belongsTo(Pelamar::class, 'id_pelamar');
    }
}