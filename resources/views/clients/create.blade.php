@extends('layout.footer')
@extends('layouts.plantilla')
@section('content')

<div class="col-12">
	<body>
		<form action="{{ route('clients.store') }}" method="post">
		@csrf
		<div align="center">
		<h4>Industria Automotriz Faurecia</h4>
		<h5>Registrar Cliente</h5>
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

		
<label for="">Oficio:</label>
	<input class="form-control" type="text" name="Job" id="" placeholder="Oficio" required="">
<br>

<label for="">Salario Quincenal:</label>
	<input class="form-control" type="int" name="Salary" id="" placeholder="Salario Quincenal" required="">
</div>

<div class="form-group col-md-3">
	<label for="">Compañia Bancaria:</label>
	<input class="form-control" type="text" name="Bank" id="" placeholder="Compañia Bancaria" required="">
<br>
	
<label for="">Número de Cuenta:</label>
	<input class="form-control" type="int" name="Numcount" id="" placeholder="Número de Cuenta" required="">
<br>

<label for="">Número Teléfonico:</label>
	<input class="form-control" type="int" name="Phone" id="" placeholder="Número Teléfonico" required="">
<br>

<label for="">Correo Electrónico:</label>
	<input class="form-control" type="text" name="Email" id="" placeholder="Correo Electrónico" required="">
</div>

<div class="form-group col-md-3">
	<label for="">Domicilio:</label>
	<textarea class="form-control" name="Address" cols="30" rows="5" required=""></textarea>
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