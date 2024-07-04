@extends('layouts.app')
<title>Hoja de evaluación de equipo</title>
@section('styles')
    <link href="{{ asset("assets/css/dual-listbox.css?v1.0") }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/dual-listbox.js?v1.0') }}"></script>
@endsection
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Evaluación de equipo</h1>
        <div class="card mb-4">
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label" for="name">Nombre del equipo</label>
                    <input type="text" id="name_equipo" name="name_equipo" class="form-control"
                    required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="name">Nombre del evaluador</label>
                    <input type="text" id="name_evaluador" name="name_evauador" class="form-control"
                    required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="name">Presentación del cohete</label>
                    <input type="text" id="presentacion_cohete" name="presentacion_cohete" class="form-control"
                    required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="name">Presentación de la estación terrena</label>
                    <input type="text" id="presentacion_estacion_terrena" name="presentacion_estacion_terrena" class="form-control"
                    required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="name">Telemetría</label>
                    <input type="text" id="telemetría" name="telemetría" class="form-control"
                    required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="name">Organización del equipo</label>
                    <input type="text" id="organizacion_equipo" name="organizacion_equipo" class="form-control"
                    required />
                </div>            
                <div class="mb-3">
                    <label class="form-label" for="name">Desempeño durante la prueba</label>
                    <input type="text" id="desempeño_prueba" name="desempeño_prueba" class="form-control"
                    required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="name">Calificación de vuelo</label>
                    <input type="text" id="calificacion_vuelo" name="calificacion_vuelo" class="form-control"
                    required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="name">Despliegue de paracaidas</label>
                    <input type="text" id="despliegue_paracaidas" name="despliegue_paracaidas" class="form-control"
                    required />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="name">Observaciones</label>
                    <input type="textarea" id="observaciones" name="observaciones" class="form-control"
                    required />
                </div>
                <div class="mb-3">
                    <p class="form-label" for="name">Calificación final: ##</p>
                </div>
            </div>
            
            <div class="card-footer small text-muted">
                <a href="http://localhost/telepuertoV1L10/public/home">
                    <button class="btn btn-primary" type="submit">Regresar</button>
                </a>
              
                <div style="text-align: right;width:550px">
                    <button class="btn btn-primary "
                        type="submit">Guardar evaluación</button>
                </div>
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