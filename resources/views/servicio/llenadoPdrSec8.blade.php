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
                <h2>8. Subsistema de Recuperación</h2>
                <div class="mb-3">
                    <label class="form-label" for="name">8.1 Diseño del sistema del control de descenso</label>
                    <input type="text" id="sistema_control_descenso" name="sistema_control_descenso" class="form-control"
                    required 
                    placeholder="Describir el diseño y criterio de selección del sistema de control de descenso de acuerdo a los requerimientos establecidos, incluyendo cálculos matemáticos y diagramas que demuestren su funcionalidad."
                    />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="name">8.2 Configuración del mecanismo de liberación</label>
                    <input type="text" id="mecanismo_liberacion" name="mecanismo_liberacion" class="form-control"
                    required 
                    placeholder="Describir la selección y realizar la descripción funcional de los materiales y mecanismos operacionales para el sistema de recuperación."
                    />
                </div>
            </div>
            <div class="card-footer small text-muted">
                <a href="http://localhost/telepuertoV1L10/public/llenado/pdr/sec7">
                    <button class="btn btn-primary" type="submit">Regresar</button>
                </a>
              
                <a href="http://localhost/telepuertoV1L10/public/llenado/pdr/sec9">
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