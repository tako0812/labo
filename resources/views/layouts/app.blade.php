<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/chart.js') }}" defer></script>
    <script src="{{ asset('js/like.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script src="{{ mix('js/show_chart.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>

    <script defer src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">


</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
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
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        @else
                            <li class="nav-item dropdown">

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('hiyari.new') }}">??????????????????</a>
                                    <a class="dropdown-item" href="{{ route('hiyari.ranking') }}">?????????????????????</a>
                                    <a class="dropdown-item" href="{{ route('home') }}">????????????</a>
                                    <a class="dropdown-item" href="{{ route('hiyari.create') }}">????????????</a>
                                    <a class="dropdown-item" href="{{ route('user.index') }}">?????????????????????????????????</a>
                                    <a class="dropdown-item" href="{{ route('Analytics.index') }}">?????????????????????????????????</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                                             document.getElementById('logout-form').submit();">
                                        {{ __('???????????????') }}

                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
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
            {{-- <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-2 d-none d-lg-block sidebar">
                        <ul class="nav flex-column nav-fill???nav-pills">
                            <li class="nav-item">
                                <a class="nav-link  text-dark btn btn-outline-secondary inside-sidebar" href="{{ route('hiyari.new') }}">?????????</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark btn btn-outline-secondary inside-sidebar" href="{{ route('hiyari.ranking') }}">?????????</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark btn btn-outline-secondary inside-sidebar" href="{{ route('home') }}">??????</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark btn btn-outline-secondary inside-sidebar" href="{{ route('hiyari.create') }}">??????</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark btn btn-outline-secondary inside-sidebar" href="{{ route('user.index') }}">??????????????????</a>
                            </li>
                        </ul>
                    </div> --}}
            {{-- <div class="col-md-10"> --}}
            @yield('content')
            {{-- </div> --}}
            {{-- </div> --}}
            {{-- </div> --}}
        </main>



        <div class="container-fluid futmenu d-lg-none">
            <div class="row justify-content-center secondry">

                {{-- ???????????????????????????????????????????????? --}}
                @if (route('hiyari.new') == url()->current() or route('hiyari.new.holiday') == url()->current())
                    <a class="col" href="{{ route('hiyari.new') }}">
                        <i class="material-icons undermenu-icon-clicked home"></i>
                    </a>

                @else
                    <a class="col" href="{{ route('hiyari.new') }}">
                        <i class="material-icons undermenu-icon home"></i>
                    </a>
                @endif

                @if (route('hiyari.ranking') == url()->current() or route('hiyari.ranking.holiday') == url()->current())
                    <a class="col" href="{{ route('hiyari.ranking') }}">
                        <i class="material-icons undermenu-icon-clicked crown"></i>
                    </a>

                @else
                    <a class="col" href="{{ route('hiyari.ranking') }}">
                        <i class="material-icons undermenu-icon crown"></i>
                    </a>
                @endif


                @if (route('home') == url()->current() or request()->is('*work*'))
                    <a class="col" href="{{ route('home') }}">
                        <i class="material-icons undermenu-icon-clicked search"></i>
                        
                    </a>

                @else

                    <a class="col" href="{{ route('home') }}">
                        
                        <i class="material-icons undermenu-icon search"></i>
                        
                    </a>
                @endif

                @if (route('hiyari.create') == url()->current())
                    <a class="col" href="{{ route('hiyari.create') }}">
                        <i class="material-icons undermenu-icon-clicked edit"></i>
                    </a>

                @else
                    <a class="col" href="{{ route('hiyari.create') }}">
                        <i class="material-icons undermenu-icon edit"></i>
                    </a>
                @endif



                @if (route('Analytics.index') == url()->current())
                    <a class="col" href="{{ route('Analytics.index') }}">
                        <i class="material-icons undermenu-icon-clicked assessment"></i>
                    </a>
                @else
                    <a class="col" href="{{ route('Analytics.index') }}">
                        <i class="material-icons undermenu-icon assessment"></i>
                    </a>
                @endif

                
                {{-- @if (route('user.index') == url()->current())
                    <a class="col" href="{{ route('user.index') }}">
                        <i class="material-icons undermenu-icon-clicked person"></i>
                    </a>
                @else
                    <a class="col" href="{{ route('user.index') }}">
                        <i class="material-icons undermenu-icon person"></i>
                    </a>
                @endif --}}





            </div>
        </div>
    </div>
</body>

</html>
