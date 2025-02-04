@extends('layouts.admin')
@section('content')
<div class="row">
    <h1>Doctor : {{$doctor->nombres." ".$doctor->apellidos}} </h1>

    <HR>
    </HR>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Datos registrados</h3>

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
                            <label for="">Nombres</label>
                            <p> {{$doctor->nombres}} </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form group">
                            <label for="">Apellidos</label>
                            <p> {{$doctor->apellidos}} </p>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form group">
                            <label for="">Telefono</label>
                            <p> {{$doctor->telefono}} </p>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form group">
                            <label for="">N de Licencia</label>
                            <p> {{$doctor->licencia_medica}} </p>

                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form group">
                            <label for="">Especialidad</label>
                            <p> {{$doctor->especialidad}} </p>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form group">
                            <label for="">E-mail</label>
                            <p> {{$doctor->user->email}} </p>
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