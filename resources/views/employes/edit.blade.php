@extends('layout.layout')
@extends('layout.nav')
@section('content')

<center>
<div class="col-sn-10"><h4>Industria Automotriz Faurecia</h4></div>
  <div class="col-sn-10"><h5>Editar Registro</h5></div>
  </center>


<div class="d-grid gap-2 d-md-flex justify-content-md-start">
    <a class="btn btn-danger" href="{{ route('employes.index') }}">Cancelar Edición</a></div>
</div>

<br>
<div class="jumbotron">
<form method="post" action="{{ route('employes.update', $employe->id) }}">
	@csrf
	@method('PUT')
	<div>

<div class="form-group row">
	<div class="col-2"></div>
		<div class="form-group col-md-3">
			<label for="">Nombre:</label>
				<input class="form-control" type="text" value="{{$employe->Firstname }}" name="Firstname" id=""
		 	required maxlength="25">
		<br>

<label for="">Apellidos:</label>
	<input class="form-control" type="text" value="{{$employe->Secondname }}" name="Secondname" id=""
	 	required maxlength="25">
	<br>


<label for="">Área de Trabajo:</label>
	<input class="form-control"  type="text" value="{{$employe->Area }}" name="Area" id="" 
		required maxlength="20">
	</div>


<div class="form-group col-md-3">
	<label for="">Salario Quincenal:</label>
		<input class="form-control"  type="text" value="{{$employe->Salary }}" name="Salary" id="" 
			required maxlength="20">
	<br>

<label for="">Clave de Identificación:</label>
	<input class="form-control" type="text" value="{{$employe->Keycode }}" name="Keycode" id=""
		 required maxlength="12">
<br>

<label for="">Correo Electrónico:</label>
	<input class="form-control" type="email" value="{{$employe->Email }}" name="Email" id="" 
		required maxlength="32">
		<br>
	</div>

<div class="form-group col-md-3">
	<label for="">Número Teléfonico:</label>
		<input class="form-control" type="text" value="{{$employe->Phone }}" name="Phone" id="" 
		required maxlength="12">
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

