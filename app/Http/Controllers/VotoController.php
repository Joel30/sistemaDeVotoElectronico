<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Voto;
use App\Electore;
use App\Candidato;
use App\Persona;

class VotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('voto.index');
    }

    public function enter(Request $request) {
        $electores = Persona::where('ci', $request['ci'])->first();
        $candidatos = DB::table('personas')
            ->join('candidatos', 'personas.id','candidatos.persona_id')
            ->select('candidatos.id', (
                DB::raw("CONCAT(nombre,' ',apellidoP,' ',apellidoM) AS name")))
                ->get();
        return view('voto.candidato', compact('electores', 'candidatos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $result = Voto::all();
        return view('voto.result')->with('result', $result);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $elector = Electore::find($request['elector']);
        $elector -> voto = 1;
        $elector->save();

        $voto = Voto::find($request['voto']);
        $voto -> voto = $voto['voto'] + 1;
        $voto->save();

        return redirect('voto/resultado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}