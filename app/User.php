<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = "user";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','id_role','id_user'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function myrole()
    {
        return $this->belongsTo(Role::class, 'id_role');
    }

    public function userole()
    {
        return $this->hasMany(Role::class, 'id_user');
    }

    public function simku()
    {
        return $this->hasMany(Sim::class, 'id_user');
    }

    public function dbuser()
    {
        return $this->hasMany(Database::class, 'id_user');
    }
}
