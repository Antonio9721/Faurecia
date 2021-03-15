@extends('layout.layout')
@extends('layout.nav')
@section('content')

<center>
  <div class="col-sn-10"><h4>Industria Automotriz Faurecia</h4></div>
  <div class="col-sn-10"><h5>Editar Registro</h5></div>
  </center>


<div class="d-grid gap-2 d-md-flex justify-content-md-start">
    <a class="btn btn-danger" href="{{ route('parts.index') }}">Cancelar Edición</a></div>
</div>

<br>
<div class="jumbotron">
<form method="post" action="{{ route('parts.update', $part->id) }}">
	@csrf
	@method('PUT')
	<div>

<div class="form-group row">
	<div class="col-2"></div>
		<div class="form-group col-md-3">
			<label for="">Nombre:</label>
				<input class="form-control" type="text" value="{{$part->Name }}" name="Name" id=""
		 	required maxlength="20">
		<br>

<label for="">Marca:</label>
	<input class="form-control" type="text" value="{{$part->Mark }}" name="Mark" id=""
	 	required maxlength="15">
	<br>


<label for="">Modelo:</label>
	<input class="form-control"  type="text" value="{{$part->Model }}" name="Model" id="" 
		required maxlength="12">
	</div>

<div class="form-group col-md-3">
	<label for="">Precio:</label>
		<input class="form-control"  type="text" value="{{$part->Price }}" name="Price" id="" 
			required maxlength="10">
	<br>

<label for="">Descripción:</label>
	<input class="form-control"  type="text" value="{{$part->Description }}" name="Description" id="" 
			required maxlength="50">
	<br>

<label for="">Comentario:</label>
	<input class="form-control" type="text" value="{{$part->Comentary }}" name="Comentary" id=""
		 required maxlength="50">
		 <br>
</div>

<div class="form-group col-md-3">
	<label for="">Disponibilidad:</label>
		<input class="form-control" type="number" value="{{$part->Available }}" name="Available" id="" 
		required maxlength="2">
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
