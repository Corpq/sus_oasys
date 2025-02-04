@extends('layouts.admin')
@section('content')
<div class="row">
    <h1>DATOS DEL HORARIO</h1>

    <HR>
    </HR>
</div>

<div class="row">
    <div class="col-md-10">
        <div class="card card-info">
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
                        <div class="col-md-6">
                            <div class="form group">
                                <label for="">DOCTORES</label>
                                <p>{{$horario->doctor->nombres." ".$horario->doctor->apellidos." - ".$horario->doctor->especialidad}}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form group">
                                <label for="">Consultorios</label>
                                <p>{{$horario->consultorio->nombre." - ".$horario->consultorio->ubicacion}}</p>

                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form group">
                                <label for="">Dia</label>
                                <p>{{$horario->dia}}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form group">
                                <label for="">HORA INICIO</label>
                                <p>{{$horario->hora_inicio}}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form group">
                                <label for="">HORA FINAL</label>
                                <p>{{$horario->hora_fin}}</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form group">
                                <a href=" {{url('admin/doctores')}}" class="btn btn-secondary">Volver</a>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>


@endsection