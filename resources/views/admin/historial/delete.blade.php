@extends('layouts.admin')
@section('content')
<div>
    <h1>PACIENTE: {{$historial->paciente->apellidos." ".$historial->paciente->nombres}}</h1>

    <HR>
    </HR>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title">ESTA SEGURO DE ELIMINAR ESTE REGISTRO</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
                <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <form action="{{url('/admin/historial',$historial->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form group">
                                        <label for="">PACIENTE</label>
                                        <p>{{$historial->paciente->apellidos." ".$historial->paciente->nombres}}</p>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form group">
                                        <label for="">FECHA DE LA CITA MEDICA</label>
                                        <p>{{$historial->fecha_visita}}</p>

                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">DESCRIPCION DE LA CITA</label>
                                        <p>{!!$historial->detalle!!}</p>                                       

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form group">
                                <a href=" {{url('admin/historial')}}" class="btn btn-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-danger" >Eliminar</button>
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