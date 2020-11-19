<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = "producto";
    protected $primaryKey = "idP";
    public $timestamps = false;

    protected $fillable = ['nombreP','precioP', 'tipo_id', 'marca_id'];

   
    public function barberias()
    {
        return $this->belongsToMany('App\Barberia','deta_b_p', 'producto_idP');
    }

    public function asignarBarberia($barberia){ 
        
        $this->barberias()->attach($barberia);
    }
   

    public function tipo()
    {
        return $this->belongsTo('App\Tipo', 'tipo_id');
    }

    
    public function marca(){
        
        return $this->belongsTo('App\Marca', 'idP');
    }
}