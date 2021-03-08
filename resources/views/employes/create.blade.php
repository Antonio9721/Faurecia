<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

<!DOCTYPE html>
<html>
<head>
	<title>Registro de Empleados</title>
</head>

<div class="col-12">
	<body>
		<form action="{{ route('employes.store') }}" method="post">
			<div align="center">
				<h4>Industria Automotriz Faurecia</h4>
					<h5>Registrar Empleado</h5>
						</div>

<br>
<div class="form-group row">
	<div class="col-2"></div>
		<div class="form-group col-md-3">
			<label for="">Nombre:</label>
				<input class="form-control" type="text" name="Firstname" id="" placeholder="Nombre">
					<br>

		
<label for="">Apellidos:</label>
	<input class="form-control" type="text" name="Secondname" id="" placeholder="Apellidos">
		<br>

		
<label for="">Área de Trabajo:</label>
	<input class="form-control" type="text" name="Area" id="" placeholder="Área de Trabajo">
		</div>

<div class="form-group col-md-3">
	<label for="">Salario Quincenal:</label>
		<input class="form-control" type="text" name="Salary" id="" placeholder="Salario Quincenal">
			<br>


	<label for="">Clave de Identificación:</label>
		<input class="form-control" type="text" name="Keycode" id="" placeholder="Clave de Identificación">
			<br>

		
<label for="">Correo Elcetrónico:</label>
	<input class="form-control" type="text" name="Email" id="" placeholder="Correo Electrónico">
		<br>
			</div>
		
<div class="form-group col-md-3">		
	<label for="">Número Teléfonico:</label>
		<input class="form-control" type="int" name="Phone" id="" placeholder="Número Teléfonico">
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