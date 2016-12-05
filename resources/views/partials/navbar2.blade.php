<nav class="navbar navbar-default">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">
                <!-- <span class="glyphicon glyphicon-tower" aria-hidden="true"></span> -->
                <span><img src="{{ url('/img/logo.png') }}" style="width: 100px; height: 50px;""></span>
                Mis Personajes de Shaiya
            </a>
        </div>

        @if( Auth::check() )
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Entrar</a></li>
                    <li><a href="{{ url('/register') }}">Registrarse</a></li>
                @else
                    <li{{ Request::is('personajes*') && !Request::is('personajes/create')? ' class=active' : ''}}>
                        <a href="{{url('/personajes')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Mis Personajes
                        </a>
                    </li>
                    <li{{ Request::is('personajes/create') ? ' class=active' : ''}}>
                        <a href="{{url('/personajes/create')}}">
                            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                            Crear Personaje
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ url('/logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Cerrar sesión
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
        @endif
    </div>
</nav>