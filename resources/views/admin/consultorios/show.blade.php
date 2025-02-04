@extends('layouts.admin')
@section('content')
<div class="row">
    <h1>CONSULTORIO: {{$consultorio->nombre}} </h1>

    <HR>
    </HR>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">DATOS REGISTRADOS</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
                <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form group">
                            <label for="">Nombre del Consultorio</label>
                            <p>{{$consultorio->nombre}}</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form group">
                            <label for="">Ubicacion</label>
                            <p>{{$consultorio->ubicacion}}</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form group">
                            <label for="">Capacidad</label>
                            <p>{{$consultorio->capacidad}}</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form group">
                            <label for="">Telefono</label>
                            <p>{{$consultorio->telefono}}</p>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form group">
                            <label for="">Especialidad</label>
                            <p>{{$consultorio->especialidad}}</p>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form group">
                            <label for="">Estado</label>
                            <p>{{$consultorio->estado}}</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form group">
                            <a href=" {{url('admin/consultorios')}}" class="btn btn-secondary">Volver</a>

                        </div>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>


@endsection