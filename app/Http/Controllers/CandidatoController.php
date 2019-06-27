<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
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

     //19:35

    public function index(Request $request)
    {
        $candidato = DB::table('personas')
            ->join('candidatos', 'personas.id','candidatos.persona_id')
            ->select('candidatos.id', 'candidatos.created_at', (
                DB::raw("CONCAT(nombre,' ',apellidoP,' ',apellidoM) AS name")))
                ->orderBy('created_at', 'asc')
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
            ->where('created_at', '>=', date('Y'))
            ->get();
            //->pluck('name', 'id');
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
        $c = Candidato::whereYear('created_at', '=', date('Y'))->get();
        $c = $c->where('persona_id', $request['persona_id'])->first();
        if ($c == null) {
            $c = $request['persona_id'];
        } else {
            $c = null;
        }
        $data = request()->validate([
            'persona_id' => Rule::unique('candidatos')
            ->ignore($c, 'persona_id')
        ], [
            'persona_id.unique' => 'La persona ya fue registrada.'
        ]);

        $candidato = new Candidato;
        $candidato -> persona_id = $request['persona_id'];

        $candidato->save();

        $voto = new Voto;
        $voto -> candidato_id = $candidato->id;
        $voto->save();

        $e = Electore::where('persona_id',$request['persona_id'])->first();

        if ($e == null) {
            $electore = new Electore;
            $electore -> persona_id = $request['persona_id'];
            $electore->save();
        }
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
