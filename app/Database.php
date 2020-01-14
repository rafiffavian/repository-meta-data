<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Database extends Model
{
    protected $table = "database";
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    // public function sistem_informasi()
    // {
    //     return $this->belongsTo(Sim::class, 'id_sim');
    // }

}
