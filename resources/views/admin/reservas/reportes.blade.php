@extends('layouts.admin')
@section('content')
<div class="row">
    <h1>REPORTES DE RESERVAS DE CITAS MEDITAS</h1>

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
                <a href="{{url('/admin/reservas/pdf')}}" class="btn btn-success">
                    <i class="bi bi-printer-fill"></i> LISTADO DE TODAS LAS RESERVAS</a>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">GENERAR REPORTE POR FECHAS</h3>
            </div>
            <div class="card-body">
                <form action="{{route('admin.reservas.pdf_fechas')}}" method="get">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">FECHA DE INICIO: </label>
                            <input type="date" name="fecha_inicio" id="" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="">FECHA DE FIN: </label>
                            <input type="date" name="fecha_fin" id="" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <div style="height: 32px;" ></div>
                            <button class="btn btn-success" ><i class="bi bi-printer-fill"></i>  GENERAR REPORTE</button>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection