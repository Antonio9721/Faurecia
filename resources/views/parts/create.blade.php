@extends('layouts.plantilla')

@section('content')


<div class="container">
	<h3>Formulario para crear un nuevo registro</h3>

	<form action="{{ route('parts.store') }}" method="post" enctype="multipart/form-data">
		@csrf

	<div class="row mb-3">
		<div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">
			<label for="">Imagen:</label>
			<input type="file" name="image" id="" accept="image/*" required="">
		</div>
	</div>
	<br>
		
	<div class="row">
		<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
			<label for="">Nombre:</label>
			<input class="form-control" type="text" name="Name" id="" placeholder="Nombre" required="">
	</div>

	<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">		
		<label for="">Marca:</label>
		<input class="form-control" type="text" name="Mark" id="" placeholder="Marca" required="">
	</div>

	<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">	
		<label for="">Modelo:</label>
		<input class="form-control" type="text" name="Model" id="" placeholder="Modelo" required="">
	</div>
</div>
<br>

	<div class="row">
		<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
			<label for="">Precio:</label>
			<input class="form-control" type="text" name="Price" id="" placeholder="Precio" required="">
		</div>

	<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
		<label for="">Disponible:</label>
		<input class="form-control" type="number" name="Available" id="" placeholder="Disponible" required="">
	</div>				
</div>
<br>

	<div>
		<label for="">Comentario:</label>
		<textarea class="form-control" name="Comentary" id="" cols="30" rows="5"></textarea>
	</div>
<br>

	<div>
		<label for="">Descripción:</label>
		<textarea class="form-control" name="Description" id="" cols="30" rows="5"></textarea>
	</div>
<br>


	<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    	<input class="btn btn-info" type="reset" value="Restablecer">
    	<input class="btn btn-primary" type="submit" value="Guardar">
    </div>
</form>
</div>

@endsection