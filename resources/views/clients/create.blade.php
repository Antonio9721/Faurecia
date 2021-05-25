@extends('layouts.plantilla')

@section('content')

<div class="container">
	<h3>Formulario para crear un nuevo registro</h3>
	
		<form action="{{ route('clients.store') }}" method="post" enctype="multipart/form-data">
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
			<input class="form-control" type="text" name="Firstname" id="" placeholder="Nombre" required="">
		</div>
		
		<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
			<label for="">Apellidos:</label>
			<input class="form-control" type="text" name="Secondname" id="" placeholder="Apellidos" required="">
		</div>

	<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
		<label for="">Oficio:</label>
		<input class="form-control" type="text" name="Job" id="" placeholder="Oficio" required="">
	</div>
</div>
<br>

	<div class="row">
		<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
		<label for="">Salario Quincenal:</label>
		<input class="form-control" type="int" name="Salary" id="" placeholder="Salario Quincenal" required="">
	</div>

	<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
		<label for="">Compañia Bancaria:</label>
		<input class="form-control" type="text" name="Bank" id="" placeholder="Compañia Bancaria" required="">
	</div>

	<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
		<label for="">Número de Cuenta:</label>
		<input class="form-control" type="int" name="Numcount" id="" placeholder="Número de Cuenta" required="">
	</div>
</div>
<br>
	
	<div class="row">
		<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
			<label for="">Número Teléfonico:</label>
			<input class="form-control" type="int" name="Phone" id="" placeholder="Número Teléfonico" required="">
		</div>


	<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
		<label for="">Correo Electrónico:</label>
		<input class="form-control" type="text" name="Email" id="" placeholder="Correo Electrónico" required="">
	</div>
</div>
<br>

	<div>
		<label for="">Domicilio:</label>
		<textarea class="form-control" name="Address" cols="30" rows="5" required=""></textarea>
	</div>
<br>

	<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    	<input class="btn btn-info" type="reset" value="Restablecer">
    	<input class="btn btn-primary" type="submit" value="Guardar">
    </div>
</form>
</div>

@endsection