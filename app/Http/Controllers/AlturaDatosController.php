<?php

namespace App\Http\Controllers;

use App\Models\Cohete;
use App\Models\Equipo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlturaDatosController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $equipos = Equipo::all();
        //dd($equipos);
        return view("servicio.alturaDatos", compact("equipos"));
        //return view("servicio.alturaDatos");
    }
    /*
            <select class="form-select" aria-label="Default select example" name="id_equipo">
              <option selected>Selecciona el nombre de tu equipo</option>
              @foreach ($equipos as $key => $equipo)
                <option value={{ $equipo->id }}>{{ $equipo->nombre_equipo}}
                </option>
              @endforeach
            </select>
    */
    public function store(Request $request)
    {
        //
         //dd($request);
         $registro = new Cohete; //se crea un nuevo registro 
         $registro->id_equipo = $request->id_equipo;
         $registro->peso= $request->peso;//colocamos el ultimo registro capturado de la medición            
         $registro->tamano_cohete= $request->tamano_cohete;  
         $registro->cap_botella= $request->cap_botella;
         $registro->can_agua= $request->can_agua;
         $registro->can_psi= $request->can_psi;
         $registro->tiempo= $request->tiempo;
         $registro->altu_es= (($registro->tiempo*$registro->tiempo)*4.9);
         $registro->save();
         //dd($registro->id);
         
         return redirect()->route('altura', [$registro->id]);
    }

}
