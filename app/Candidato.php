<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Persona;
use App\Voto;
use App\Balotaje;

class Candidato extends Model
{
    protected $tabla = 'candidatos';

    public function persona(){
        return $this->belongsTo(Persona::class);
    }

    public function voto(){
        return $this->hasOne(Voto::class);
    }

    public function balotaje(){
        return $this->hasOne(Second::class);
    }

}
