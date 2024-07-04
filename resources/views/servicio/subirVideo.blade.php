@extends('layouts.app')
<title>Subir video</title>
@section('styles')
    <link href="{{ asset("assets/css/dual-listbox.css?v1.0") }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/dual-listbox.js?v1.0') }}"></script>
@endsection
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Subir video</h1>
        <div class="card mb-4">
            <div class="card-body">
                <p>En este apartado podras subir el enlace de tu video demostrativo </p>
                <div class="mb-3">
                    <label class="form-label" for="name">Coloca aquí tu el enlace de tu video</label>
                    <input type="link" id="enlace_video" name="enlace_video" class="form-control"
                    required/>
                </div>
            </div>
           
            <div class="card-footer small text-muted">  
                <a href="http://localhost/telepuertoV1L10/public/home">
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