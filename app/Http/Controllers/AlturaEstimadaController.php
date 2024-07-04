<?php

namespace App\Http\Controllers;

use App\Models\Altura;
use App\Http\Controllers\Controller;
use App\Models\Equipo;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;

class AlturaEstimadaController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $registro = new Altura; //se crea un nuevo registro 
       
        $registro->altu_es= $request->altu_es; 
        $registro->save();
        return redirect()->route('altura.calcular');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $cohetes)
    {
        //
        $cohetes = Altura::where('id', $cohetes)->first();
        //dd($cohetes);
        $equipo = Equipo::where('id', $cohetes->id_equipo)->first();
        //dd($alturas);
        //dd($equipo);
        return view("servicio.alturaEstimada",compact("cohetes", "equipo") );
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Altura $altura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Altura $altura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Altura $altura)
    {
        //
    }
}
