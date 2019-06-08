<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Persona;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('guest');
        //$this->middleware('auth');
    }*/


    public function __construct()
    {
        //$this->middleware('guest');
        $this->middleware('auth');
    }

    public function showRegistrationForm()
    {
        /*$persona = Persona::select('id', DB::raw("CONCAT(ci,': ', nombre,' ',  apellidoP,' ', apellidoM) AS name"))->pluck('name', 'id');*/

        $persona = Persona::select('id', DB::raw("CONCAT(ci,': ', nombre,' ',  apellidoP,' ', apellidoM) AS name"))->get();
        return view('auth.register')->with('personas', $persona);
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'persona_id' => 'required|numeric|unique:usuarios',
            'usuario' => 'required|string|unique:usuarios',
            'rol' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'persona_id' => $data['persona_id'],
            'usuario' => $data['usuario'],
            'rol' => $data['rol'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));

        session()->flash('mensaje', 'Registro exitoso');
        return redirect('register');
    }
}
