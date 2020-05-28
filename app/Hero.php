<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $table = 'heroes';

    public function level()
    {
        return $this->hasOne('App\Level', "id", "level_id");
        // Relacion uno a uno (hasOne)
        //(modelo de la tabla a la que se relaciona el modelo (este caso la tabla level), clave primaria de la tabla levels(id), clave foranea de la tabla a la que se relaciona (en esta caso la tabla heroes))
    }
}
