@extends('layouts.plantilla')

@section('content')


<div class="contaier">
	<h3>Formulario para crear un nuevo registro</h3>

	<form action="{{ route('accesories.store') }}" method="post" enctype="multipart/form-data">
		@csrf

	<div class="row mb-3">
		<div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">
			<label for="">Imagen:</label>
			<input type="file" name="image" id="" accept="image/*" required="">
		</div>
	</div>
	<br>

	<div class="row mb-3">
		<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
			<label for="">Nombre:</label>
			<input class="form-control" type="text" name="Name" id="" placeholder="Nombre" required="">
		</div>

		<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
			<label for="">Modelo:</label>
			<input class="form-control" type="text" name="Model" id="" placeholder="Modelo" required="">
		</div>

		<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
			<label for="">Número de Serie:</label>
			<input class="form-control" type="int" name="Numserie" id="" placeholder="Número de Serie" required="">
		</div>
	</div>
<br>
	
		<div class="row mb-3">
			<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
				<label for="">Precio:</label>
				<input class="form-control" type="text" name="Price" id="" placeholder="Precio" required="">
		</div>

		<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
			<label for="">Estado:</label>
			<input class="form-control" type="text" name="State" id="" placeholder="Estado" required="">
		</div>

		<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
			<label for="">Disponible:</label>
		<input class="form-control" type="number" name="Available" id="" placeholder="Disponible" required="">
	</div>
</div>
<br>

	<div class="row mb-3">
		<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
			<label for="">Fecha de Adquisición:</label>
			<input class="form-control" type="date" name="Date" id="" placeholder="Fecha de Adquisición" required="">
		</div>

		<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
			<label for="">Hora de Adquisición:</label>
			<input class="form-control" type="time" name="Time" id="" placeholder="Hora de Adquisición" required="">
		</div>
	</div>
<br>
		<div>	
			<label for="">Comentario:</label>
			<textarea class="form-control" name="Comentary" id="" cols="30" rows="10"></textarea>
	</div>
<br>


	<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    	<input class="btn btn-info" type="reset" value="Restablecer">
    	<input class="btn btn-primary" type="submit" value="Guardar">
    </div>
</form>
</div>

@endsection
