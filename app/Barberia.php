<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barberia extends Model
{
    protected $table = "barberia";
    protected $primaryKey = "idB";
    public $timestamps = false;

    protected $fillable = [
        
        'nombreB',
        'latitud',
        'longitud',
        'direccion',
        'propietario',
        'telefono',
        'horario',
        'user_id'
    ];

    public function servicio(){
        //relacion 1 a muchos
        return $this->hasMany("App\Servicio", 'idS');
    }

    public function productos()
    {
        return $this->belongsToMany('App\Producto','barberia_producto','barberia_idB');
    }
    public function asignarProducto($producto){ 
        $this->productos()->attach($producto);
   }

   public function servicios()
   {
       return $this->belongsToMany('App\Servicio','barberia_servicio', 'barberia_idB');
   }
   
}
