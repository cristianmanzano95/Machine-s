<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'sensor';

    protected $fillable = [
        'id_device' , 'id_marca', 'num_rango', 'sensibilidad', 'resolucion'
    ];

    protected $hidden = [
        'estado'
    ];

}
