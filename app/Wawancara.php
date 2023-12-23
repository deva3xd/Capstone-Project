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

    public function loker() {
        return $this->belongsTo('App\Loker', 'id_loker');
    }

    public function pelamar() {
        return $this->belongsTo('App\Pelamar', 'id_pelamar');
    }
}