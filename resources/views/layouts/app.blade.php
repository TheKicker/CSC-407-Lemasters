<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<!--    --><?php
//
//        // Set default timezone to Eastern Standard Time
//        date_default_timezone_set('EST');
//        // H = 24 hour time WHEREAS h = 12 hour time
//        // if time is less than 12 hours, 18, else(up to 24)
//        // display appropriate saying and users name if identified
//
//        if (date('H', time()) < 12)
//        {
//            $text = 'Good Morning, ';
//        }
//        elseif (date('H', time()) < 18)
//        {
//            $text = 'Good Afternoon, ';
//        }
//        else
//        {
//            $text = 'Good Evening, ';
//        }
//
//    ?>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="text-shadow: 1px 1px yellow">
                    <strong><i>{{ config('app.name', 'Laravel') }}</i></strong>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('library') }}">{{ __('Library') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">{{ __('About') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">{{ __('Contact Us') }}</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                      {{ Auth::user()-> firstName }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
            <div class="container">

                @yield('content')

            </div>

        </main>
    </div>
</body>


<script>

    {{-- Ask Cav }}

    {{--var text = {{ Auth::user()-> firstName }};--}}

    {{--if (hour < 12)--}}
    {{--{--}}
        {{--document.getElementById("navbarDropdown").innerHTML = "Good morning, " + text;--}}
    {{--}--}}
    {{--else if (hour < 18)--}}
    {{--{--}}
        {{--document.getElementById("navbarDropdown").innerHTML = "Good afternoon, " + text;--}}
    {{--}--}}
    {{--else--}}
    {{--{--}}
        {{--document.getElementById("navbarDropdown").innerHTML = "Good night, " + text;--}}
    {{--}--}}

</script>

</html>
