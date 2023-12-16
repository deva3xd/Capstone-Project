<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';

    protected $guarded = [
        'id',
        'created_at',
        'updatedcont_at',
    ];

    public function perusahaan() {
        return $this->belongsTo('Admin\Admin', 'id');
    }

}
