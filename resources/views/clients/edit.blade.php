@extends('layout.layout')
@extends('layout.nav')
@section('content')

<center>
  <div class="col-sn-10"><h4>Industria Automotriz Faurecia</h4></div>
  <div class="col-sn-10"><h5>Editar Registro</h5></div>
  </center>


<div class="d-grid gap-2 d-md-flex justify-content-md-start">
    <a class="btn btn-danger" href="{{ route('clients.index') }}">Cancelar Edición</a></div>
</div>

<br>
<div class="jumbotron">
<form method="post" action="{{ route('clients.update', $client->id) }}">
	@csrf
	@method('PUT')
	<div>

<div class="form-group row">
	<div class="col-2"></div>
		<div class="form-group col-md-3">
			<label for="">Nombre:</label>
				<input class="form-control" type="text" value="{{$client->Firstname }}" name="Firstname" id=""
		 	required maxlength="25">
		<br>

<label for="">Apellidos:</label>
	<input class="form-control" type="text" value="{{$client->Secondname }}" name="Secondname" id=""
	 	required maxlength="25">
	<br>


<label for="">Dirección:</label>
	<input class="form-control"  type="text" value="{{$client->Address }}" name="Address" id="" 
		required maxlength="145">
	</div>


<div class="form-group col-md-3">
	<label for="">Oficio:</label>
		<input class="form-control"  type="text" value="{{$client->Job }}" name="Job" id="" 
			required maxlength="20">
	<br>

<label for="">Salario Quincenal:</label>
	<input class="form-control" type="text" value="{{$client->Salary }}" name="Salary" id=""
		 required maxlength="15">
<br>

<label for="">Compañia Bancaria:</label>
	<input class="form-control" type="text" value="{{$client->Bank }}" name="Bank" id="" 
		required maxlength="25">
		<br>
	</div>

<div class="form-group col-md-3">
	<label for="">Número de Cuenta:</label>
		<input class="form-control" type="text" value="{{$client->Numcount }}" name="Numcount" id="" 
		required maxlength="12">
	<br>

<label for="">Número Teléfonico:</label>
	<input class="form-control" type="text" value="{{$client->Phone }}" name="Phone" id="" 
		required maxlength="12">
	<br>

<label for="">Correo Electrónico:</label>
	<input class="form-control" type="text" value="{{$client->Email }}" name="Email" id="" 
		required maxlength="32">
	</div>


<div class="col-6"></div>
	<div class="form-group col-md-2">
		<input class="form-control btn btn-primary" type="submit" name="Guardar Cambios">
			</div>

<div class="form-group col-md-2">
	<input class="form-control btn btn-warning" type="reset" name="Restablecer">
		</div>
	</div>
	
</form>
</div>

@endsection

