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
                <h2>9. Estación Terrena</h2>
                <div class="mb-3">
                    <label class="form-label" for="name">9.1 Descripción general de la estación terrena</label>
                    <input type="text" id="descripcion_estacion_terrena" name="descripcion_estacion_terrena" class="form-control"
                    required 
                    placeholder="Realizar una descripción general de la estación terrena implementada."
                    />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="name">9.2 Diagrama de bloques de estación terrena</label>
                    <input type="text" id="diagrama_bloques_estacion_terrena" name="diagrama_bloques_estacion_terrena" class="form-control"
                    required 
                    placeholder="Demostrar la programación y los estados del software de la estación terrena."
                    />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="name">9.3 Diseño gráfico y funcional</label>
                    <input type="text" id="diseno_grafico_funcional" name="diseno_grafico_funcional" class="form-control"
                    required 
                    placeholder="Argumentar la funcionalidad del diseño y configuración propuesta de la estación terrena."
                    />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="name">9.4 Diseño del protocolo de la estación terrena</label>
                    <input type="text" id="protocolo_estacion_terrena" name="protocolo_estacion_terrena" class="form-control"
                    required 
                    placeholder="Describir el protocolo de recepción y muestreo de datos."
                    />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="name">9.5 Selección de antena</label>
                    <input type="text" id="seleccion_antena" name="seleccion_antena" class="form-control"
                    required 
                    placeholder="Justificar la forma y el porqué del manejo de datos."
                    />
                </div>
            </div>
           
            <div class="card-footer small text-muted">
                <a href="http://localhost/telepuertoV1L10/public/llenado/pdr/sec8">
                    <button class="btn btn-primary" type="submit">Regresar</button>
                </a>
              
                <a href="http://localhost/telepuertoV1L10/public/llenado/pdr/sec10">
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