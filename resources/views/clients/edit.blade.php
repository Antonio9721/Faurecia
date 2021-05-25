@extends('layouts.plantilla')

@section('content')


<div class="container">
	<h3>Actualizar datos del cliente <b>{{ $client->Firstname }} {{ $client->Secondname }}</b></h3>
	
		<form action="{{ route('clients.update', $client->id) }}" method="post">

		@csrf
		@method('PUT')

		<input type="hidden" name="id">

	<div class="row">
		<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
		<label for="">Nombre:</label>
		<input class="form-control" type="text" name="Firstname" value="{{ 
		$client->Firstname }}" required="">
	</div>

	<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
		<label for="">Apellidos:</label>
		<input class="form-control" type="text" name="Secondname" value="{{ 
		$client->Secondname }}" required="">
	</div>

	<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
		<label for="">Oficio:</label>
		<input class="form-control" type="text" name="Job" value="{{ 
		$client->Job }}" required="">
	</div>
</div>
<br>

	<div class="row">
		<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
			<label for="">Salario Quincenal:</label>
		<input class="form-control" type="int" name="Salary" value="{{ 
		$client->Salary }}" required="">
	</div>

	<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
		<label for="">Compañia Bancaria:</label>
		<input class="form-control" type="text" name="Bank" value="{{ 
		$client->Bank }}" required="">
	</div>
	
	<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
		<label for="">Número de Cuenta:</label>
		<input class="form-control" type="int" name="Numcount" value="{{ 
		$client->Numcount }}" required="">
	</div>
</div>
<br>

	<div class="row">
		<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
			<label for="">Número Teléfonico:</label>
			<input class="form-control" type="int" name="Phone" value="{{ 
			$client->Phone }}" required="">
		</div>

	<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
		<label for="">Correo Electrónico:</label>
		<input class="form-control" type="text" name="Email" value="{{ 
		$client->Email }}" required="">
	</div>
</div>

	<div>
		<label for="">Domicilio:</label>
		<textarea class="form-control" name="Address" cols="30" rows="5" 
		required="">{{ $client->Address }}</textarea>
	</div>
<br>


<div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Guardar">
        </div>

    </form>

</div>


@endsection