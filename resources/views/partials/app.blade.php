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

        <!-- @if( Auth::check() ) -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                
                <li><a href="{{ url('/login') }}">Entrar</a></li>
                <li><a href="{{ url('/register') }}">Registrarse</a></li>
            </ul>
        </div>
        <!-- @endif -->
    </div>
</nav>