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
                <h2>7. Subsistema de Comunicaciones y Manejo de Datos</h2>
                <div class="mb-3">
                    <label class="form-label" for="name">7.1 Diagrama de flujo de datos de estado de software</label>
                    <input type="text" id="diagrama_flujo_datos" name="diagrama_flujo_datos" class="form-control"
                    required 
                    placeholder="Describir la lógica bajo la cual se llevarán a cabo las actuaciones a realizar por el prototipo."
                    />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="name">7.2 Diagrama de comunicaciones</label>
                    <input type="text" id="diagrama_comunicaciones" name="diagrama_comunicaciones" class="form-control"
                    required 
                    placeholder="Describir como se llevará a cabo la comunicación entre cada subsistema utilizando un diagrama"
                    />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="name">7.3 Elección de dispositivos de manejos de datos</label>
                    <input type="text" id="dispositivo_manejo_datos" name="dispositivo_manejo_datos" class="form-control"
                    required 
                    placeholder="Justificar la forma y el porqué del manejo de datos."
                    />
                </div>
            </div>
           
            <div class="card-footer small text-muted">
                <a href="http://localhost/telepuertoV1L10/public/llenado/pdr/sec6">
                    <button class="btn btn-primary" type="submit">Regresar</button>
                </a>
              
                <a href="http://localhost/telepuertoV1L10/public/llenado/pdr/sec8">
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