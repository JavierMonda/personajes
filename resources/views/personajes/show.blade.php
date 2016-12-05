@extends('layouts.master2')

@section('content')

  <div class="row">

    <div class="col-sm-6">
      <h1>{{ $personaje->nombre }}</h1>
    </div>
  </div>
  <div class="row">

    <div class="col-sm-6">
      <img class="img img-responsive" src="{{url('/')}}/{{$personaje->imagen}}" />
    </div>
    <div class="col-sm-6">

          <h1>Información del personaje</h1>
          <p>Raza: {{ $personaje->raza }}</p>
          <p>Clase: {{ $personaje->clase }}</p>
          <p>Género: {{ $personaje->genero }}</p>
          <a href="{{ url('/personajes/'. $personaje->id .'/edit/'  ) }}">
            <button type="button" class="btn btn-warning">Editar</button>
          </a>
          <form action="{{action('PersonajeController@destroy', $personaje->id)}}" method="POST" style="display:inline">
          {{ method_field('PUT') }}
          {!! csrf_field() !!}
          <button type="submit" class="btn btn-danger" style="display:inline">
              Borrar
          </button>
      </form>
          <a href="{{ url('personajes') }}">
            <button type="button" class="btn btn-default"> &lt; Volver</button>
      </a>

      </div>

  </div>

@stop