<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class housing_datas extends Model
{
    protected $guarded = [];

    public function user () {
        return $this->belongsTo(User::class);
    }
}
