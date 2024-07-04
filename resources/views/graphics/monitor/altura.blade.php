<div class=" mb-4">
  <div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Altura</h6>
      <div class="dropdown no-arrow">
        <span class="mr-2">
          <i id="console-event" class="fas fa-data text-secondary"></i>
        </span>
        <input class="dropdown-menu dropdown-menu-right shadow animated--fade-in" >
      </div>
    </div>
    <!-- Card Body -->
    <div class="card-body">
      <div class="form-group">
        <div class="  text-center">
          <span id="altitudReal" class="text text-success display-6"></span>
          <span class="text-primary display-6 ">  / </span>
          <span id="altitudMax" class="text text-danger display-6"></span>
          <div class="w-100"></div>
        </div>
        <div class="pt-1 small ">
          <div class="row ">
            <span class="pr-2">
              <i class="fas fa-circle text-success"></i> Altura Real
              <i class="fas fa-circle text-danger"></i> Altura Máxima
            </span>
          </div>
        </div>
      </div>
      <hr>
      <div class="row  align-items-center">
        <div class="col mr-2">
          <input type="button" value="Reset" id="resetAltura" class="btn btn-outline-primary">
        </div>        
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">

  $("#resetAltura").click(function(){
    maximo=0.0;
    altitudMax.innerHTML = `0m`;
  });

</script>