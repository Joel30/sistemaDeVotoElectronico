<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persona = Persona::all();
        return view('persona.index')->with('personas', $persona);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('persona.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function store(Request $data)
    {
        $reglas = array ('ci' => 'required|numeric|unique:personas|digits:8',
        'nombre' => 'required|string',
        'apellidoP' => 'required|string|max:25',
        'apellidoM' => 'required|string|max:25',
        'fechaNacimiento' => 'required',
        );

        $errores = $this->validate(request(), $reglas);
        if($errores){
            $persona = new Persona;
            $persona -> ci = $data['ci'];
            $persona -> nombre = $data['nombre'];
            $persona -> apellidoP = $data['apellidoP'];
            $persona -> apellidoM = $data['apellidoM'];
            $persona -> direccion = $data['direccion'];
            $persona -> fechaNacimiento = $data['fechaNacimiento'];
    
            $persona->save();
    
            return redirect('persona');     
        }
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
     public function edit($id){
         $persona = Persona::find($id);
         return view('persona.edit', compact('persona'));
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Persona $persona)
     {
         $data = request()->validate([
             'nombre' => '',
             'apellidoP' => '',
             'apellidoM' => '',
             'direccion' => '',
             'fechaNacimiento' => '',
         ]);
         $persona->update($data);
         return redirect('persona');
     }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy(Persona $persona)
     {
         $persona->delete();
         return redirect('persona');
     }
}
