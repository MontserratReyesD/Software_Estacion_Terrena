@extends('layouts.app')
<title>Llenado de PDR</title>
@section('styles')
    <link href="{{ asset("assets/css/dual-listbox.css?v1.0") }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/dual-listbox.js?v1.0') }}"></script>
@endsection
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Llenado de documento PDR</h1>
        <div class="card mb-4">
            <div class="card-body">
                <p>Llena los siguientes apartados con base en tu documento PDR </p>
                <h2>14. Bonus: Extensión al subsistema de sensado</h2>
                <div class="mb-3">
                    <label class="form-label" for="name">14.1 Obtención de variables</label>
                    <input type="text" id="obtencion_variables" name="obtencion_variables" class="form-control"
                    required 
                    placeholder="Mostrar y describir los datos extra que serán obtenidos."
                    />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="name">14.2 Selección de sensores</label>
                    <input type="text" id="seleccion_sensores" name="seleccion_sensores" class="form-control"
                    required 
                    placeholder="Realizar la selección de los dispositivos a utilizar, justificándola a través de una tabla de ponderación con los criterios de selección propuestos."
                    />
                </div>
            </div>
           
            <div class="card-footer small text-muted">
                <a href="http://localhost/telepuertoV1L10/public/llenado/pdr/sec13">
                    <button class="btn btn-primary" type="submit">Regresar</button>
                </a>
              
                <a href="http://localhost/telepuertoV1L10/public/reporte/enviado">
                    <button class="btn btn-primary" type="submit">Enviar Reporte</button>
                </a>
            </div>
        </div>
    </div>
    <div class="card text-center">
        <div class="card-footer text-muted">
            ©Hydra Aerospace 495.
        </div>
    </div>
@endsection
@section('scripts')
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
@endsection