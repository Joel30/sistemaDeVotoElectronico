<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Electore;
use App\Persona;

class ElectorController extends Controller
{
    protected $redirectTo = '/home';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         $elector = DB::table('personas')
             ->join('electores', 'personas.id','electores.persona_id')
             ->select('electores.id', ( 
                 DB::raw("CONCAT(nombre,' ',apellidoP,' ',apellidoM) AS name")),"ci")
                 ->get();      
         return view('elector.index')->with('electores', $elector);
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
         return view('elector.create')->with('electores', $persona);
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
             'persona_id' => 'unique:electores'
         ], [
             'persona_id.unique' => 'La persona ya fue registrada.'
         ]);
         $electore = new Electore;
         $electore -> persona_id = $request['persona_id'];
         //$electore -> voto = 0;
         //dd($elector);
         $electore->save();
         session()->flash('mensaje', 'Registro exitoso');
         return redirect('elector/nuevo');
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
