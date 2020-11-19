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
        return $this->belongsToMany(Usuario::class);
    }
    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function likes()
    {
        return $this->hasMany('App\Like');
    }

    public function isLikedByLoggedInUser()
    {
        return $this->likes->where('user_id', auth()->user()->id)->isEmpty() ? false : true;
    }
}
