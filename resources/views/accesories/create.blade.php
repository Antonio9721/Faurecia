@extends('layout.layout')
@extends('layout.nav')
@section('content')

<!DOCTYPE html>
<html>
<head>
	<title>Registro de Acesorios</title>
</head>

<div class="col-12">
	<body>
		<form action="{{ route('accesories.store') }}" method="post">
			@csrf
			<div align="center">
					<h4>Industria Automotriz Faurecia</h4>
					<h5>Registrar Accesorio</h5>
						</div>

<br>
<div class="form-group row">
	<div class="col-2"></div>
		<div class="form-group col-md-3">
			<label for="">Nombre:</label>
				<input class="form-control" type="text" name="Name" id="" placeholder="Nombre">
					<br>

		
<label for="">Modelo:</label>
	<input class="form-control" type="text" name="Model" id="" placeholder="Modelo">
		<br>

	
<label for="">Número de Serie:</label>
		<input class="form-control" type="int" name="Numserie" id="" placeholder="Número de Serie">
			</div>

<div class="form-group col-md-3">	
	<label for="">Precio:</label>
		<input class="form-control" type="text" name="Price" id="" placeholder="Precio">
			<br>

<label for="">Estado:</label>
	<input class="form-control" type="text" name="State" id="" placeholder="Estado">
		<br>

	
<label for="">Comentario:</label>
	<input class="form-control" type="text" name="Comentary" id="" placeholder="Comentario">
		<br>
		</div>

<div class="form-group col-md-3">	
	<label for="">Disponible:</label>
		<input class="form-control" type="number" name="Available" id="" placeholder="Disponible">
			<br>

<label for="">Fecha de Adquisición:</label>
	<input class="form-control" type="date" name="Date" id="" placeholder="Fecha de Adquisición">
		<br>

<label for="">Hora de Adquisición:</label>
	<input class="form-control" type="time" name="Time" id="" placeholder="Hora de Adquisición">
		</div>

<div class="col-6"></div>
	<div class="form-group col-md-2">
		<input class="form-control btn btn-primary" type="submit" name="Enviar">
			</div>

<div class="form-group col-md-2">
	<input class="form-control btn btn-warning" type="reset" name="Restablecer">
		</div>
	</div>
</form>
</body>
</div>
@endsection
