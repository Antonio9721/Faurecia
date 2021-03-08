<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

<!DOCTYPE html>
<html>
<head>
	<title>Registro de Acesorios</title>
</head>

<div class="col-12">
	<body>
		<form action="{{ route('accesories.store') }}" method="post">
			<div align="center">
				<h4>Industria Automotriz Faurecia</h4>
					<h5>Registrar Accesorios</h5>
						</div>

<br>
<div class="form-group row">
	<div class="col-2"></div>
		<div class="form-group col-md-3">
			<label for="">Nombre:</label>
				<input class="form-control" type="text" name="Name" id="" placeholder="Nombre">
					<br>

		
<label for="">Tipo:</label>
	<input class="form-control" type="text" name="Kind" id="" placeholder="Tipo">
		</div>

<div class="form-group col-md-3">	
	<label for="">Precio:</label>
		<input class="form-control" type="text" name="Price" id="" placeholder="Precio">
			<br>

	
<label for="">Estado:</label>
	<input class="form-control" type="text" name="State" id="" placeholder="Estado">
		</div>

<div class="form-group col-md-3">
	<label for="">Fecha de Compra:</label>
		<input class="form-control" type="date" name="Date" id="" placeholder="Fecha">
			<br>

	
<label for="">Hora de Compra:</label>
	<input class="form-control" type="time" name="Time" id="" placeholder="Hora">
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
