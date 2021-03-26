@extends('layout.footer')
@extends('layouts.plantilla')
@section('content')


<div class="col-12">
	<body>
		<form action="{{ route('clients.update', $client->id) }}" method="post">

		@csrf
		@method('PUT')

		<div align="center">
		<h4>Industria Automotriz Faurecia</h4>
		<h5>Actualizar datos del cliente <b>{{ $client->Firstname }} {{ $client->Secondname }}</b></h5>
	</div>

<br>
<div class="form-group row">
	<div class="col-2"></div>
	<div class="form-group col-md-3">
	<label for="">Nombre:</label>
	<input class="form-control" type="text" name="Firstname" value="{{ $client->Firstname }}" required="">
<br>
		
<label for="">Apellidos:</label>
	<input class="form-control" type="text" name="Secondname" value="{{ $client->Secondname }}" required="">
<br>

		
<label for="">Oficio:</label>
	<input class="form-control" type="text" name="Job" value="{{ $client->Job }}" required="">
<br>

<label for="">Salario Quincenal:</label>
	<input class="form-control" type="int" name="Salary" value="{{ $client->Salary }}" required="">
</div>

<div class="form-group col-md-3">
	<label for="">Compañia Bancaria:</label>
	<input class="form-control" type="text" name="Bank" value="{{ $client->Bank }}" required="">
<br>
	
<label for="">Número de Cuenta:</label>
	<input class="form-control" type="int" name="Numcount" value="{{ $client->Numcount }}" required="">
<br>

<label for="">Número Teléfonico:</label>
	<input class="form-control" type="int" name="Phone" value="{{ $client->Phone }}" required="">
<br>

<label for="">Correo Electrónico:</label>
	<input class="form-control" type="text" name="Email" value="{{ $client->Email }}" required="">
</div>

<div class="form-group col-md-3">
	<label for="">Domicilio:</label>
	<textarea class="form-control" name="Address" cols="30" rows="5" required="">{{ $client->Address }}</textarea>
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