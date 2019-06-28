<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sistema;
use App\Voto;
use App\Balotaje;
use App\Electore;
class SistemaController extends Controller
{
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show()
    {

        $s = Sistema::first();
        if ($s != null) {
            if ($s->estado == 0) {
                $res = 0;
                return view('voto.result', compact('res'));
            } else {
                $res = 1;
                $balotaje = Balotaje::whereYear('created_at', date('Y'))->get();

                if (sizeof($balotaje) == 2) {
                    $result = Balotaje::whereYear('created_at', date('Y'))->get();
                    return view('voto.result',compact('result', 'res'));
                } else {
                    $result = Voto::whereYear('created_at', date('Y'))->get();
                    return view('voto.result',compact('result', 'res'));
                }

            }
        }else {
            $res = 0;
            return view('voto.result', compact('res'));
        }
    }

    public function edit(Request $request)
    {

    }

    public function update(Request $request)
    {
        //dd($request);
        $estado = Sistema::all()->first();
        if ($estado == null) {
            $estado = new Sistema;
            $estado -> estado = $request['sistema'];
        } elseif ($request['sistema'] == 0) {
            $estado -> estado = 0;
        } else {
            $estado ->estado = 1;

            $elector = Electore::all();
            foreach ($elector as $key) {
                $key->voto = 0;
                $key->save();
            }
        }
        $estado->save();
        session()->flash('mensaje', $estado->estado);
        return redirect('home');

    }


}
