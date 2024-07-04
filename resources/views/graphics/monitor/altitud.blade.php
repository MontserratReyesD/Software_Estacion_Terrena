    <!-- Area Chart -->
    <div class="col-lg-6 mb-4">
      <!-- Illustrations -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary"
          >Altitud sobre el nivel del mar: 
          <span id="alturaMar" class=" text-dark "> </span>
          </h6>
          
        </div>
        <div class="card-body">
           
          <canvas class="chart-area" id="humChart"></canvas>
                    <hr>
          <div class="row  align-items-center">
            <div class="col mr-2">
              <input type="button" value="Gráfica" id="alturaGrafica" class="btn btn-outline-info">
            </div>
            
            <div class="col-auto"  >
              <button class="btn btn-info btn-icon-split btn-user " id="captura" >
              <span class="icon text-white-50">
                <i class="fas fa-save"></i>
              </span>              
              <span class="text">Capturar</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    



