@extends('layout.footer')
@extends('layouts.plantilla')

@section('content')

<div class="col-12">
	<body>
<form action="{{ route('accesories.update', $accesory->id) }}" method="post">

	@csrf
	@method('PUT')
	
	<div align="center">
		<h4>Actualizar datos del accesorio <b>{{ $accesory->Name }} {{ $accesory->Model }}</b></h5>
	</div>

<br>
<div class="form-group row">
	<div class="col-2"></div>
	<div class="form-group col-md-3">
	<label for="">Nombre:</label>
	<input class="form-control" type="text" name="Name" value="{{ $accesory->Name }}" required="">
<br>

		
<label for="">Modelo:</label>
	<input class="form-control" type="text" name="Model" value="{{ $accesory->Model }}" required="">
<br>

	
<label for="">Número de Serie:</label>
	<input class="form-control" type="int" name="Numserie" value="{{ $accesory->Numserie }}" required="">
<br>
	
<label for="">Precio:</label>
	<input class="form-control" type="text" name="Price" value="{{ $accesory->Price }}" required="">
</div>

<div class="form-group col-md-3">
	<label for="">Estado:</label>
	<input class="form-control" type="text" name="State" value="{{ $accesory->State }}" required="">
<br>


<label for="">Disponible:</label>
	<input class="form-control" type="number" name="Available" value="{{ $accesory->Available }}" required="">
<br>

<label for="">Fecha de Adquisición:</label>
	<input class="form-control" type="date" name="Date" value="{{ $accesory->Date }}" required="">
<br>

<label for="">Hora de Adquisición:</label>
	<input class="form-control" type="time" name="Time" value="{{ $accesory->Time }}" required="">
</div>

<div class="form-group col-md-3">	
	<label for="">Comentario:</label>
	<textarea class="form-control" name="Comentary" id="" cols="30" rows="10">{{ $accesory->Comentary }}</textarea>
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
