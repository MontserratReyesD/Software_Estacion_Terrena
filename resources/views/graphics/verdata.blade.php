@extends('layouts.app')
@section('styles')
<!-- Bootstrap Select Css -->
<link href="{{ asset('node_modules/startbootstrap-sb-admin-2/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection
@section('scriptsHeader')
@endsection
@section('content')
<div class="container-fluid">
  <!-- Page Heading -->
<div class="container-fluid">
          <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h2 mb-2 text-gray-800">Datos capturados</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
    <i class="fas fa-download fa-sm text-white-50"></i> Generar Reporte</a>
    <a href="{{ route('data.mostrar') }} " class="btn btn-outline-primary btn-icon-split btn-sm">
          <span class="icon text-white-60">
            <i class="fas fa-arrow-left"></i>
          </span>
          <span class="text">Regresar</span>
        </a>
  </div>
          
  <!-- DataTales Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-table"></i> Seguimiento de datos.
      <div style="float: right;">
        Fecha de creación: <?php $date = date_create($fecha);  ?>
        {{ date_format($date, 'd/m/Y [H:i') }} h]
      </div>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover" id="dataTable" role="grid" aria-describedby="DataTables_Table_1_info" width="100%" cellspacing="0">
          <thead>
            <tr role="row">
              <th>#</th>
              <th>Dato</th>
              <th>Variable</th>
              <th>Dispositivo</th>
              <th>Hora de captura</th>
            </tr>
          </thead>
          <tfoot>
          <tr>
            <th>#</th>
            <th>Dato</th>
            <th>Variable</th>
            <th>Dispositivo</th>
            <th>Hora de captura</th>
          </tr>
          </tfoot>
          <tbody>            
            @foreach ($datos as $key => $dato)
            <tr>
              <td>{{$key+1 }}</td>
              <td>{{$dato[0]}}</td>
              <td>{{$dato[1]}}</td>
              <td data-toggle="tooltip" title="{{$dato[4]}}">{{ucfirst($dato[2])}}</td>
              <td data-toggle="tooltip" title="{{$dato[5]}}">{{ucfirst($dato[3])}}</td>              
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('node_modules/startbootstrap-sb-admin-2/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('node_modules/startbootstrap-sb-admin-2/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<script src="{{ asset('js/monitor/datatables_ver-data.js?1.1') }}"></script>
@endsection