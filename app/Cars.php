<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    //
    protected $table = 'cars';

    public $timestamps = false;


    public function scopeAll_list($query)
    {
        return $query->where('id', '>', 0);
    }

    public function scopeType($query, $type)
    {
        return $query->where('car_type', '=', $type);
    }

    
}
