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
                <span><img class="img img-responsive" src="{{ url('/img/logo.png') }}" style="width: 100px; height: 50px;" /></span>
            </a>
        </div>

        @if( Auth::check() )
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
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
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{url('/logout')}}">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        Cerrar sesión
                    </a>
                </li>
            </ul>
        </div>
        @endif
    </div>
</nav>
