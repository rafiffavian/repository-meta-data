<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    protected $table = "download";
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function Table()
    {
        return $this->belongsTo(Table::class, 'id_table');
    }
}
