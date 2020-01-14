<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Isitable extends Model
{
    protected $table = "isi_table";
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function table()
    {
        return $this->belongsTo(Table::class, 'id_table');
    }
}
