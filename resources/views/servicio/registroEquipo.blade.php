@extends('layouts.app')
<title>Registro equipo</title>
@section('styles')
    <link href="{{ asset("assets/css/dual-listbox.css?v1.0") }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/dual-listbox.js?v1.0') }}"></script>
@endsection
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Registro de equipo</h1>
        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ route('equipo.registrar') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="name">Nombre del equipo</label>
                        <input type="text" id="name_equipo" name="name_equipo" class="form-control"
                        required />
                    </div>
                    <label class="form-label" for="name">Integrantes del equipo</label>
                    <select aria-label="label" class="select1" multiple="multiple" name="integrantes[]">
                        @foreach ($users as $key => $user)
                        <option value={{ $user->id }}>{{ $user->name }}</option>
                        @endforeach
                    </select>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Sube aquí tu archivo</label>
                        <input class="form-control" type="file" id="archivo" name="archivo" required>
                    </div>
                    <script>
                    //let dlb1 = new DualListbox('.select1');
                    let dlb2 = new DualListbox('.select1', {
                    availableTitle: 'Usuarios disponibles',
                    selectedTitle: 'Usuarios seleccionados',
                    addButtonText: 'Añadir',
                    removeButtonText: 'Remover',
                    addAllButtonText: 'Añadir todos',
                    removeAllButtonText: 'Remover todos',
                    searchPlaceholder: 'Buscar'
                    });
                    </script>                    
                </div>
                <div class="card-footer small text-muted"><button class="btn btn-primary "
                type="submit">Registrar</button></div>
            </form>
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