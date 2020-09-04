<?php

namespace Peliculas;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
   protected $table='pelicula';

   protected $primaryKey='id_pelicula';

   public $timestamps=true;

   protected $fillable =[
   	'titulo',
   	'año',
   	'director',
   	'portada',
   	'alquiler',
   	'resumen'
   ];

   protected $guarded =[  	
   ];
}
