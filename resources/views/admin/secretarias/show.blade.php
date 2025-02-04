@extends('layouts.admin')
@section('content')
<div class="row">
    <h1>SECRETARIA : {{$secretaria->nombres}} {{$secretaria->apellidos}}</h1>

    <HR>
    </HR>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Datos Regisistrados</h3>

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
                            <p>{{$secretaria->nombres}}</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form group">
                            <label for="">Apellidos</label>
                            <p>{{$secretaria->apellidos}}</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form group">
                            <label for="">CI</label>
                            <p>{{$secretaria->ci}}</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form group">
                            <label for="">Celular</label>
                            <p>{{$secretaria->celular}}</p>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form group">
                            <label for="">Fecha de nacimiento</label>
                            <p>{{$secretaria->fecha_nacimiento}}</p>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form group">
                            <label for="">Direccion</label>
                            <p>{{$secretaria->direccion}}</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form group">
                            <label for="">E-mail</label><b>*</b>
                            <p>{{$secretaria->user->email}}</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form group">
                            <a href=" {{url('admin/secretarias')}}" class="btn btn-secondary">Volver</a>

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