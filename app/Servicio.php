<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = "servicio";
    protected $primaryKey = "idS";
    public $timestamps = false;

    protected $fillable = ['nombreS','precio'];

    public function barberias()
    {
        return $this->belongsToMany('App\Barberia','barberia_servicio', 'servicio_idS');
    }

    public function asignarBarberia($barberia){ 

        $this->barberias()->attach($barberia);
    }
    

}

