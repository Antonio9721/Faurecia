<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

<!DOCTYPE html>
<html>
<head>
	<title>Registro de Automóviles</title>
</head>

<div class="col-12">
	<body>
		<form action="{{ route('cars.store') }}" method="post">
			<div align="center">
				<h4>Industria Automotriz Faurecia</h4>
					<h5>Registrar Automóvil</h5>
						</div>

<br>
<div class="form-group row">
	<div class="col-2"></div>
		<div class="form-group col-md-3">
			<label for="">Marca:</label>
				<input class="form-control" type="text" name="brand" id="" placeholder="Marca">
					<br>

		
<label for="">Modelo:</label>
	<input class="form-control" type="text" name="model" id="" placeholder="Modelo">
		<br>

		
<label for="">Color del Auto:</label>
	<input class="form-control" type="text" name="color" id="" placeholder="Color">
		<br>

	
	<label for="">Número de Serie:</label>
		<input class="form-control" type="number" name="serialNumber" id="" placeholder="Número de Serie">
			</div>

<div class="form-group col-md-3">
	<label for="">Matricula:</label>
		<input class="form-control" type="text" name="matricule" id="" placeholder="Matricula">
			<br>

		
<label for="">Número de Puertas:</label>
	<input class="form-control" type="number" name="numberDoors" id="" placeholder="Número de Puertas">
		<br>
		
<label for="">Número de Asientos:</label>
	<input class="form-control" type="number" name="numberChair" id="" placeholder="Número de Asientos">
		<br>

		
<label for="">Kilometraje:</label>
	<input class="form-control" type="number" name="mileage" id="" placeholder="Kilometraje">
		</div>

<div class="form-group col-md-3">
	<label for="">Número de Cilindros:</label>
		<input class="form-control" type="number" name="numberCylenders" id="" placeholder="Cilindros">
			<br>
	
<label for="">Descripción:</label>
	<input class="form-control" type="text" name="description" id="" placeholder="Descripción">
		<br>
	
<label for="">Comentario:</label>
	<input class="form-control" type="text" name="comentary" id="" placeholder="Comentario">
		<br>

<label for="">Disponibilidad:</label>
	<input class="form-control" type="text" name="available" id="" placeholder="Disponibilidad">
		<br>
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