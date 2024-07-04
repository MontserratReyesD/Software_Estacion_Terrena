@extends('layouts.app')
<title>Reporte final</title>
@section('styles')
    <link href="{{ asset("assets/css/dual-listbox.css?v1.0") }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/dual-listbox.js?v1.0') }}"></script>
@endsection
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Reporte final</h1>
        <div class="card mb-4">
            <div class="card-body">
                <h2>En este apartado sube tu reporte final</h2>
                <div class="mb-3">
                    <label class="form-label" for="name">Coloca aquí tu reporte final</label>
                    <input type="file" id="reporte_final" name="reporte_final" class="form-control"
                    required/>
                </div>
            </div>
           
            <div class="card-footer small text-muted">
                <a href="http://localhost/telepuertoV1L10/public/reporte/enviado">
                    <button class="btn btn-primary" type="submit">Enviar</button>
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