@extends('layouts.master2')

@section('content')

    <div class="row" style="margin-top:20px">

		<div class="col-md-offset-3 col-md-6">

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title text-center">
						<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
						Añadir nuevo Personaje
					</h3>
				</div>

				<div class="panel-body" style="padding:30px">
				
					<form class="form" enctype="multipart/form-data" method="POST" action="">
						{{ csrf_field() }}

	    
	    				<div class="form-group">
	    					<label for="title">Nombre</label>
	    					<input type="text" name="nombre" id="title" class="form-control">
						</div>

						<div class="form-group">
							<label for="file">Imagen</label>
							<input type="file" name="imagen" id="file" class="form-control">
						</div>

					    <div class="form-group">
	    					<label for="raza">Raza</label>
	    					<input type="text" name="raza" id="raza" class="form-control">
						</div>

						<div class="form-group">
	    					<label for="clase">Clase</label>
	    					<input type="text" name="clase" id="clase" class="form-control">
						</div>

						<div class="form-group">
	    					<label for="genero">Género</label>
	    					<input type="text" name="genero" id="genero" class="form-control">
						</div>

						<div class="form-group text-center">
							<button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
								Añadir
							</button>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>

@stop