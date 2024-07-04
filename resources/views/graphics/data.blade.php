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

  <div class="row">
    <h1 class="h2 mb-2 text-gray-800">Registros por usuario</h1>
    <div class="col">
      <div  style="float: right;">
        <a href="{{ route('graficas') }} " class="btn btn-outline-primary btn-icon-split btn-sm">
          <span class="icon text-white-60">
            <i class="fas fa-arrow-left"></i>
          </span>
          <span class="text">Regresar</span>
        </a>
      </div>
    </div>
  </div>




          
<!-- DataTales Example -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> Seguimiento de datos capturados</div>
    <div class="card-body">
        <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover" id="dataTable" role="grid" aria-describedby="DataTables_Table_1_info" width="100%" cellspacing="0">
            <thead>
                <tr role="row">
                    <th>#</th>
                    <th># Usuario</th>
                    <th># Comentarios</th>
                    <th>Fecha de captura</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>#</th>
                    <th># Usuario</th>
                    <th># Comentarios</th>
                    <th>Fecha de captura</th>
                    <th>Acciones</th>
                </tr>
            </tfoot>
            <tbody>
                <?php $i=0  ?>
                @foreach ($readed_data as $dato)
                  <tr>
                  <td>{{++$i }}</td>
                  <td>{{$dato->name}}</td>
                  <td>{{$dato->comentarios}}</td>
                  <td> <?php $date = date_create($dato->created_at);  ?>
                    {{ date_format($date, 'd/m/Y [H:i') }} h]
                  </td>
                  <td>
                      <a class="btn btn-primary btn-sm" href="{{route('data.ver', $dato->id)}}">Ver</a>
                  </td>
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
<script src="{{ asset('js/monitor/datatables_data.js??1.1') }}"></script>
@endsection