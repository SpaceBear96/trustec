<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
   protected $table = 'prestamo';
    protected $fillable = [
        'id_prod', 'id_prestatario','f_prestamo','f_devolucion','lugar'
    ];

}
