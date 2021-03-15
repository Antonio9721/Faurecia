@extends('layout.layout')
@extends('layout.nav')
@section('content')


<center>
<div class="col-sn-10"><h4>Industria Automotriz Faurecia</h4></div>
  <div class="col-sn-10"><h5>Editar Registro</h5></div>
  </center>


<div class="d-grid gap-2 d-md-flex justify-content-md-start">
    <a class="btn btn-danger" href="{{ route('cars.index') }}">Cancelar Edición</a></div>
</div>

<br>
<div class="jumbotron">
<form method="post" action="{{ route('cars.update', $car->id) }}">
	@csrf
	@method('PUT')
	<div>

<div class="form-group row">
	<div class="col-2"></div>
		<div class="form-group col-md-3">
			<label for="">Marca:</label>
				<input class="form-control" type="text" value="{{$car->brand }}" name="brand" id=""
		 	required maxlength="15">
		<br>

<label for="">Modelo:</label>
	<input class="form-control" type="text" value="{{$car->Model }}" name="Model" id=""
	 	required maxlength="12">
	<br>


<label for="">Color del Auto:</label>
	<input class="form-control"  type="text" value="{{$car->Color }}" name="Color" id="" 
		required maxlength="20">
	<br>

<label for="">Número de Serie:</label>
	<input class="form-control"  type="int" value="{{$car->serialNumber }}" name="serialNumber" id="" 
		required maxlength="20">
	</div>


<div class="form-group col-md-3">
	<label for="">Matrícula:</label>
		<input class="form-control"  type="text" value="{{$car->Matricule }}" name="Matricule" id="" 
			required maxlength="12">
	<br>

<label for="">Número de Puertas:</label>
	<input class="form-control" type="number" value="{{$car->numDoors }}" name="numDoors" id="">
<br>

<label for="">Número de Asientos:</label>
	<input class="form-control" type="number" value="{{$car->numChair }}" name="numChair" id="" >
		<br>

<label for="">Kilometraje:</label>
	<input class="form-control" type="number" value="{{$car->mileage }}" name="mileage" id="" >
		</div>

<div class="form-group col-md-3">
	<label for="">Número de Cilindros:</label>
		<input class="form-control" type="number" value="{{$car->numberCylenders }}" name="numberCylenders" id="" >
	<br>

<label for="">Descripción:</label>
	<input class="form-control" type="text" value="{{$car->description }}" name="description" id="" 
		required maxlength="50">
		<br>

<label for="">Comentario:</label>
	<input class="form-control" type="text" value="{{$car->comentary }}" name="comentary" id="" 
		required maxlength="50">
		<br>

<label for="">Disponibilidad:</label>
	<input class="form-control" type="number" value="{{$car->vailable }}" name="available" id="" >
		<br>
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

