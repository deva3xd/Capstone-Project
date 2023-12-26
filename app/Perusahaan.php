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

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function Loker() {
        return $this->hasManny(Loker::class, 'id');
    }
    public function Wawancara() {
        return $this->hasOne(Wawancara::class, 'id');
    }
}
