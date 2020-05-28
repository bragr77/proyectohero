<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $table = 'levels';

    public function heroes()
    {
        return $this->hasMany('App\Hero');
    }
}
