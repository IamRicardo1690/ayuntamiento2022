<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarioCitasController extends Controller
{
    //
    public function index(){
        return view('calendarioCitas.vista');
    }
}
