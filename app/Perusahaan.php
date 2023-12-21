<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    protected $table = 'perusahaan';
    
    protected $guarded = [
        'id',
        'created_at',
        'updatedcont_at',
    ];

    public function users() {
        return $this->hasOne('App\Users', 'id');
    }
}
