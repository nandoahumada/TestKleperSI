<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Kepler Zeratul</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="dist/js/adminlte.js"></script>

     
    <!-- Datepicker Files -->
    <link href="{{asset('dist/datePicker/css/bootstrap-datepicker3.css')}}" rel="stylesheet" >
    <script src="{{asset('dist/datePicker/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('dist/datePicker/locales/bootstrap-datepicker.en.min.js')}}"></script>
    {{-- <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css"> --}}
    <script src="{{asset('datePicker/locales/bootstrap-datepicker.es.min.js')}}"></script>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('dist/css/adminlte.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

     <!-- Jquery -->
     <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    
</head>

<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Encuesta de Seguridad Kepler</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/startsurvey">Ir a Encuesta</a>
            </li>
            @if( auth()->check() )
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="#">Hola {{ auth()->user()->name }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Salir</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="/login">Iniciar Sesion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">Registrar</a>
                </li>
            @endif
        </ul>
    </div>
</nav>


            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">

                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    @yield('content')
                </section>
                <!-- /.content -->
            </div>
            
        </div>
    </div>

</body>
</html>