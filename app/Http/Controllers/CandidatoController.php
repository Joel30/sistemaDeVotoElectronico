<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Candidato;
use App\Persona;
use App\Electore;
use App\Voto;

class CandidatoController extends Controller
{
    protected $redirectTo = '/home';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidato = DB::table('personas')
            ->join('candidatos', 'personas.id','candidatos.persona_id')
            ->select('candidatos.id', (
                DB::raw("CONCAT(nombre,' ',apellidoP,' ',apellidoM) AS name")))
                ->get();
        return view('candidato.index')->with('candidatos', $candidato);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $persona = Persona::select('id', (
            DB::raw("CONCAT(nombre,' ',apellidoP,' ',apellidoM) AS name")))
            ->pluck('name', 'id');
        return view('candidato.create')->with('candidatos', $persona);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'persona_id' => 'unique:candidatos'
        ], [
            'persona_id.unique' => 'La persona ya fue registrada.'
        ]);
        $candidato = new Candidato;
        $candidato -> persona_id = $request['persona_id'];

        $candidato->save();

        $voto = new Voto;
        $voto -> candidato_id = $candidato->id;
        $voto->save();

        $electore = new Electore;
        $electore -> persona_id = $request['persona_id'];
        $electore->save();

        session()->flash('mensaje', 'Registro exitoso');
        return redirect('candidato/nuevo');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
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
