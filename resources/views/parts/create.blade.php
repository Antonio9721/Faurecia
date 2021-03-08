<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

<!DOCTYPE html>
<html>
<head>
	<title>Registro de Autopartes</title>
</head>

<div class="col-12">
	<body>
		<form action="{{ route('parts.store') }}" method="post">
			<div align="center">
				<h4>Industria Automotriz Faurecia</h4>
					<h5>Registrar Autoparte</h5>
						</div>

<br>
<div class="form-group row">
	<div class="col-2"></div>
		<div class="form-group col-md-4">
			<label for="">Nombre:</label>
				<input class="form-control" type="text" name="Name" id="" placeholder="Nombre">
					<br>

		
<label for="">Marca:</label>
	<input class="form-control" type="text" name="Mark" id="" placeholder="Marca">
		<br>

	
<label for="">Tipo:</label>
	<input class="form-control" type="text" name="Kind" id="" placeholder="Tipo">
		</div>

<div class="form-group col-md-4">	
	<label for="">Descripción:</label>
		<input class="form-control" type="text" name="Description" id="" placeholder="Descripción">
		<br>

<label for="">Comentario:</label>
	<input class="form-control" type="text" name="Comentary" id="" placeholder="Comentario">
		<br>

<label for="">Disponible:</label>
	<input class="form-control" type="text" name="Available" id="" placeholder="Disponiblee">
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
