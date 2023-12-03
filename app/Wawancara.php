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

    public function wawancara() {
        return $this->belongsTo('App\perusahaan', 'id_loker');
    }
}