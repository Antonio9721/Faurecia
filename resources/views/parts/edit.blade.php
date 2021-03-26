@extends('layout.footer')
@extends('layouts.plantilla')
@section('content')


<div class="col-12">
	<body>
		<form action="{{ route('parts.update', $part->id) }}" method="post">
	@csrf
	@method('PUT')
	<div align="center">
	<h4>Industria Automotriz Faurecia</h4>
	<h5>Actualizar datos de la autoparte <b>{{ $part->Name }} {{ $part->Model }}</b></h5>
</div>

<br>
<div class="form-group row">
	<div class="col-2"></div>
	<div class="form-group col-md-3">
	<label for="">Nombre:</label>
	<input class="form-control" type="text" name="Name" value="{{ $part->Name }}" required="">
<br>

		
<label for="">Marca:</label>
	<input class="form-control" type="text" name="Mark" value="{{ $part->Mark }}" required="">
<br>
	
<label for="">Modelo:</label>
	<input class="form-control" type="text" name="Model" value="{{ $part->Model }}">
</div>

<div class="form-group col-md-3">
	<label for="">Precio:</label>
	<input class="form-control" type="text" name="Price" value="{{ $part->Price }}" required="">
<br>

<label for="">Descripción:</label>
	<textarea class="form-control" name="Description" id="" cols="30" rows="5">{{ $part->Description}}</textarea>
</div>

<div class="form-group col-md-3">
	<label for="">Comentario:</label>
	<textarea class="form-control" name="Comentary" id="" cols="30" rows="5">{{ $part->Comentary}}</textarea>
<br>

<label for="">Disponible:</label>
	<input class="form-control" type="number" name="Available" value="{{ $part->Available}}" required="">
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
@endsection