@extends('layouts.admin')
@section('content')
<div class="row">
    <h1>REGISTRO DE NUEVO CONSULTORIO</h1>

    <HR>
    </HR>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">LLENE LOS DATOS</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
                <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{url('admin/consultorios/create')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form group">
                                <label for="">Nombre del Consultorio</label> <b>*</b>
                                <input type="text" value="{{old('nombre')}}" name="nombre" class="form-control" required>
                                @error('nombre')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form group">
                                <label for="">Ubicacion</label> <b>*</b>
                                <input type="text" value="{{old('ubicacion')}}" name="ubicacion" class="form-control" required>
                                @error('ubicacion')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form group">
                                <label for="">Capacidad</label> <b>*</b>
                                <input type="text" value="{{old('capacidad')}}" name="capacidad" class="form-control" required>
                                @error('capacidad')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form group">
                                <label for="">Telefono</label>
                                <input type="text" value="{{old('telefono')}}" name="telefono" class="form-control">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form group">
                                <label for="">Especialidad</label> <b>*</b>
                                <input type="text" value="{{old('especialidad')}}" name="especialidad" class="form-control" required>
                                @error('especialidad')
                                <small style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form group">
                                <label for="">Estado</label>
                                <select name="estado" id="" class="form-control">
                                    <option value="ACTIVO">ACTIVO</option>
                                    <option value="INACTIVO">INACTIVO</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form group">
                                <a href=" {{url('admin/consultorios')}}" class="btn btn-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-primary">Registrar consultorio</button>
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