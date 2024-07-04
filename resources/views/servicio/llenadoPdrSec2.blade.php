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
                <h2>2. Resumen de la misión</h2>
                <div class="mb-3">
                    <input type="text" id="resumen_mision" name="resumen_mision" class="form-control"
                    required 
                    placeholder="Resumen general del proyecto."
                    />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="name">2.1 Objetivos de la misión</label>
                    <input type="text" id="objetivos_mision" name="objetivos_mision" class="form-control"
                    required 
                    placeholder="Internos: Propios de la competencia o misión.
                    Externos: Qué se pretende lograr además de participar."
                    />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="name">2.2 Listado de requisitos</label>
                    <input type="text" id="listado_requisitos" name="listado_requisitos" class="form-control"
                    required 
                    placeholder="Presentar los requisitos que debe satisfacer el cohete."
                    />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="name">2.3 Diagrama del concepto de operaciones</label>
                    <input type="text" id="diagrama_concepto_operaciones" name="diagrama_concepto_operaciones" class="form-control"
                    required 
                    placeholder="Expresar las fases que componen la misión y operación general del prototipo (CONOPS)."
                    />
                </div>
            </div>
            <div class="card-footer small text-muted">
                <a href="http://localhost/telepuertoV1L10/public/llenado/pdr/sec1">
                    <button class="btn btn-primary" type="submit">Regresar</button>
                </a>
              
                <a href="http://localhost/telepuertoV1L10/public/llenado/pdr/sec3">
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