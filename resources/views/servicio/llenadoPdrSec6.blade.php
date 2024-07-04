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
                <h2>6. Subsistema de Potencia y Diseño Electrónico</h2>
                <div class="mb-3">
                    <label class="form-label" for="name">6.1 Diseño de circuito eléctrico</label>
                    <input type="text" id="circuito_electrico" name="circuito_electrico" class="form-control"
                    required 
                    placeholder="Mostrar y describir de manera clara la conectividad entre los componentes electrónicos utilizando un diagrama."
                    />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="name">6.2 Distribución de potencia</label>
                    <input type="text" id="distribuidor_potencia" name="distribuidor_potencia" class="form-control"
                    required 
                    placeholder="Demostrar porqué el subsistema de potencia es capaz de alimentar a todos los subsistemas dependientes del mismo"
                    />
                </div>
            </div>
            <div class="card-footer small text-muted">
                <a href="http://localhost/telepuertoV1L10/public/llenado/pdr/sec5">
                    <button class="btn btn-primary" type="submit">Regresar</button>
                </a>
              
                <a href="http://localhost/telepuertoV1L10/public/llenado/pdr/sec7">
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