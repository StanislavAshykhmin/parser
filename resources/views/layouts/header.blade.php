<div class="splash active">
    <div class="splash-icon"></div>
</div>

<nav class="navbar navbar-expand navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{route('dashboard')}}">
            <svg class="svg-inline--fa fa-stack-overflow fa-w-12 align-middle mr-2 fa-fw" aria-hidden="true"
                 data-prefix="fab" data-icon="stack-overflow" role="img" xmlns="http://www.w3.org/2000/svg"
                 viewBox="0 0 384 512" data-fa-i2svg="">
                <path fill="currentColor"
                      d="M293.7 300l-181.2-84.5 16.7-36.5 181.3 84.7-16.8 36.3zm48-76L188.2 95.7l-25.5 30.8 153.5 128.3 25.5-30.8zm39.6-31.7L262 32l-32 24 119.3 160.3 32-24zM290.7 311L95 269.7 86.8 309l195.7 41 8.2-39zm31.6 129H42.7V320h-40v160h359.5V320h-40v120zm-39.8-80h-200v39.7h200V360z"></path>
            </svg>
            Parser StackOverflow
        </a>

        <div class="navbar-collapse collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown ml-lg-2">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" data-toggle="dropdown">
                        <span class="d-none d-lg-inline-block">{{$user->name}}</span>
                        <span class="d-lg-none"><i class="align-middle fas fa-cog"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="align-middle mr-1 fas fa-fw fa-arrow-alt-circle-right"></i> Sign out</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="header">
    <div class="container">
        <div class="media text-white">
            <img src="/img/corp-soft.png" style="width: 100px; height: auto;" class="avatar img-fluid rounded-circle mr-3" alt="Linda Miller" />
            <div class="media-body">
                <h3 class="mb-1 text-white font-weight-bold">{{$user->name}}</h3>
                <br>
                <a href="https://corpsoft.io/" style="text-decoration: none;">https://corpsoft.io/</a>
            </div>

        </div>
    </div>
</div>
