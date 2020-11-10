<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = "marcas";
    protected $primaryKey = "idM";
    public $timestamps = false;

    protected $fillable = ['nombreM'];

    public function producto(){
        return $this->hasMany('App\Producto', 'idP');
    }
    
}
