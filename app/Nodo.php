<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nodo extends Model
{
    //
    protected $table = 'nodo';

    protected $fillable = [
        'nodo_ip' , 'mac', 'NIT'
    ];

    protected $hidden = [
        'estado'
    ];
}
