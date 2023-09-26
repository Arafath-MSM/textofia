<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Textofia | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    {{-- sweetalert2 --}}
    <link rel="stylesheet" href="{{ asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <!-- Datetime picker -->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/datetimepicker/jquery.datetimepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('/dist/img/logo.png') }}" alt="logo">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('dashboard') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block right">
                    <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-dark float-right">
                    <i class="fas fa-sign-out-alt" aria-hidden="true"></i></button>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ route('dashboard') }}" class="brand-link">
                <img src="{{ asset('/dist/img/logo.png') }}" alt="logo"
                    class="" style="opacity: .8">
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <a href="#" class="d-block">{{ ucfirst(auth()->user()->name) }}</a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="{{ route('dashboard') }}" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class="nav-header">Blog</li>
                        <li class="nav-item {{ Route::is('posts*') ? 'menu-open' : '' }}">
                            <a href="{{ route('posts.index') }}" class="nav-link">
                                <i class="nav-icon fa fa-file-alt"></i>
                                <p>
                                    Posts
                                </p>
                            </a>
                        </li>

                        @if (auth()->user()->isAdmin())
                        <li class="nav-item {{ Route::is('categories*') ? 'menu-open' : '' }}">
                                <a href="{{ route('categories.index') }}" class="nav-link">
                                    <i class="nav-icon fa fa-tags"></i>
                                    <p>
                                        Categories
                                    </p>
                                </a>
                            </li>
                        @endif
                        @if (auth()->user()->isAdmin())
                        <li class="nav-header">News</li>
                        <li class="nav-item {{ Route::is('news*') ? 'menu-open' : '' }}">
                            <a href="{{ route('news.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-file-alt"></i>
                                <p>
                                    News
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">Testimonial</li>
                        <li class="nav-item {{ Route::is('testimonial*') ? 'menu-open' : '' }}">
                            <a href="{{ route('testimonial.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-file-alt"></i>
                                <p>
                                    Testimonial
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">Case Studies</li>
                        <li class="nav-item {{ Route::is('case-studies*') ? 'menu-open' : '' }}">
                            <a href="{{ route('case-studies.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-file-alt"></i>
                                <p>
                                    Case Studies
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">Career</li>
                        <li class="nav-item {{ Route::is('career*') ? 'menu-open' : '' }}">
                            <a href="{{ route('career.index') }}" class="nav-link">
                                <i class="nav-icon fa fa-file-alt"></i>
                                <p>
                                    Jobs
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">Newsletter</li>
                        <li class="nav-item {{ Route::is('newsletter-contacts') ? 'menu-open' : '' }}">
                            <a href="{{ route('newsletter-contacts') }}" class="nav-link">
                                <i class="nav-icon fa fa-file-alt"></i>
                                <p>
                                    Contacts
                                </p>
                            </a>
                        </li>

                        <li class="nav-header">Settings</li>
                        <li class="nav-item {{ Route::is('settings.general') ? 'menu-open' : '' }}">
                            <a href="{{ route('settings.general') }}" class="nav-link">
                                <i class="nav-icon fa fa-cog"></i>
                                <p>
                                    General
                                </p>
                            </a>
                        </li>
                        <li class="nav-item {{ Route::is('settings.meta') ? 'menu-open' : '' }}">
                            <a href="{{ route('settings.meta') }}" class="nav-link">
                                <i class="nav-icon fa fa-file-alt"></i>
                                <p>
                                    SEO
                                </p>
                            </a>
                        </li>
                        <li class="nav-item {{ Route::is('settings.mail_config') ? 'menu-open' : '' }}">
                            <a href="{{ route('settings.mail_config') }}" class="nav-link">
                                <i class="nav-icon fa fa-file-alt"></i>
                                <p>
                                    Mail Config
                                </p>
                            </a>
                        </li>
                        <li class="nav-item {{ Route::is('settings.cache_config') ? 'menu-open' : '' }}">
                            <a href="{{ route('settings.cache_config') }}" class="nav-link">
                                <i class="nav-icon fa fa-file-alt"></i>
                                <p>
                                    Cache Config
                                </p>
                            </a>
                        </li><br/>
                        @endif
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    @yield('alerts')
                    <div class="row mb-2">
                        @yield('breadcrumb')
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            @yield('content')
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    {{-- sweetalert2 --}}
    <script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <!-- daterangepicker -->
    <!-- datetimepicker -->
    <script type="text/javascript" src="{{ asset('plugins/datetimepicker/jquery.datetimepicker.full.js') }}"></script>

    <!-- Summernote -->
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>

    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({ height: 400 });
            
            $('#datetimepicker1').datetimepicker({
                format:'Y-m-d H:i',
                value: new Date()
        	});

            $('#datetimepicker2').datetimepicker({
                format:'Y-m-d H:i',
        	});
        });
    </script>
    @yield('javascript')
</body>

</html>
