<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
            {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">--}}
            {{--<span class="sr-only">Toggle Navigation</span>--}}
            {{--<span class="icon-bar"></span>--}}
            {{--<span class="icon-bar"></span>--}}
            {{--<span class="icon-bar"></span>--}}
            {{--</button>--}}

            <!-- Branding Image -->
                <a class="navbar-brand" href="{{route('dashboard')}}">
                    <svg class="svg-inline--fa fa-stack-overflow fa-w-12 align-middle mr-2 fa-fw" aria-hidden="true"
                         data-prefix="fab" data-icon="stack-overflow" role="img" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 384 512" data-fa-i2svg="">
                        <path fill="currentColor"
                              d="M293.7 300l-181.2-84.5 16.7-36.5 181.3 84.7-16.8 36.3zm48-76L188.2 95.7l-25.5 30.8 153.5 128.3 25.5-30.8zm39.6-31.7L262 32l-32 24 119.3 160.3 32-24zM290.7 311L95 269.7 86.8 309l195.7 41 8.2-39zm31.6 129H42.7V320h-40v160h359.5V320h-40v120zm-39.8-80h-200v39.7h200V360z"></path>
                    </svg>
                    StackOverflow Parser
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false" aria-haspopup="true" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
