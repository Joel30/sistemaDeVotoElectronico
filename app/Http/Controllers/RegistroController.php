<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function index(){
        return view('registro');
    }

    // public function persona(){
    //     return view('persona.create');
    // }
}
