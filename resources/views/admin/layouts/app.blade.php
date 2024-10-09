<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>SAdmin</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{ asset('img/logo_sinfondo.png')}}" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="{{ asset('atlantis/assets/js/plugin/webfont/webfont.min.js')}}"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
                    "simple-line-icons"
                ],
                urls: ["{{ asset('atlantis/assets/css/fonts.min.css')}}"]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('atlantis/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('atlantis/assets/css/atlantis.min.css')}}">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{ asset('atlantis/assets/css/demo.css')}}">

    <style>
        .form-group label, .form-check label {
            white-space: normal; }
    </style>

</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" style="background: #3b5d50!important;">

                <a href="#" class="logo">
                    <img src="{{ asset('img/logo_sinfondo.png')}}" alt="navbar brand" class="navbar-brand" style="width: 25%">
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

                <div class="container-fluid">
                    <div class="collapse" id="search-nav">
                        <form class="navbar-left navbar-form nav-search mr-md-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="submit" class="btn btn-search pr-1">
                                        <i class="fa fa-search search-icon"></i>
                                    </button>
                                </div>
                                <input type="text" placeholder="Search ..." class="form-control">
                            </div>
                        </form>
                    </div>
                    
                </div>
            </nav>
            <!-- End Navbar -->
        </div>

        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <span>
                                    Hizrian
                                    <span class="user-level">Administrator</span>
                                    <span class="caret"></span>
                                </span>
                            </a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <ul class="nav nav-primary">
                        <li class="nav-item active">
                            <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                                <i class="fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Components</h4>
                        </li>
                        <li class="nav-item {{ request()->routeIs('centroDeportivo.*') ? 'active' : '' }}">
                            <a data-toggle="collapse" href="#centroDeportivo">
                                <i class="fas fa-layer-group"></i>
                                <p>Crear Centro Deportivo</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse {{ request()->routeIs('centroDeportivo.*') ? 'show' : '' }}"
                                id="centroDeportivo">
                                <ul class="nav nav-collapse">
                                    <li class="{{ request()->routeIs(['centroDeportivo.create', 'centroDeportivo.store']) ? 'active' : ''}}">
                                        <a href="{{ route('centroDeportivo.create') }}">
                                            <span class="sub-item">Registra Centro Deportivo</span>
                                        </a>
                                    </li>
                                    <<li class="{{ request()->routeIs(['centroDeportivo.listar', 'centroDeportivo.listar']) ? 'active' : ''}}">
                                        <a href="{{ route('centroDeportivo.listar') }}">
                                            <span class="sub-item">Gestionar Centro Deportivo</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item {{ request()->routeIs('canchas.*') ? 'active' : '' }}">
                            <a data-toggle="collapse" href="#canchas">
                                <i class="fas fa-layer-group"></i>
                                <p>Crear cancha</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse {{ request()->routeIs('canchas.*') ? 'show' : '' }}"
                                id="canchas">
                                <ul class="nav nav-collapse">
                                    <li class="{{ request()->routeIs(['canchas.create', 'canchas.store']) ? 'active' : ''}}">
                                        <a href="{{ route('canchas.create') }}">
                                            <span class="sub-item">Registra Cancha</span>
                                        </a>
                                    </li>
                                    <<li class="{{ request()->routeIs(['canchas.listar', 'canchas.listar']) ? 'active' : ''}}">
                                        <a href="{{ route('canchas.listar') }}">
                                            <span class="sub-item">Gestionar Cancha</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="content">
               
                @yield('content')
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">

                    </nav>
                    <div class="copyright ml-auto">
                        {{now()->year}},&copy ONCLICK

                    </div>
                </div>
            </footer>
        </div>

    </div>
    <!--   Core JS Files   -->
    <script src="{{ asset('atlantis/assets/js/core/jquery.3.2.1.min.js')}}"></script>
    <script src="{{ asset('atlantis/assets/js/core/popper.min.js')}}"></script>
    <script src="{{ asset('atlantis/assets/js/core/bootstrap.min.js')}}"></script>

    <!-- jQuery UI -->
    <script src="{{ asset('atlantis/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('atlantis/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{ asset('atlantis/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>


    <!-- Chart JS -->
    <script src="{{ asset('atlantis/assets/js/plugin/chart.js/chart.min.js')}}"></script>

    <!-- jQuery Sparkline -->
    <script src="{{ asset('atlantis/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>

    <!-- Chart Circle -->
    <script src="{{ asset('atlantis/assets/js/plugin/chart-circle/circles.min.js')}}"></script>

    <!-- Datatables -->
    <script src="{{ asset('atlantis/assets/js/plugin/datatables/datatables.min.js')}}"></script>

    <!-- Bootstrap Notify -->
    <script src="{{ asset('atlantis/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>

    <!-- jQuery Vector Maps -->
    <script src="{{ asset('atlantis/assets/js/plugin/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{ asset('atlantis/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js')}}"></script>

    <!-- Sweet Alert -->
    <script src="{{ asset('atlantis/assets/js/plugin/sweetalert/sweetalert.min.js')}}"></script>

    <!-- Atlantis JS -->
    <script src="{{ asset('atlantis/assets/js/atlantis.min.js')}}"></script>
</body>

</html>
