@extends('layouts.master2')

@section('content')

  <div class="row">
  <div class="col-lg-12 col-md-12">
    <h2>Listado de personajes del juego Shaiya</h2>
  </div>

    @foreach( $personaje as $p )
      <div class="col-xs-6 col-sm-6 col-md-3 text-center" >
        <a href="{{ url('/personajes/' . $p->id ) }}">
          <img class="img img-responsive" src="{{ url('/') }}/{{$p->imagen}}"  />
          <h4 style="min-height:45px;margin:5px 0 10px 0">
            {{$p->nombre}}
          </h4>
        </a>
      </div>
    @endforeach

  </div>

@stop