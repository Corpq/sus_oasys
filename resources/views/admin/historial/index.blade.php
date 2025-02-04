@extends('layouts.admin')
@section('content')
<div class="row">
    <h1>LISTADO DE HISTORIALES</h1>
</div>
<hr>




<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">HISTORIALES REGISTRADOS </h3>

                <div class="card-tools">
                    <a href="{{url('admin/historial/create')}}" class="btn btn-primary">
                        REGISTRAR NUEVO <i class="fas fa-minus"></i>
                    </a>
                </div>
                <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-striped table-bordered table-hover table-sm">
                    <thead style="background-color:#c0c0c0">
                        <tr>
                            <td style="text-align: center;"> <b>NRO</b> </td>
                            <td style="text-align: center;"> <b>PACIENTE</b></td>
                            <td style="text-align: center;"> <b>FECHA DE LA CITA</b></td>
                            <td style="text-align: center;"> <b>DETALLE</b></td>
                            <td style="text-align: center;"> <b>Acciones</b> </td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $contador = 1; ?>
                        @foreach( $historiales as $historiale)
                        @if($historiale->doctor_id == Auth::user()->doctor->id)                        
                        <tr>
                            <td style="text-align: center;">{{$contador++}}</td>
                            <td>{{$historiale->paciente->apellidos." ".$historiale->paciente->nombres}}</td>
                            <td style="text-align: center" >{{$historiale->fecha_visita}}</td>
                            <td>
                                {!!\Illuminate\Support\Str::limit($historiale->detalle, 50, '...')!!}
                            </td>
                            <td style="text-align: center" >
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{url('admin/historial/'.$historiale->id)}}" type="button" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                                    <a href="{{url('admin/historial/pdf/'.$historiale->id)}}" type="button" class="btn btn-warning btn-sm"><i class="bi bi-printer"></i></a>
                                    <a href="{{url('admin/historial/'.$historiale->id.'/edit')}}" type="button" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                                    <a href="{{url('admin/historial/'.$historiale->id.'/confirm-delete')}}" type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash3"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
                <script>
                    $(function() {
                        $("#example1").DataTable({
                            "pageLength": 10,
                            "language": {
                                "emptyTable": "No hay información",
                                "info": "Mostrando _START_ a _END_ de _TOTAL_ Historiales",
                                "infoEmpty": "Mostrando 0 a 0 de 0 Historiales",
                                "infoFiltered": "(Filtrado de _MAX_ total Historiales)",
                                "infoPostFix": "",
                                "thousands": ",",
                                "lengthMenu": "Mostrar _MENU_ Historiales",
                                "loadingRecords": "Cargando...",
                                "processing": "Procesando...",
                                "search": "Buscador:",
                                "zeroRecords": "Sin resultados encontrados",
                                "paginate": {
                                    "first": "Primero",
                                    "last": "Ultimo",
                                    "next": "Siguiente",
                                    "previous": "Anterior"
                                }
                            },
                            "responsive": true,
                            "lengthChange": true,
                            "autoWidth": false,
                            buttons: [{
                                    extend: 'collection',
                                    text: 'Reportes',
                                    orientation: 'landscape',
                                    buttons: [{
                                        text: 'Copiar',
                                        extend: 'copy',
                                    }, {
                                        extend: 'pdf'
                                    }, {
                                        extend: 'csv'
                                    }, {
                                        extend: 'excel'
                                    }, {
                                        text: 'Imprimir',
                                        extend: 'print'
                                    }]
                                },
                                {
                                    extend: 'colvis',
                                    text: 'Visor de columnas',
                                    collectionLayout: 'fixed three-column'
                                }
                            ],
                        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                    });
                </script>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
@endsection