@extends('layout.footer')
@extends('layouts.plantilla')
@section('content')


<div class="col-12">
	<body>
	<form action="{{ route('cars.update', $car->id) }}" method="post">

	@csrf
	@method('PUT')
	
	<div align="center">
		<h4>Industria Automotriz Faurecia</h4>
		<h5>Actualizar datos del vehículo <b>{{ $car->brand }} {{ $car->model }}</b></h5>
	</div>

<br>
<div class="form-group row">
	<div class="col-2"></div>
	<div class="form-group col-md-3">
	<label for="">Marca:</label>
	<input class="form-control" type="text" name="brand" value="{{ $car->brand }}" required="">
<br>

		
<label for="">Modelo:</label>
	<input class="form-control" type="text" name="model" value="{{ $car->model }}" required="">
<br>

		
<label for="">Color del Auto:</label>
	<input class="form-control" type="text" name="color" value="{{ $car->color }}" required="">
<br>
	
<label for="">Número de Serie:</label>
	<input class="form-control" type="int" name="serialNumber" value="{{ $car->serialNumber }}" required="">
<br>

<label for="">Matrícula:</label>
	<input class="form-control" type="text" name="matricule" value="{{ $car->matricule }}">
</div>

<div class="form-group col-md-3">		
	<label for="">Número de Puertas:</label>
	<input class="form-control" type="number" name="numberDoors" value="{{ $car->numberDoors }}">
<br>
		
<label for="">Número de Asientos:</label>
	<input class="form-control" name="numberChair" value="{{ $car->numberChair }}" required="">
<br>
		
<label for="">Kilometraje:</label>
	<input class="form-control" type="number" name="mileage" id="" value="{{ $car->mileage }}" required="">
<br>

<label for="">Número de Cilindros:</label>
	<input class="form-control" type="number" name="numberCylenders" id="" value="{{ $car->numberCylenders }}" required="">
<br>

<label for="">Disponibilidad:</label>
	<input class="form-control" type="number" name="available" id="" value="{{ $car->available }}" required="">
</div>

<div class="form-group col-md-3">	
	<label for="">Descripción:</label>
	<textarea class="form-control" name="description" id="" cols="30" rows="5" required="">{{ $car->description }}</textarea>
<br>

		
<label for="">Comentario:</label>
	<textarea class="form-control" name="comentary" id="" cols="30" rows="5" required="">{{ $car->comentary }}</textarea>
</div>


<div class="col-6"></div>
	<div class="form-group col-md-2">
		<input class="form-control btn btn-primary" type="submit" value="Guardar">
			</div>

<div class="form-group col-md-2">
	<input class="form-control btn btn-warning" type="reset" value="Restablecer">
		</div>
	</div>
</form>
</body>
</div>
@endsection