@extends('layouts.app')
<title>Altura Estimada</title>
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <div class="card shadow-lg border-0 rounded-lg mt-4">
        <div class="card-header"><h3 class="text-center font-weight-light my-3">Altura estimada</h3></div>
        <div class="card-body">
          <div class="small mb-3 text-muted">Llena los siguientes campos con base a las dimensiones de tu cohete.</div>
          <form method="POST" action="{{ route('altura.datos') }}">
            @csrf
            <!--aqui va lo que esta en el comentario del controlador-->
            <select class="form-select" aria-label="Default select example" name="id_equipo">
              <option selected>Selecciona el nombre de tu equipo</option>
              @foreach ($equipos as $key => $equipo)
                <option value={{ $equipo->id }}>{{ $equipo->nombre_equipo}}
                </option>
              @endforeach
            </select>
            <div class="form-floating mb-3">
              <input class="form-control" id="peso" type="number"  name="peso"
              placeholder="name@example.com" min="0" max="2" required>
              <label for="number">Peso (kg)</label>
            </div>
            
            <div class="form-floating mb-3">
              <input type="number" class="form-control" id="tamano_cohete" name="tamano_cohete"
              step="any" min="0" max="1.70" required>
              <label for="number">Tamaño (m)</label>
            </div>
            
            <div class="form-floating mb-3">
              <input type="number" class="form-control" id="cap_botella" name="cap_botella"
              step="any" min="0" required>
              <label for="number">Capacidad de botella (l)</label>
            </div>
            
            <div class="form-floating mb-3">
              <input type="number" class="form-control" id="can_agua" name="can_agua" step="any"
              min="0" required>
              <label for="number">Cantidad de agua agregada(ml)</label>
            </div>
            
            <div class="form-floating mb-3">
              <input type="number" class="form-control" id="can_psi" name="can_psi" min="0"
              max="90" required>
              <label for="number" >Cantidad de PSI</label>
            </div>
            
            <div class="form-floating mb-3">
              <input type="number" class="form-control" id="tiempo" name="tiempo" step="any"
              min="0" required>
              <label for="number" >Tiempo(s)</label>
            </div>
            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
              <button class="btn btn-primary" type="submit"
              id="guardar_datos">Guardar datos</button>
            </div>
          </form>
        </div>
        <div class="card-footer text-center py-3 "  >
          <div class="small">© Hydra Aerospace 495.</div>
        </div>
      </div>
      <div class="py-2"></div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
@endsection