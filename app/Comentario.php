<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $table = "comentario";
    protected $primaryKey = "idC";
    public $timestamps;

    protected $fillable = ['comentario'];

    public function usuarios(){
        return $this->belongsToMany(Usuario::class)->withPivot('nombre');
    }

}
