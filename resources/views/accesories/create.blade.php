@extends('layout.footer')
@extends('layouts.plantilla')

@section('content')


<div class="col-12">
	<body>
	<form action="{{ route('accesories.store') }}" method="post">
		@csrf
		<div align="center">
			<h4>Registrar Accesorio</h4>
		</div>

<br>
<div class="form-group row">
	<div class="col-2"></div>
	<div class="form-group col-md-3">
	<label for="">Nombre:</label>
	<input class="form-control" type="text" name="Name" id="" placeholder="Nombre" required="">
<br>

<label for="">Modelo:</label>
	<input class="form-control" type="text" name="Model" id="" placeholder="Modelo" required="">
<br>

	
<label for="">Número de Serie:</label>
	<input class="form-control" type="int" name="Numserie" id="" placeholder="Número de Serie" required="">
<br>
	
<label for="">Precio:</label>
	<input class="form-control" type="text" name="Price" id="" placeholder="Precio" required="">
</div>

<div class="form-group col-md-3">
	<label for="">Estado:</label>
	<input class="form-control" type="text" name="State" id="" placeholder="Estado" required="">
<br>


<label for="">Disponible:</label>
	<input class="form-control" type="number" name="Available" id="" placeholder="Disponible" required="">
<br>

<label for="">Fecha de Adquisición:</label>
	<input class="form-control" type="date" name="Date" id="" placeholder="Fecha de Adquisición" required="">
<br>

<label for="">Hora de Adquisición:</label>
	<input class="form-control" type="time" name="Time" id="" placeholder="Hora de Adquisición" required="">
</div>

<div class="form-group col-md-3">	
	<label for="">Comentario:</label>
	<textarea class="form-control" name="Comentary" id="" cols="30" rows="10"></textarea>
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

<br>
@endsection
