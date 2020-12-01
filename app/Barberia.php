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
        'user_id',
        'fotos'
    ];

    public function users()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function productos()
    {
        return $this->belongsToMany('App\Producto','deta_b_p', 'barberia_idB');
    }
    public function asignarProducto($producto){ 
        $this->productos()->attach($producto);
   }

   public function servicios()
   {
       return $this->belongsToMany('App\Servicio','barberia_servicio', 'barberia_idB');
   }
   
}
