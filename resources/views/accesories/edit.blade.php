@extends('layout.layout')
@extends('layout.nav')
@section('content')

<center>
  <div class="col-sn-10"><h4>Industria Automotriz Faurecia</h4></div>
  <div class="col-sn-10"><h5>Editar Registro</h5></div>
  </center>


<div class="d-grid gap-2 d-md-flex justify-content-md-start">
    <a class="btn btn-danger" href="{{ route('accesories.index') }}">Cancelar Edición</a></div>
</div>

<br>
<div class="jumbotron">
<form method="post" action="{{ route('accesories.update', $accesory->id) }}">
	@csrf
	@method('PUT')
	<div>

<div class="form-group row">
	<div class="col-2"></div>
		<div class="form-group col-md-3">
			<label for="">Nombre:</label>
				<input class="form-control" type="text" value="{{$accesory->Name }}" name="Name" id=""
		 	required maxlength="20">
		<br>

<label for="">Modelo:</label>
	<input class="form-control" type="text" value="{{$accesory->Model }}" name="Model" id=""
	 	required maxlength="12">
	<br>


<label for="">Número de Serie:</label>
	<input class="form-control"  type="int" value="{{$accesory->Numserie }}" name="Numserie" id="" 
		required maxlength="12">
	</div>


<div class="form-group col-md-3">
	<label for="">Precio:</label>
		<input class="form-control"  type="text" value="{{$accesory->Price }}" name="Price" id="" 
			required maxlength="12">
	<br>

<label for="">Estado:</label>
	<input class="form-control" type="text" value="{{$accesory->State }}" name="State" id=""
		 required maxlength="12">
<br>

<label for="">Comentario:</label>
	<input class="form-control" type="text" value="{{$accesory->Comentary }}" name="Comentary" id="" 
		required maxlength="50">
		<br>
	</div>

<div class="form-group col-md-3">
	<label for="">Disponible:</label>
		<input class="form-control" type="number" value="{{$accesory->Available }}" name="Available" id="">
	<br>

<label for="">Fecha de Adquisición:</label>
	<input class="form-control" type="date" value="{{$accesory->Date }}" name="Date" id="" 
		required maxlength="">
	<br>

<label for="">Hora de Adquisición:</label>
	<input class="form-control" type="time" value="{{$accesory->Time }}" name="Time" id="" 
		required maxlength="">
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

