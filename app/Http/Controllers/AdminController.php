<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('master');
    }

    public function persona(){
        return view('persona.create');
    }
}
