<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Routing\Redirector;
use DB;
class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = DB::table('users')->get();
 
        return view('servicio.registroEquipo', ['users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {    
        $ids="";
        $registro = new Equipo; //se crea un nuevo registro 
        $registro->nombre_equipo= $request->name_equipo;//colocamos el ultimo registro capturado de la medición            
        $registro->archivo = $request->archivo;  
        foreach( $request->integrantes as $key=>$integrante){
            $ids = $ids.",".$integrante;
        }             
        $registro->id_integrantes= $ids; //gurdamos el dato o valor medido por el sensor
        $registro->save();
        return redirect()->route('graficas');
    }

    /**
     * Display the specified resource.
     */
    public function show(Equipo $equipo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Equipo $equipo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Equipo $equipo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Equipo $equipo)
    {
        //
    }
}
