<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Reservacion;
use App\Http\Controllers\web\flash;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    public function index(){
        return view('web.home.index');
    }

    public function reservaStore(Request $request){
        try{ 
            $reserva = new Reservacion();
            $reserva->nombres=$request->nombres;
            $reserva->correo=$request->correo;
            $reserva->servicios=$request->servicios;
            $reserva->fecha_entrada=$request->fecha_entrada;
            $reserva->estado='PENDIENTE';
            $reserva->cantidad_ninos=$request->cantidad_ninos;
            $reserva->cantidad_adultos=$request->cantidad_adultos;
            // dd($reserva);
            $reserva->save();
            flash('Reserva Exitosa '.'<i class="fa fa-check"></i>'.'<br/>'.'En breve contactaremos con usted...')->success()->important();
            return redirect()->route('web.index');
        }
        catch(\Exception $e){
            flash('Reserva Rechazada '.'<i class="fa fa-times"></i>'.'<br/>'.'Inténtelo de nuevo...')->error()->important();
            return redirect()->back();
        }
    }
}
