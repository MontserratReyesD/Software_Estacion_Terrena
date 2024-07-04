<div id="layoutSidenav_nav">
  <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
      <div class="nav">
        <div class="sb-sidenav-menu-heading">Dashboard</div>
        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
          <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
          Monitor
          <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
          <nav class="sb-sidenav-menu-nested nav">
            <a class="nav-link" href="{{ route('graficas') }}">
            <div class="sb-nav-link-icon"><i class="fas fa-star"></i></div>
            Todo</a>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
              Secciones
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
              <nav class="sb-sidenav-menu-nested nav">
                
                <a class="nav-link" href="register.html">
                  <i class="fas fa-map-marker-alt"></i>
                &nbsp;&nbsp;Geolocalización</a>
                <a class="nav-link" href="password.html"><i class="fas fa-temperature-low"></i>
                &nbsp;&nbsp;Temperatura</a>
              </nav>
            </div>
            
          </nav>
        </div>
        <div class="sb-sidenav-menu-heading">Menu principal</div>
        <a class="nav-link" href="{{ route('home') }}">
          <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
          Inicio 
        </a>
        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
          <div class="sb-nav-link-icon"><i class="fas fa-gamepad"></i></div>
          Control
          <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
          <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
            
            <a class="nav-link" href="{{ route('registrarEquipo') }}">
              <div class="sb-nav-link-icon"><i class="fas fa-people-carry"></i></div>
              Equipo
            </a>
            <a class="nav-link collapsed" href="{{ route('graficas') }}" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
              <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
              Usuarios
            </a>
            <a class="nav-link" href="{{ route('llenado.pdr') }}">
              <div class="sb-nav-link-icon"><i class="fas fa-people-carry"></i></div>
              Documento PDR
            </a>
            <a class="nav-link collapsed" href="{{ route('subir.video') }}">
              <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
              Enlace de video
            </a>
            <a class="nav-link" href="{{ route('reporte.final') }}">
              <div class="sb-nav-link-icon"><i class="fas fa-people-carry"></i></div>
              Reporte final
            </a>
          </nav>
        </div>
        <div class="sb-sidenav-menu-heading">Lanzamientos</div>
        <a class="nav-link" href="{{ route('altura.registrar') }}">
          <div class="sb-nav-link-icon"><i class="fas fa-rocket"></i></div>
          Calculo de altura
        </a>
        <a class="nav-link" href="{{ route('data.mostrar') }}">
          <div class="sb-nav-link-icon"><i class="fas fa-list-alt"></i></div>
          Registros
        </a>        
        <a class="nav-link" href="{{ route('ranking') }}">
          <div class="sb-nav-link-icon"><i class="fas fa-list-ol"></i></div>
          Ranking
        </a>
        <a class="nav-link" href="#">
          <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
          Graficas
        </a>

      </div>
    </div>
    <div class="sb-sidenav-footer">
      <div class="small">Logeado como:</div>
      <div class="badge bg-primary text-wrap" style="width: 6rem;">
        @auth
        {{ Auth::user()->name }}
        @endauth
      </div>
    </div>
  </nav>
</div>