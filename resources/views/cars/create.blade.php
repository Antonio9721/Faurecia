@extends('layout.footer')
@extends('layouts.plantilla')
@section('content')

<div class="col-12">
	<body>
	<form action="{{ route('cars.store') }}" method="post">
	@csrf
	<div align="center">
		<h4>Industria Automotriz Faurecia</h4>
		<h5>Registrar Automóvil</h5>
	</div>

<br>
<div class="form-group row">
	<div class="col-2"></div>
	<div class="form-group col-md-3">
	<label for="">Marca:</label>
	<input class="form-control" type="text" name="brand" id="" placeholder="Marca" required="">
<br>

		
<label for="">Modelo:</label>
	<input class="form-control" type="text" name="model" id="" placeholder="Modelo" required="">
<br>

		
<label for="">Color del Auto:</label>
	<input class="form-control" type="text" name="color" id="" placeholder="Color" required="">
<br>
	
<label for="">Número de Serie:</label>
	<input class="form-control" type="int" name="serialNumber" id="" placeholder="Número de Serie" required="">
<br>

<label for="">Matrícula:</label>
	<input class="form-control" type="text" name="matricule" id="" placeholder="Matrícula" required="">
</div>

<div class="form-group col-md-3">		
	<label for="">Número de Puertas:</label>
	<input class="form-control" type="number" name="numberDoors" id="" placeholder="Número de Puertas" required="">
<br>
		
<label for="">Número de Asientos:</label>
	<input class="form-control" type="number" name="numberChair" id="" placeholder="Número de Asientos" required="">
<br>
		
<label for="">Kilometraje:</label>
	<input class="form-control" type="number" name="mileage" id="" placeholder="Kilometraje" required="">
<br>

<label for="">Número de Cilindros:</label>
	<input class="form-control" type="number" name="numberCylenders" id="" placeholder="Cilindros" required="">
<br>

<label for="">Disponibilidad:</label>
	<input class="form-control" type="number" name="available" id="" placeholder="Disponibilidad" required="">
</div>

<div class="form-group col-md-3">	
	<label for="">Descripción:</label>
	<textarea class="form-control" name="description" id="" cols="30" rows="5" required=""></textarea>
<br>

		
<label for="">Comentario:</label>
	<textarea class="form-control" name="comentary" id="" cols="30" rows="5" required=""></textarea>
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