<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sim extends Model
{
    protected $table = "sim";
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function sistem_informasi()
    {
        return $this->hasMany(Database::class, 'id_sim');
    }

    public function dbku()
    {
        return $this->hasMany(Database::class, 'id_sim');
    }

   
}
