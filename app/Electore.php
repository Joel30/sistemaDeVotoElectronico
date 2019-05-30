<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Persona;

class Electore extends Model
{
    protected $tabla = 'electores';

    public function persona(){
        return $this->belongsTo(Persona::class);
    }
}
