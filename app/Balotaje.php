<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Candidato;

class Balotaje extends Model
{
    protected $tabla = 'balotajes';

    public function candidato(){
        return $this->belongsTo(Candidato::class);
    }

}
