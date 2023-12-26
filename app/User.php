<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'email', 'password', 'type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 
        'remember_token',
    ];

    public function pelamar()
    {
        return $this->hasOne(Pelamar::class, 'id_user', 'id');
    }

    public function perusahaan()
    {
        return $this->hasOne(Perusahaan::class, 'id_users', 'id');
    }

    /**
     * Check if the user has a pelamar profile.
     *
     * @return bool
     */
    public function hasPelamarProfile()
    {
        return $this->pelamar()->exists();
    }
}
