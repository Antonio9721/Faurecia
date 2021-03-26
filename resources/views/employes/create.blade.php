@extends('layout.footer')
@extends('layouts.plantilla')
@section('content')

<div class="col-12">
	<body>
		<form action="{{ route('employes.store') }}" method="post">
			@csrf
		<div align="center">
			<h4>Industria Automotriz Faurecia</h4>
			<h5>Registrar Empleado</h5>
		</div>

<br>
<div class="form-group row">
	<div class="col-2"></div>
	<div class="form-group col-md-3">
	<label for="">Nombre:</label>
	<input class="form-control" type="text" name="Firstname" id="" placeholder="Nombre" required="">
<br>
		
<label for="">Apellidos:</label>
	<input class="form-control" type="text" name="Secondname" id="" placeholder="Apellidos" required="">
<br>
		
<label for="">Área de Trabajo:</label>
	<input class="form-control" type="text" name="Area" id="" placeholder="Área de Trabajo" required="">
</div>

<div class="form-group col-md-3">
	<label for="">Salario Quincenal:</label>
	<input class="form-control" type="text" name="Salary" id="" placeholder="Salario Quincenal" required="">
<br>

<label for="">Clave de Identificación:</label>
	<input class="form-control" type="text" name="Keycode" id="" placeholder="Clave de Identificación" required="">
<br>
		
<label for="">Correo Elcetrónico:</label>
	<input class="form-control" type="text" name="Email" id="" placeholder="Correo Electrónico" required="">
</div>
		
<div class="form-group col-md-3">		
	<label for="">Número Teléfonico:</label>
	<input class="form-control" type="int" name="Phone" id="" placeholder="Número Teléfonico" required="">
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