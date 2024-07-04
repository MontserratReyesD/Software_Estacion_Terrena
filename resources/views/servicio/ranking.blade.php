@extends('layouts.app')
<title>Ranking de lanzamientos</title>    
@section('content')

    <div  class="text-center">
        <h1>Ranking de lanzamientos </h1>
        <div class="container">
            <table class="table table-bordered border-secondary table-striped">
                <thead>
                    <tr>
                        <th scope="col">Lugar</th>
                        <th scope="col">Nombre del equipo</th>
                        <th scope="col">Calificación de PDR</th>
                        <th scope="col">Celificación de video</th>
                        <th scope="col">Calificación reporte final</th>
                        <th scope="col">Calificación de vuelo</th>
                        <th scope="col">Calificación final</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous">
    </script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous">
    </script>
</body>

@endsection
