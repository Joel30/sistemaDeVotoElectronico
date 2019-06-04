<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Electore;
use App\Candidato;
class Persona extends Model
{
    protected $table = 'personas';

    protected $fillable = [
        'nombre', 'apellidoP', 'apellidoM','direccion', 'fechaNacimiento', 'avatar'
    ];
    public function elector(){
        return $this->hasOne(Electore::class);
    }

    public function candidato(){
        return $this->hasOne(Candidato::class);
    }
}
