<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    protected $table = "usuario";
    protected $primaryKey = "idU";
    public $timestamps = false;

    protected $fillable = ['email','clave','name'];

    public function comentarios()
    {
        return $this->belongsTo('App\Comentario','idC');
    }

    public function tieneComentarios($usuario){ 
        return $this->comentarios->flatten()->pluck('usuario_id');

   }

    /*public function asignarUsuario($comentario){ 
        $this->comentarios()->sync($comentario,false);
   

   public function asignarComentario($comentario){ 

    $this->comentarios()->attach(['usuario_id']);
    }}*/

    public function asignarComentario($comentario){ 
        $this->comentarios()->sync($comentario,false);
   }
}
