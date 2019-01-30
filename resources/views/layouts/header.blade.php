<div class="splash active">
    <div class="splash-icon"></div>
</div>
<nav class="navbar navbar-expand navbar-dark bg-dark">
    {!! Notify::render() !!}
    <div class="container">
        <a class="navbar-brand" href="{{route('dashboard')}}">
            <svg class="svg-inline--fa fa-toolbox fa-w-12 align-middle mr-2 fa-fw" aria-hidden="true"
                 data-prefix="fab" data-icon="toolbox" role="img" xmlns="http://www.w3.org/2000/svg"
                 viewBox="0 0 384 512" data-fa-i2svg="">
                <path fill="currentColor"
                      d="M502.63 214.63l-45.25-45.25c-6-6-14.14-9.37-22.63-9.37H384V80c0-26.51-21.49-48-48-48H176c-26.51 0-48 21.49-48 48v80H77.25c-8.49 0-16.62 3.37-22.63 9.37L9.37 214.63c-6 6-9.37 14.14-9.37 22.63V320h128v-16c0-8.84 7.16-16 16-16h32c8.84 0 16 7.16 16 16v16h128v-16c0-8.84 7.16-16 16-16h32c8.84 0 16 7.16 16 16v16h128v-82.75c0-8.48-3.37-16.62-9.37-22.62zM320 160H192V96h128v64zm64 208c0 8.84-7.16 16-16 16h-32c-8.84 0-16-7.16-16-16v-16H192v16c0 8.84-7.16 16-16 16h-32c-8.84 0-16-7.16-16-16v-16H0v96c0 17.67 14.33 32 32 32h448c17.67 0 32-14.33 32-32v-96H384v16z"></path>
            </svg>
            &nbsp;CORPSOFT Tool
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
