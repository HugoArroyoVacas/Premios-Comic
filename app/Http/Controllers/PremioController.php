<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\premio;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class PremioController extends Controller
{
    public function listado(){
    	$premios = Premio::All()->sortByDesc('fecha');

    	return view('/dashboard',['listaPremios' => $premios]);
    }

    public function formCrearPremio(){
    	return view('crearPremio');
    }

    public function crearPremio(Request $datos){
    	
    	$p = new Premio();

    	$p->fecha = $datos->fecha;
    	$p->autor = $datos->autor;
    	$p->comic = $datos->comic;
    	$p->portada = "";
    	$p->user_id = Auth::User()->id;

    	$p->save();

    	return redirect()->route('dashboard');
    }

    public function miListado(){

        $misDatos = Auth::User()->premios;

        return view('/mispremios',['misPremios' => $misDatos]);
    }

    public function borrarId($id){
        $p = Premio::find($id);

        if ($p->user_id == Auth::User()->id) {
            $p->delete();
        }

        $lp = Auth::User()->premios;

        return view('/mispremios',['misPremios' => $lp]);
    }

    public function modificarId($id){
        $p = Premio::find($id);

        if ($p->user_id == Auth::User()->id) {
            return view('crearPremio',['premio'=>$p]);
        }else{
            return view('/mispremios',['misPremios' => $lp]);
        }
    }
}
