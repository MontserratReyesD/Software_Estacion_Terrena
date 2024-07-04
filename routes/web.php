<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formularioController;
use App\Http\Controllers\soapController;
use App\Http\Controllers\servidorSOAPController;

use App\Http\Controllers\clienteTemperaturaSOAPController;
use App\Http\Controllers\servidorTemperaturaSOAPController;
use App\Http\Controllers\pySOAPController;
use App\Http\Controllers\creadorWSDL;
use App\Http\Controllers\consumoRestController;
use App\Http\Controllers\PostController;

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\monitorController;

use App\Http\Controllers\EquipoController;
use App\Http\Controllers\CoheteController;

use App\Http\Controllers\AlturaDatosController;
use App\Http\Controllers\RankingController;
use App\Http\Controllers\AlturaEstimadaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return view('bienvenido');//return view('welcome');
});

//Tablero
Route::get('/boceto', [dashboardController::class, 'index'])->name('tablero');

//monitorear variables
Route::get('/mostrar', [monitorController::class, 'index'])->name('data.mostrar');
Route::get('/monitor', [monitorController::class, 'create'])->name('graficas');
Route::post('/guardar', [monitorController::class, 'store'])->name('data.guardar');  
Route::get('/ver/{id}', [monitorController::class, 'show'])->name('data.ver');  
//extras
Route::get('/clima', function () {
    return view('graphics.extra.clima');
})->name('datos.clima');;
//Equipo
Route::get('/registro/equipo', [EquipoController::class, 'create'])->name('registrarEquipo');
Route::post('/guardar/equipo', [EquipoController::class, 'store'])->name('equipo.registrar');
//cohete
Route::get('/registro/altura', [AlturaDatosController::class, 'index'])->name('altura.registrar');
Route::get('/altura/{id}', [AlturaEstimadaController::class, 'show'])->name('altura');
Route::post('/calcular/altura', [AlturaEstimadaController::class, 'store'])->name('altura.calcular');
Route::post('/guardar/datos', [AlturaDatosController::class, 'store'])->name('altura.datos');
//Rankig
Route::get('/ranking', [RankingController::class, 'index'])->name('ranking');

//Rutas de las vistas, que solo son los formularios
Route::get('/evaluar/equipo', function () {
    return view('servicio.evaluarEquipo');
})->name('evaluar.equipo');;
//Rutas de secciones de PDR
Route::get('/llenado/pdr/sec1', function () {
    return view('servicio.llenadoPdrSec1');
})->name('llenado.pdr');;
Route::get('/llenado/pdr/sec2', function () {
    return view('servicio.llenadoPdrSec2');
});
Route::get('/llenado/pdr/sec3', function () {
    return view('servicio.llenadoPdrSec3');
});
Route::get('/llenado/pdr/sec4', function () {
    return view('servicio.llenadoPdrSec4');
});
Route::get('/llenado/pdr/sec5', function () {
    return view('servicio.llenadoPdrSec5');
});
Route::get('/llenado/pdr/sec6', function () {
    return view('servicio.llenadoPdrSec6');
});
Route::get('/llenado/pdr/sec7', function () {
    return view('servicio.llenadoPdrSec7');
});
Route::get('/llenado/pdr/sec8', function () {
    return view('servicio.llenadoPdrSec8');
});
Route::get('/llenado/pdr/sec9', function () {
    return view('servicio.llenadoPdrSec9');
});
Route::get('/llenado/pdr/sec10', function () {
    return view('servicio.llenadoPdrSec10');
});
Route::get('/llenado/pdr/sec11', function () {
    return view('servicio.llenadoPdrSec11');
});
Route::get('/llenado/pdr/sec12', function () {
    return view('servicio.llenadoPdrSec12');
});
Route::get('/llenado/pdr/sec13', function () {
    return view('servicio.llenadoPdrSec13');
});
Route::get('/llenado/pdr/sec14', function () {
    return view('servicio.llenadoPdrSec14');
});
Route::get('/reporte/enviado', function () {
    return view('servicio.reporteEnviado');
});
//Ruta para subir el video
Route::get('/subir/video', function () {
    return view('servicio.subirVideo');
})->name('subir.video');;
//Ruta para subir reporte final
Route::get('/reporte/final', function () {
    return view('servicio.reporteFinal');
})->name('reporte.final');;


//Usuarios
/*
Route::group(['prefix' => 'usuarios','middleware' => ['auth']], function() {
    Route::get('mostrar', ['as' => 'usuario.mostrar', 'uses' => 'UserController@index']);
    Route::get('nuevo', ['as' => 'usuario.nuevo', 'uses' => 'UserController@create']);
    Route::post('guardar', ['as' => 'usuario.guardar', 'uses' => 'UserController@store']);
    Route::get('{id}/modificar', ['as' => 'usuario.modify', 'uses' => 'UserController@edit']);
    Route::post('{id}/update', ['as' => 'usuario.update', 'uses' => 'UserController@update']);
});
*/


//Recuerda el use al inicio para que encuentre al controlador
//Ejemplo: use App\Http\Controllers\formularioController;
/*
Route::get('/productos', [formularioController::class, 'index']);//Recuerda el use al inici
Route::get('/form', [formularioController::class, 'create']);
Route::post('/form/save', [formularioController::class, 'store'])->name('producto.guardar');

Route::get('/consumo/crcind/demo', [soapController::class, 'consumirServicio']);//Recuerda el use al inici

Route::get('/cliente/temperatura', [clienteTemperaturaSOAPController::class, 'consumirTemperatura']);

Route::any('/servidor/temperatura', function() {
    //$this->middleware('verifyCsrfToken'); 
    $soapServer = new SoapServer('http://127.0.0.1/misServiciosSOAP/ctof.wsdl', array('uri' => 'http://localhost/telepuertoV1L10/public/servidor/temperatura'));
    $soapServer->setClass(servidorTemperaturaSOAPController::class);
    $soapServer->handle();
});
Route::get('/cliente/py', [pySOAPController::class, 'consumirServicioPy']);
Route::get('/crer/wsdl/ajua', [creadorWSDL::class, 'crearWSDL']);
//Consumo REST
Route::get('/gatos/aletorios', [consumoRestController::class, 'index'])->name('aletorios');;
Route::get('/gatos/favoritos', [consumoRestController::class, 'favoritos'])->name('album');;

//API REST 
Route::get('/index', [PostController::class, 'index']);
*/

/*
Route::get('/home', function () {
    return view('bienvenido');
})->name('home');
*/