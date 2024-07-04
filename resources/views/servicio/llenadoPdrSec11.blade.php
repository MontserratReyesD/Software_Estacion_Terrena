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
                <h2>11. Administración del Equipo</h2>
                <div class="mb-3">
                    <label class="form-label" for="name">11.1 Diagrama de GANTT</label>
                    <input type="text" id="diagrama_gantt" name="diagrama_gantt" class="form-control"
                    required 
                    placeholder="Incluir un diagrama que describa las fases del proyecto, así como fechas límites e hitos a cumplir."
                    />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="name">11.2 Reporte de financiamiento</label>
                    <input type="text" id="reporte_financiamiento" name="reporte_financiamiento" class="form-control"
                    required 
                    placeholder="Describir los costos de producción y de adquisición de componentes necesarios para la elaboración del sistema, utilizando la plantilla correspondiente."
                    />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="name">11.3 Ventajas de diseño</label>
                    <input type="text" id="ventajas_diseno" name="ventajas_diseno" class="form-control"
                    required 
                    placeholder="Describir las ventajas de diseño respecto a las prácticas más eficientes de diseño ingenieril."
                    />
                </div>
                <div class="mb-3">
                    <label class="form-label" for="name">11.4 Conclusiones</label>
                    <input type="text" id="conclusiones" name="conclusiones" class="form-control"
                    required 
                    placeholder="Argumentar porqué el equipo está preparado para el concurso y cuáles son los mayores aprendizajes adquiridos."
                    />
                </div>
            </div>
           
            <div class="card-footer small text-muted">
                <a href="http://localhost/telepuertoV1L10/public/llenado/pdr/sec10">
                    <button class="btn btn-primary" type="submit">Regresar</button>
                </a>
              
                <a href="http://localhost/telepuertoV1L10/public/llenado/pdr/sec12">
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