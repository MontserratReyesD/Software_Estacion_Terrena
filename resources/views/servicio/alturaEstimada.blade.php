@extends('layouts.app')
<title>Altura Estimada</title>
  @section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="card shadow-lg border-0 rounded-lg mt-4">
          <div class="card-header"><h3 class="text-center font-weight-light my-3">Altura estimada</h3></div>
          <div class="container">
            <div class="row align-items-center">
              <div class="col">
              <p>Llena los siguientes campos con base a tu cohete</p>
              <p style="margin-left: 80px">Dimensiones</p>
                <div class="mb-3 row">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Peso (kg)</label>
                    <div class="col-sm-5">
                      <input type="number" class="form-control" id="peso" name="peso" step="any"
                       min="0" max="2" value="{{ $cohetes->peso }}" disabled>
                    </div>
                </div>
                <div class="mb-3 row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Tamaño cohete(m)</label>
                    <div class="col-sm-5">
                      <input type="number" class="form-control" id="tamano_cohete" name="tamano_cohete"
                        step="any" min="0" max="1.70" value="{{ $cohetes->tamano_cohete }}" disabled>
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Capacidad de la botella(l)</label>
                      <div class="col-sm-5">
                        <input type="number" class="form-control" id="cap_botella" name="cap_botella"
                          step="any" min="0" value="{{ $cohetes->cap_botella }}" disabled>
                      </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Cantidad de agua agregada(ml)</label>
                      <div class="col-sm-5">
                        <input type="number" class="form-control" id="can_agua" name="can_agua" step="any"
                          min="0" value="{{ $cohetes->can_agua }}" disabled>
                      </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Cantidad de PSI</label>
                      <div class="col-sm-5">
                        <input type="number" class="form-control" id="can_psi" name="can_psi" min="0"
                          max="90" value="{{ $cohetes->can_psi }}" disabled>
                      </div>
                  </div>
                  <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Tiempo(s)</label>
                      <div class="col-sm-5">
                        <input type="number" class="form-control" id="tiempo" name="tiempo" step="any"
                          min="0" value="{{ $cohetes->tiempo }}" disabled >
                      </div>
                  </div>
                </div>
      
                <div class="col">
                  <p> Nombre del equipo </p>
                  <input class="form-control" type="text" value="{{ $equipo->nombre_equipo }}" disabled>
                  <p>Para calcular la altura estimada, presiona el botón calcular altura</p>
                    <div class="mb-3 row">
                      <label for="inputPassword" class="col-sm-2 col-form-label">Altura estimada (m)</label>
                      <div class="col-sm-5">
                        <input  class="form-control" id="altu_es" name="altu_es" value="{{ $cohetes->altu_es }}" disabled >
                      </div>
                    </div>
              
              </div>
            </div>
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



<!--

        
      </div>
    <div class="container">
      <div class="row align-items-center">
        <div class="col">
        <p>Llena los siguientes campos con base a tu cohete</p>
        <p style="margin-left: 80px">Dimensiones</p>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Peso (kg)</label>
              <div class="col-sm-5">
                <input type="number" class="form-control" id="peso" name="peso" step="any"
                 min="0" max="2" value="{{ $cohetes->peso }}" disabled>
              </div>
          </div>
          <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Tamaño cohete(m)</label>
              <div class="col-sm-5">
                <input type="number" class="form-control" id="tamano_cohete" name="tamano_cohete"
                  step="any" min="0" max="1.70" value="{{ $cohetes->tamano_cohete }}" disabled>
              </div>
            </div>
            <div class="mb-3 row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Capacidad de la botella(l)</label>
                <div class="col-sm-5">
                  <input type="number" class="form-control" id="cap_botella" name="cap_botella"
                    step="any" min="0" value="{{ $cohetes->cap_botella }}" disabled>
                </div>
            </div>
            <div class="mb-3 row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Cantidad de agua agregada(ml)</label>
                <div class="col-sm-5">
                  <input type="number" class="form-control" id="can_agua" name="can_agua" step="any"
                    min="0" value="{{ $cohetes->can_agua }}" disabled>
                </div>
            </div>
            <div class="mb-3 row">
              <label for="inputPassword" class="col-sm-2 col-form-label">Cantidad de PSI</label>
                <div class="col-sm-5">
                  <input type="number" class="form-control" id="can_psi" name="can_psi" min="0"
                    max="90" value="{{ $cohetes->can_psi }}" disabled>
                </div>
            </div>
            <div class="mb-3 row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Tiempo(s)</label>
                <div class="col-sm-5">
                  <input type="number" class="form-control" id="tiempo" name="tiempo" step="any"
                    min="0" value="{{ $cohetes->tiempo }}" disabled >
                </div>
            </div>
          </div>

          <div class="col">
            <p> Nombre del equipo </p>
            <input class="form-control" type="text" value="{{ $equipo->nombre_equipo }}" disabled>
            <p>Para calcular la altura estimada, presiona el botón calcular altura</p>
              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Altura estimada (m)</label>
                <div class="col-sm-5">
                  <input  class="form-control" id="altu_es" name="altu_es" value="{{ $cohetes->altu_es }}" disabled >
                </div>
              </div>
        
        </div>
      </div>
    </div>

    <div class="card text-center">
        <div class="card-footer text-muted">
            © Hydra Aerospace 495.
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>

-->

<!--action="{{ route('altura.calcular') }}" method="POST"-->
