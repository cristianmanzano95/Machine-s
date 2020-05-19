<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Machines') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a href="{{ url('/') }}" style="margin-right: 5px;">
                    <img src="{{ url('/images/logo.jpeg') }}" width="30" height="30" >
                </a>
                <a class="navbar-brand" href="{{ url('/') }}" style="margin-left: 0px;">
                    {{ config('app.name', 'Machines') }}
                </a>
                
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    
                                    <a class="dropdown-item" href="{{ url('/home') }}">
                                        {{ __('Menú') }}
                                    </a>
                                    
                                    @if( Auth::user()->id_permiso <= 2 )
                                        <a class="dropdown-item" href="{{ route('nodo_registration') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('nodo-register-form').submit();">
                                            {{ __('Agregar Nodo') }}
                                        </a>
                                        <form id="nodo-register-form" action="{{ route('nodo_registration') }}" method="GET" style="display: none;">
                                            @csrf
                                        </form>
                                    @endif

                                    <a class="dropdown-item" href="{{ route('consulta-nodo') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('consulta-nodo-form').submit();">
                                        {{ __('Consultar Nodo') }}
                                    </a>
                                    <form id="consulta-nodo-form" action="{{ route('consulta-nodo') }}" method="GET" style="display: none;">
                                        @csrf
                                    </form>

                                    @if( Auth::user()->id_permiso <= 2 )
                                    <a class="dropdown-item" href="{{ route('device_registration') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('device-register-form').submit();">
                                            {{ __('Agregar Equipo') }}
                                        </a>
                                        <form id="device-register-form" action="{{ route('device_registration') }}" method="GET" style="display: none;">
                                            @csrf
                                        </form>
                                    @endif

                                    <a class="dropdown-item" href="{{ route('consulta-device') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('consulta-device-form').submit();">
                                        {{ __('Consultar Equipo') }}
                                    </a>
                                    <form id="consulta-device-form" action="{{ route('consulta-device') }}" method="GET" style="display: none;">
                                        @csrf
                                    </form>

                                    @if( Auth::user()->id_permiso <= 2 )
                                        <a class="dropdown-item" href="{{ route('sensor_registration') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('sensor-register-form').submit();">
                                            {{ __('Agregar Sensor') }}
                                        </a>
                                        <form id="sensor-register-form" action="{{ route('sensor_registration') }}" method="GET" style="display: none;">
                                            @csrf
                                        </form>                                    
                                    @endif

                                    <a class="dropdown-item" href="{{ route('consulta-sensor') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('consulta-sensor-form').submit();">
                                        {{ __('Consultar Sensor') }}
                                    </a>
                                    <form id="consulta-sensor-form" action="{{ route('consulta-sensor') }}" method="GET" style="display: none;">
                                        @csrf
                                    </form>


                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
