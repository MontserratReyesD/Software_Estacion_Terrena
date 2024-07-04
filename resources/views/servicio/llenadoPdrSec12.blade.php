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
                <h2>12. Anexos</h2>
                <div class="mb-3">
                    <label class="form-label" for="name">12.1 Resumen de requerimientos y estado actual</label>
                    <input type="text" id="resumen_requerimientos_estado_actual" name="resumen_requerimientos_estado_actual" class="form-control"
                    required 
                    placeholder="Demostrar el avance y el cumplimiento de los requerimientos descritos a la fecha."
                    />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="name">12.2 Análisis FODA</label>
                    <input type="text" id="analisis_foda" name="analisis_foda" class="form-control"
                    required 
                    placeholder="Demostrar el estado del sistema y la integración del equipo mediante un diagrama FODA."
                    />
                </div>
            </div>
           
            <div class="card-footer small text-muted">
                <a href="http://localhost/telepuertoV1L10/public/llenado/pdr/sec11">
                    <button class="btn btn-primary" type="submit">Regresar</button>
                </a>
              
                <a href="http://localhost/telepuertoV1L10/public/llenado/pdr/sec13">
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