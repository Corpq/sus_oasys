@extends('layouts.admin')
@section('content')
<div class="row">
    <h1>CONFIGURACION datos</h1>

    <hr>

</div>

<div class="row">
    <div class="col-md-12">
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
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form group">
                                    <label for="">NOMBRE DE LA CLINICA / HOSPITAL</label>
                                    <p>{{$configuracion->nombre}}</p>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form group">
                                    <label for="">DIRECCION</label>
                                    <p>
                                    <p>{{$configuracion->direccion}}</p>
                                    </p>
                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form group">
                                    <label for="">TELEFONO</label>
                                    <p>{{$configuracion->telefono}}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form group">
                                    <label for="">CORREO</label>
                                    <p>{{$configuracion->correo}}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">LOGOTIPO</label>
                            <center>
                                <img src="{{url('storage/'.$configuracion->logo)}}" alt="logo" width="100px">
                            </center>
                        </div>
                    </div>
                </div>


                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form group">
                            <a href=" {{url('admin/configuraciones')}}" class="btn btn-secondary">VOLVER</a>

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