<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barberia_servicio extends Model
{
    
    protected $table = "barberia_servicio";
    protected $primaryKey = "id";
    public $timestamps = false;

    protected $fillable = ['barberia_id','servicio_id'];
}
