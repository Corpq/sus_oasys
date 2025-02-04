@extends('layouts.admin')
@section('content')
<div>
    <h1>REGISTRAR NUEVO HISTORIAL MEDICO</h1>

    <HR>
    </HR>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
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
                <form action="{{url('admin/historial/create')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form group">
                                        <label for="">PACIENTE</label> <b>*</b>
                                        <select name="paciente_id" id="" class="form-control">
                                            @foreach ($pacientes as $paciente)
                                            <option value="{{$paciente->id}}">{{$paciente->apellidos."".$paciente->nombres}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form group">
                                        <label for="">FECHA DE LA CITA MEDICA</label> <b>*</b>
                                        <input type="date" value="<?php echo date('Y-m-d') ?>" name="fecha_visita" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">DESCRIPCION DE LA CITA</label>
                                        <textarea name="detalle" class="form-control" id="editor" cols="30" rows="100" style="width: 100%;height:500px"></textarea>
                                        <script type="importmap">
                                            {
                                              "imports": {
                                                 "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/44.1.0/ckeditor5.js",
                                                 "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/44.1.0/",
                                                 "ckeditor5-premium-features": "https://cdn.ckeditor.com/ckeditor5-premium-features/44.1.0/ckeditor5-premium-features.js",
                                                 "ckeditor5-premium-features/": "https://cdn.ckeditor.com/ckeditor5-premium-features/44.1.0/"
                                              }
                                            }
                                        </script>
                                        <script type="module">
                                            import {
                                                ClassicEditor,
                                                Essentials,
                                                Bold,
                                                Italic,
                                                Font,
                                                Paragraph
                                            } from 'ckeditor5';
                                            import {
                                                FormatPainter
                                            } from 'ckeditor5-premium-features';

                                            ClassicEditor
                                                .create(document.querySelector('#editor'), {
                                                    licenseKey: 'eyJhbGciOiJFUzI1NiJ9.eyJleHAiOjE3Mzk3NTAzOTksImp0aSI6ImQyMGY0MGJlLTNiN2QtNDc5NS1iMzIyLTE3NjFkZmI1YjA0YSIsInVzYWdlRW5kcG9pbnQiOiJodHRwczovL3Byb3h5LWV2ZW50LmNrZWRpdG9yLmNvbSIsImRpc3RyaWJ1dGlvbkNoYW5uZWwiOlsiY2xvdWQiLCJkcnVwYWwiLCJzaCJdLCJ3aGl0ZUxhYmVsIjp0cnVlLCJsaWNlbnNlVHlwZSI6InRyaWFsIiwiZmVhdHVyZXMiOlsiKiJdLCJ2YyI6IjQ5NzBhNDYzIn0.TdamUwHJ1q3ZJPolETQtuFM2qDZNuZH1_-41RjCP6QhMepXrfN8weSugV5i0YoV-I4Ouw0OJV5XzAlaK_Q9nVg',
                                                    plugins: [Essentials, Bold, Italic, Font, Paragraph, FormatPainter],
                                                    toolbar: [
                                                        'undo', 'redo', '|', 'bold', 'italic', '|',
                                                        'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', '|', 'formatPainter'
                                                    ]
                                                })
                                                .then( /* ... */ )
                                                .catch( /* ... */ );
                                        </script>

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
                                <button type="submit" class="btn btn-success">Registrar Nuevo</button>
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