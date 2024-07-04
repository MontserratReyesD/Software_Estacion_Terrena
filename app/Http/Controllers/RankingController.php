<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RankingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        /*$equipo = registroEquipo::all();
        $alturas = DB::table('altura')->orderBy('altu_es','desc')->get();
        //dd($alturas);
        $datas = array();  
        foreach($alturas as $altura){
            
            $equipo = registroEquipo::where('id', $altura->id_equipo)->first();
            $datas[$equipo->nombre_equipo] = $altura->altu_es;
        }
        //dd($datas);
        $i=1;*/
        //return view("servicio.ranking", compact("datas","i"));
        return view("servicio.ranking");
    }
/*
   
                      @foreach ($datas as $key=> $data)
                      <tr>
                        <th scope="row">{{ $i++ }}</th>
                        <td>{{ $key }}</td>
                        <td>{{ $data }}</td>
                        <td>@fat</td>
                        <td>@mdo</td>
                      </tr>

                          
                      @endforeach
*/
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
    }

    /**
     * Display the specified resource.
     */
    public function show(Ranking $ranking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ranking $ranking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ranking $ranking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ranking $ranking)
    {
        //
    }
}
