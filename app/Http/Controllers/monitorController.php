<?php

namespace App\Http\Controllers;
use App\Models\Measure;
use App\Models\Variable;
use App\Models\Registro;
use App\Models\Varsen;
use App\Models\User;
use Illuminate\Http\Request;
use DB;
class monitorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $readed_data = DB::table('measures')
                        ->join('users', 'users.id', '=', 'measures.user_id')
                        ->select('measures.*', 'users.name')
                        ->get();
                        //dd($readed_data );
        return view('graphics.data', compact('readed_data'));        
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {              
        srand (time());
        //generamos un número aleatorio            
        $userId = rand(1,10);
        $user = DB::table('users')->find($userId);
        return view('graphics.monitor', compact('user'));             
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
         try {
            $texto = $request->jsondata;//obtenemos los datos del area de texto
            $porciones = explode("\r\n", $texto);//seraparamos los datas para obtener los jSON
            $trimmedArray = array_filter($porciones, 'strlen');//borramos los datos que esta en blanco
            $dataJson = array_values($trimmedArray); // 'reindex' array
            $dataSize=count($dataJson);                    
        }catch (Throwable $e) {
            report($e);
            return false;
        }        
        if($dataSize>0){
            //$userId = Auth::id();
            //alimentamos el generador de aleatorios
            srand (time());
            //generamos un número aleatorio            
            $userId = rand(1,10);
            $captura = new Measure;
            $captura->user_id = $userId;
            $captura->comentarios = 'Comentario';        
            $captura->save();
            for($i=0;$i<$dataSize;$i++){                                                               
                $dataArray = json_decode($dataJson[$i], true);//Se obtienen los registros, para ello Convert JSON string to Array                                                
                foreach ($dataArray as $key => $value) {//para obtener los datos de cada registro
                    $aguja = strpos($key, "_");//para saber si tiene un indice. strpos — Encuentra la posición de la primera ocurrencia de un substring en un string
                    $indice = null;
                    if (!$aguja === false) {//la cadena contiene un indice, entonces hay que determinar que sensor la tomo
                        $partes = explode("_", $key);
                        $key=$partes[0];//nombre de la variable
                        $indice=$partes[1];                         
                    }

                    $var = Variable::where('nombre', '=', $key)->first();//busco su clave en la tabla de variables    
                    
                    $varsen = DB::table('varsens')->where([
                            ['variable_id', '=', $var['id']],
                            ['indice', '=', $indice],
                        ])->get();//obtendo el id de la lista cruzada //dd($varsen[0]->id); 

                    $registry = new Registro; //se crea un nuevo registro 
                    $registry->measure_id= $captura->id;//colocamos el ultimo registro capturado de la medición            
                    $registry->varsen_id= $varsen[0]->id;                
                    $registry->dato= $value; //gurdamos el dato o valor medido por el sensor
                    $registry->save();                            
                }
                
            }
        }        
        return redirect()->route('data.mostrar');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $mediciones = Measure::find($id);
        $registros = DB::table('registros')->where('measure_id', $id)->get();
        //dd($mediciones);
        $datos = array();
        foreach ($registros as $key => $registro){
            //dd($registro->varsen_id);
            $varsenData = DB::table('varsens')->find($registro->varsen_id);             
            //dd($varsenData);
            $sensor = DB::table('sensores')->find($varsenData->sensor_id);
            //dd($sensor);
            $variable = DB::table('variables')->find($varsenData->variable_id);
            //dd($variable);
            $datos[$key] = array(   $registro->dato,                                                                     
                                    $variable->nombre,
                                    $sensor->nombre, 
                                    $registro->created_at,
                                    $sensor->descripcion, 
                                    $variable->descripcion);
        }
        //dd($datos);
        $fecha=$mediciones->created_at;
        return view('graphics.verdata', compact('datos','fecha'));  
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
