<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use  SweetAlert ;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $user)
    {
        $userb = User::with('roles')->where('id', $user->id)->first();
        $role= $userb->roles->first()->name;
        if($role->role=='admin'){
            return view('administrador.admin');
        }else{
            return view('Direccion_Catastro/usuario.usuario') ;
        }
    }
    public function authenticated($request , $user){
        $userb = User::with('roles')->where('id', $user->id)->first();

        $role= $userb->roles->first()->name;

        if($role=='admin'){
            return redirect()->route('administrador') ;
        }else{
            return redirect()->route('usuario') ;
        }
    }
   
}
