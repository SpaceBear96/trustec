<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Producto extends Model
{
    //
    protected $table = 'producto';
    protected $fillable = [
        'nombre', 'descripcion','imagen','area','dueno','estado'
    ];

    public static function Productos(){
    	return DB::table('producto')
    	->join('users','users.id','=','producto.dueno')
    	->select('producto.id','producto.nombre','producto.descripcion','producto.area','producto.imagen','producto.estado','users.email','users.name')
    	->orderByDesc('producto.id')
        ->get();
    }
}
