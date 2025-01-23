<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Reservacion;

class ReservaController extends Controller
{
    public function entrantes() {
        $entrantes=Reservacion::orderBy('created_at','desc')->where('estado','PENDIENTE')->get();
        return view('admin.pages.reservacion.entrantes')->with(['entrantes'=> $entrantes]); //variable que lleva a la vista
    }

    public function finalizadas() {
        $finalizadas=Reservacion::orderBy('created_at','desc')->where('estado','FINALIZADA')->get();
        return view('admin.pages.reservacion.finalizadas')->with(['finalizadas'=> $finalizadas]); //variable que lleva a la vista
    }

    public function rechazadas() {
        $rechazadas=Reservacion::orderBy('created_at','desc')->where('estado','RECHAZADA')->get();
        return view('admin.pages.reservacion.rechazadas')->with(['rechazadas'=> $rechazadas]); //variable que lleva a la vista
    }

    public function confirmarReserva($id){
        $reserva=Reservacion::findOrFail($id);
        $reserva->estado='FINALIZADA';
        $reserva->save();
        return redirect()->route('reservacion.entrantes');
    }

    public function rechazarReserva($id){
        $reserva=Reservacion::findOrFail($id);
        $reserva->estado='RECHAZADA';
        $reserva->save();
        return redirect()->route('reservacion.entrantes');
    }
}

