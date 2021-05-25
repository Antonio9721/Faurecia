@extends('layouts.plantilla')

@section('content')


<div class="container">
	<h3>Actualizar datos del vehículo <b>{{ $car->brand }} {{ $car->model }}</b></h3>

	<form action="{{ route('cars.update', $car->id) }}" method="post">

	@csrf
	@method('PUT')
	
	<input type="hidden" name="id">

	<div class="row">
		<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
		<label for="">Marca:</label>
		<input class="form-control" type="text" name="brand" value="{{ $car->brand }}" required="">
	</div>

	<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">	
		<label for="">Modelo:</label>
		<input class="form-control" type="text" name="model" value="{{ $car->model }}" required="">
	</div>

	<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">	
		<label for="">Color del Auto:</label>
		<input class="form-control" type="text" name="color" value="{{ $car->color }}" required="">
	</div>
</div>
<br>

	<div class="row">
		<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">	
			<label for="">Número de Serie:</label>
			<input class="form-control" type="text" name="serialNumber" value="{{
			 $car->serialNumber }}" required="">
	</div>

	<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
		<label for="">Matrícula:</label>
		<input class="form-control" type="text" name="matricule" value="{{ 
		$car->matricule }}">
	</div>

	<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">		
		<label for="">Número de Puertas:</label>
		<input class="form-control" type="number" name="numberDoors" value="{{ $car->numberDoors }}">
	</div>
</div>
<br>

	<div class="row">
		<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">	
			<label for="">Número de Asientos:</label>
			<input class="form-control" name="numberChair" value="{{ 
			$car->numberChair }}" required="">
		</div>
		
		<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
			<label for="">Kilometraje:</label>
			<input class="form-control" type="number" name="mileage" id="" value="{{ 
			$car->mileage }}" required="">
		</div>

		<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
			<label for="">Cilindraje:</label>
			<input class="form-control" type="number" name="numberCylenders" id="" value="{{ 
			$car->numberCylenders }}" required="">
		</div>
	</div>
	<br>

	<div>
		<label for="">Disponibilidad:</label>
		<input class="form-control" type="number" name="available" id="" value="{{ 
		$car->available }}" required="">
	</div>

	<div>	
		<label for="">Descripción:</label>
		<textarea class="form-control" name="description" id="" cols="30" rows="5" 
		required="">{{ $car->description }}</textarea>
	</div>

	<div>	
		<label for="">Comentario:</label>
		<textarea class="form-control" name="comentary" id="" cols="30" rows="5" required="">{{ $car->comentary }}</textarea>
</div>
<br>

<div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Guardar">
        </div>

    </form>

</div>


@endsection