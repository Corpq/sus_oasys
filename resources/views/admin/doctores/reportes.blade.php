@extends('layouts.admin')
@section('content')
<div class="row">
    <h1>REPORTES DE DOCTORES</h1>

    <HR>
    </HR>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">GENERAR REPORTE</h3>
            </div>
            <div class="card-body">
                <a href="{{url('/admin/doctores/pdf')}}" class="btn btn-success"> <i class="bi bi-printer-fill"></i> LISTADO DEL PERSONAL MEDICO</a>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>


@endsection