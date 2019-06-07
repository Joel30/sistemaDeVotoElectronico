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
     * @param  array  $request
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function store(Request $request)
    {
        $reglas = array ('ci' => 'required|numeric|unique:personas|digits:8',
        'nombre' => 'required|string|max:60',
        'apellidoP' => 'required|string|max:30',
        'apellidoM' => 'required|string|max:30',
        'direccion' => 'required|string|max:25',
        // 'fechaNacimiento' => 'required|date|before_or_equal:'.\Carbon\Carbon::now()->subYears(18)->format('Y-m-d'),
        'fechaNacimiento' => 'required|date|before_or_equal:'. date('2001-m-d'),
        );
        $mensajes = array(
            'fechaNacimiento.before_or_equal' => 'La persona debe tener al menos 18 años',
        );

        $errores = $this->validate(request(), $reglas, $mensajes);
        if($errores){
            $persona = new Persona;
            $persona -> ci = $request['ci'];
            if ($request->hasFile('avatar')) {
                $persona -> avatar = $request->file('avatar')->store('public/nuevo');
            }
            $persona -> nombre = $request['nombre'];
            $persona -> apellidoP = $request['apellidoP'];
            $persona -> apellidoM = $request['apellidoM'];
            $persona -> direccion = $request['direccion'];
            $persona -> fechaNacimiento = $request['fechaNacimiento'];

            $persona->save();

            session()->flash('mensaje', 'se guardó con éxito');
            return redirect('persona/nuevo');
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
     public function update(Request $request, $id)
     {
         $persona = Persona::find($id);

         $data = request()->validate([
             'avatar' => 'image', //jpeg, png, bmp, gif o svg
             'nombre' => 'required|string|max:60',
             'apellidoP' => 'required|string|max:30',
             'apellidoM' => 'required|string|max:30',
             'direccion' => 'required|string|max:25',
             // 'fechaNacimiento' => 'required|date|before_or_equal:'.\Carbon\Carbon::now()->subYears(18)->format('Y-m-d'),
             'fechaNacimiento' => 'required|date|before_or_equal:'. date('2001-m-d'),
         ]);
         if ($request->hasFile('avatar')) {
             $data['avatar'] = $request->file('avatar')->store('public/nuevo');
         }
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
