@extends('layouts.master2')

@section('content')

	<div class="row" style="margin-top:20px">

		<div class="col-md-offset-3 col-md-6">

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title text-center">
						<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
						Editar Personaje
					</h3>
				</div>

				<div class="panel-body" style="padding:30px">
				
					{{-- FORMULARIO --}}
					<form class="form" enctype="multipart/form-data" method="POST" action="">
						{{ method_field('PUT') }}

						{{-- Protección contra CSRF --}}
						{{ csrf_field() }}
	    
	    				<div class="form-group">
	    					<label for="title">Nombre</label>
	    					<input type="text" name="nombre" id="title" class="form-control" value="{{$personaje->nombre}}">
						</div>

						<div class="form-group">
							<label for="file">Imagen</label>
							<input type="file" name="imagen" id="file" class="form-control" value="/{{$personaje->imagen}}" >
							<img class="img img-responsive" src="/{{$personaje->imagen}}" />
						</div>

						<div class="form-group">
	    					<label for="title">Raza</label>
	    					<input type="text" name="raza" id="title" class="form-control" value="{{$personaje->raza}}">
						</div>

						<div class="form-group">
	    					<label for="title">Clase</label>
	    					<input type="text" name="clase" id="title" class="form-control" value="{{$personaje->clase}}">
						</div>

						<div class="form-group">
	    					<label for="title">Género</label>
	    					<input type="text" name="genero" id="title" class="form-control" value="{{$personaje->genero}}">
						</div>

						<div class="form-group text-center">
							<div class="form-group">
								<button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
									Confirmar
								</button>
							</div>
							<div class="form-group">
								<a href="{{ url('personajes/' . $personaje->id) }}">
						        	<button type="button" class="btn btn-default"> &lt; Volver</button>
								</a>
							</div>
						</div>
					</form>
					{{-- FIN FORMULARIO --}}

				</div>
			</div>
		</div>
	</div>
    

@stop