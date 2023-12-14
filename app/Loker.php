<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loker extends Model
{
    protected $table = 'loker';

    protected $guarded = [
        'id',
        'created_at',
        'updatedcont_at',
    ];

    public function perusahaan() {
        return $this->belongsTo('App\Perusahaan', 'id_perusahaan');
    }
}
