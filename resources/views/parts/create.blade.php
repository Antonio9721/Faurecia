@extends('layout.layout')
@extends('layout.nav')
@section('content')

<!DOCTYPE html>
<html>
<head>
	<title>Registro de Autopartes</title>
</head>

<div class="col-12">
	<body>
		<form action="{{ route('parts.store') }}" method="post">
			@csrf
			<div align="center">
				<h4>Industria Automotriz Faurecia</h4>
					<h5>Registrar Autoparte</h5>
						</div>

<br>
<div class="form-group row">
	<div class="col-2"></div>
		<div class="form-group col-md-3">
			<label for="">Nombre:</label>
				<input class="form-control" type="text" name="Name" id="" placeholder="Nombre">
					<br>

		
<label for="">Marca:</label>
	<input class="form-control" type="text" name="Mark" id="" placeholder="Marca">
		<br>

	
<label for="">Modelo:</label>
	<input class="form-control" type="text" name="Model" id="" placeholder="Modelo">
		</div>

<div class="form-group col-md-3">
	<label for="">Precio:</label>
		<input class="form-control" type="text" name="Price" id="" placeholder="Precio">
	<br>


<label for="">Descripción:</label>
	<input class="form-control" type="text" name="Description" id="" placeholder="Descripción">
		<br>

<label for="">Comentario:</label>
	<input class="form-control" type="text" name="Comentary" id="" placeholder="Comentario">
			<br>
		</div>

<div class="form-group col-md-3">
	<label for="">Disponible:</label>
		<input class="form-control" type="number" name="Available" id="" placeholder="Disponiblee">
			</div>

<div class="col-6"></div>
	<div class="form-group col-md-2">
		<input class="form-control btn btn-primary" type="submit" name="Enviar">
			</div>

<div class="form-group col-md-2">
	<input class="form-control btn btn-danger" type="reset" name="Restablecer">
		</div>
	</div>
</form>
</body>
</div>
@endsection