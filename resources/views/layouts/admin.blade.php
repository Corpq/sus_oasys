<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OASYS | SUS</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{url('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('dist/css/adminlte.min.css')}}">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- jQuery -->
    <script src="{{url('plugins/jquery/jquery.min.js')}}"></script>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- DataTables -->
    <link rel="stylesheet" href="{{url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{url('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">


    <!-- Full Calendar -->
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>
    <script src="{{url('fullcalendar/es.global.js')}}"></script>
    <!-- CKEditor -->
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/44.1.0/ckeditor5.css" />
    <!-- GOOGLE api -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sono:wght,MONO@500,0.88&display=swap" rel="stylesheet">


</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{url('admin')}}" class="nav-link">OASYS</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-primary elevation-4">
            <!-- Brand Logo -->
            <a href="" class="brand-link">
                <img src="{{url('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">OASYS-SUS</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <a href="#" class="d-block">{{Auth::user()->name}}</a>
                    </div>
                </div>


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                          with font-awesome or any other icon font library -->
                        @can('admin.usuario.index')

                        <li class="nav-item ">
                            <a href="{{url('/admin/configuraciones')}}" class="nav-link active" style="background-color:#000000 ">
                                <i class="nav-icon fas bi bi-gear-wide-connected"></i>
                                <p>
                                    CONFIGURACIONES

                                </p>
                            </a>
                        </li>

                        @endcan

                        @can('admin.usuario.index')

                        <li class="nav-item ">
                            <a href="#" class="nav-link active" style="background-color:#000000">
                                <i class="nav-icon fas bi bi-people-fill"></i>
                                <p>
                                    USUARIOS
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('admin/usuarios/create')}}" class="nav-link" style="background-color:#ab3ed8">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Creacion de Usuarios</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('admin/usuarios')}}" class="nav-link" style="background-color:#ab3ed8">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Listado de usuarios</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        @endcan


                        @can('admin.secretarias.index')
                        <li class="nav-item">
                            <a href="#" class="nav-link active" style="background-color:#000000">
                                <i class="nav-icon fas bi bi-person-badge"></i>
                                <p>
                                    SECRETARIAS
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('admin/secretarias/create')}}" class="nav-link" style="background-color:#ab3ed8" v>
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Creacion de secretarias</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('admin/secretarias')}}" class="nav-link" style="background-color:#ab3ed8">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Listado de secretarias</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        @endcan

                        @can('admin.pacientes.index')

                        <li class="nav-item">
                            <a href="#" class="nav-link active" style="background-color:#000000">
                                <i class="nav-icon fas bi bi-person-check"></i>
                                <p>
                                    PACIENTES
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('admin/pacientes/create')}}" class="nav-link" style="background-color:#ab3ed8" v>
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Creacion de pacientes</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('admin/pacientes')}}" class="nav-link" style="background-color:#ab3ed8">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Listado de pacientes</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        @endcan

                        @can('admin.consultorios.index')

                        <li class="nav-item">
                            <a href="#" class="nav-link active" style="background-color:#000000">
                                <i class="nav-icon fas bi bi-hospital"></i>
                                <p>
                                    CONSULTORIOS
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('admin/consultorios/create')}}" class="nav-link" style="background-color:#ab3ed8" v>
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Creacion de consultorios</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('admin/consultorios')}}" class="nav-link" style="background-color:#ab3ed8">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Listado de consultorios</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        @endcan

                        @can('admin.doctores.index')

                        <li class="nav-item">
                            <a href="#" class="nav-link active" style="background-color:#000000">
                                <i class="nav-icon fas bi bi-heart-pulse"></i>
                                <p>
                                    DOCTORES
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('admin/doctores/create')}}" class="nav-link" style="background-color:#ab3ed8" v>
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Creacion de doctores</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('admin/doctores')}}" class="nav-link" style="background-color:#ab3ed8">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Listado de doctores</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('admin/doctores/reportes')}}" class="nav-link" style="background-color:#ab3ed8">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>REPORTES</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        @endcan

                        @can('admin.horarios.index')

                        <li class="nav-item">
                            <a href="#" class="nav-link active" style="background-color:#000000">
                                <i class="nav-icon fas bi bi-clock-history"></i>
                                <p>
                                    HORARIOS
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('admin/horarios/create')}}" class="nav-link" style="background-color:#ab3ed8" v>
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Creacion de horarios</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('admin/horarios')}}" class="nav-link" style="background-color:#ab3ed8">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Listado de horarios</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        @endcan

                        @can('admin.usuario.index')

                        <li class="nav-item">
                            <a href="#" class="nav-link active" style="background-color:#000000">
                                <i class="nav-icon fas bi bi-file-earmark-medical-fill"></i>
                                <p>
                                    RESERVAS - CITAS
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="{{url('admin/reservas/reportes')}}" class="nav-link" style="background-color:#ab3ed8">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>REPORTES</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        @endcan

                        @can('admin.historial.index')

                        <li class="nav-item">
                            <a href="#" class="nav-link active" style="background-color:#000000">
                                <i class="nav-icon fas bi bi-file-earmark-post"></i>
                                <p>
                                    HISTORIAL CLINICO
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('admin/historial')}}" class="nav-link active" style="background-color:#ab3ed8">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>LISTADO DEL HISTORIAL</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('admin/historial/buscar_paciente')}}" class="nav-link active" style="background-color:#ab3ed8">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Buscar paciente</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        @endcan

                        @can('admin.pagos.index')

                        <li class="nav-item">
                            <a href="#" class="nav-link active" style="background-color:#000000">
                                <i class="nav-icon fas bi bi-cash"></i>
                                <p>
                                    Pagos
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('admin/pagos')}}" class="nav-link active" style="background-color:#ab3ed8">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Listado de pagos</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        @endcan


                        <li class="nav-item">
                            <a href="{{ route('logout') }}" class=" nav-link" style="background-color: #a9200e" id=""
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="nav-icon fas bi bi-door-closed"></i>
                                <p>
                                    Cerrar Sesion
                                </p>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        @if ((($message = Session::get('mensaje')) && ($icono = Session::get('icono'))))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "{{$icono}}",
                title: "{{$message}}",
                showConfirmButton: false,
                timer: 4500
            });
        </script>
        @endif


        <div class="content-wrapper">
            <div class="container">
                @yield('content')
            </div>
        </div>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- Bootstrap 4 -->
    <script src="{{url('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{url('plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{url('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{url('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{url('plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{url('plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{url('plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{url('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{url('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{url('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

    <!-- AdminLTE App -->
    <script src="{{url('dist/js/adminlte.min.js')}}"></script>
</body>

</html>