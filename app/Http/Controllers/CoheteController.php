<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cohete;
use App\Models\Equipo;

class CoheteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipos = Equipo::all();
        //dd($equipos);
        return view("servicio.alturaDatos", compact("equipos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
         $cohete = new Cohete; //se crea un nuevo registro 
         $cohete->id_equipo = $request->id_equipo;
         $cohete->peso= $request->peso;//colocamos el ultimo registro capturado de la medición            
         $cohete->tamano_cohete= $request->tamano_cohete;  
         $cohete->cap_botella= $request->cap_botella;
         $cohete->can_agua= $request->can_agua;
         $cohete->can_psi= $request->can_psi;
         $cohete->tiempo= $request->tiempo;
         $cohete->altu_es= (($cohete->tiempo*$cohete->tiempo)*4.9);
         $cohete->save();
         //dd($cohete->id);         
         return redirect()->route('altura', [$cohete->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
