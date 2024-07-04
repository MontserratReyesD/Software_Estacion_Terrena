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
                <h2>3. Subsistema de Aeroestructura y Desempeño</h2>
                <div class="mb-3">
                    <label class="form-label" for="name">3.1 Configuración y diseño de la estructura</label>
                    <input type="text" id="configuracion_diseno_estructura" name="configuracion_diseno_estructura" class="form-control"
                    required 
                    placeholder="Describir el criterio de selección en la configuración y diseño de la estructura complementado con un modelo realizado en un software de diseño por computadora (CAD). Se tomarán en cuenta todos los detalles técnicos anexos a este documento."
                    />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="name">3.2 Diseño de estabilizadores</label>
                    <input type="text" id="diseno_estabilidad" name="diseno_estabilidad" class="form-control"
                    required 
                    placeholder="Describir el diseño y configuración de las aletas estabilizadoras e incluir un diagrama de integración, complementado con un modelo realizado en un software de diseño por computadora (CAD)."
                    />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="name">3.3 Estabilidad del prototipo</label>
                    <input type="text" id="estabilidad_prototipo" name="estabilidad_prototipo" class="form-control"
                    required 
                    placeholder="Comprobar la estabilidad del prototipo con cálculos y diagramas representando los parámetros más importantes del mismo."
                    />
                </div>
            </div>
            <div class="card-footer small text-muted">
                <a href="http://localhost/telepuertoV1L10/public/llenado/pdr/sec2">
                    <button class="btn btn-primary" type="submit">Regresar</button>
                </a>
              
                <a href="http://localhost/telepuertoV1L10/public/llenado/pdr/sec4">
                    <button class="btn btn-primary" type="submit">Siguiente</button>
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