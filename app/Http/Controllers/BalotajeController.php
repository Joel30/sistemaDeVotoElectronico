<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voto;
use App\Balotaje;
use App\Electore;
use App\Sistema;

class BalotajeController extends Controller
{
    public function store(Request $request){
        //dd($request);
        $candidato = Voto::select('candidato_id')
            ->whereYear('created_at', date('Y'))
            ->orderBy('voto', 'desc')->get();

        $balotaje = Balotaje::whereYear('created_at', date('Y'))->get();
        //dd(sizeof($candidato));
        if (sizeof($candidato) >= 2 && sizeof($balotaje) == 0)
        {
            $second = new Balotaje;
            $second -> candidato_id = $candidato[0]->candidato_id;
            $second->save();

            $second = new Balotaje;
            $second -> candidato_id = $candidato[1]->candidato_id;
            $second->save();

            $estado = Sistema::all()->first();
            $estado -> estado = 0;
            $estado->save();

            // $elector = Electore::all();
            // foreach ($elector as $key) {
            //     $key->voto = 0;
            //     $key->save();
            // }
            session()->flash('mensajes', 'Segunda vuelta iniciada');
            return redirect('home');
        } else {
            session()->flash('mensajes', 'Segunda vuelta No iniciada');
            return redirect('home');;
        }

    }

    public function update(Request $request)
    {
        //Controlar  votos ............................
        //dd($request);
        $this->validate(request(),[
            'voto' => 'required|numeric',
        ]);


        $elector = Electore::find($request['elector']);
        //dd($elector);
        if ($elector->voto == 1) {
            return redirect('voto/candidatos');
        }
        $elector -> voto = 1;
        $elector->save();

        $voto = Balotaje::where('candidato_id', $request['voto'])
            ->whereYear('created_at', date('Y'))->first();
        $voto -> voto = $voto['voto'] + 1;
        $voto->save();

        return redirect('voto/resultado');

    }
}
