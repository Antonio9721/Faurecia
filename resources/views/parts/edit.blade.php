@extends('layouts.plantilla')

@section('content')


<div class="container">
	<h3>Actualizar datos de la autoparte <b>{{ $part->Name }} {{ $part->Model }}</b></h3>
		<form action="{{ route('parts.update', $part->id) }}" method="post">

	@csrf
	@method('PUT')

	<input type="hidden" name="id">

	<div class="row">
		<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
			<label for="">Nombre:</label>
			<input class="form-control" type="text" name="Name" value="{{ 
			$part->Name }}" required="">
		</div>

	<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
		<label for="">Marca:</label>
		<input class="form-control" type="text" name="Mark" value="{{ 
		$part->Mark }}" required="">
	</div>
	
	<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
		<label for="">Modelo:</label>
		<input class="form-control" type="text" name="Model" value="{{ 
		$part->Model }}">
	</div>
</div>
<br>

	<div class="row">
		<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
			<label for="">Precio:</label>
			<input class="form-control" type="text" name="Price" value="{{ 
			$part->Price }}" required="">
		</div>

	<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
		<label for="">Disponible:</label>
		<input class="form-control" type="number" name="Available" value="{{ $part->Available}}" required="">
	</div>
</div>
<br>

	<div>
		<label for="">Descripción:</label>
		<textarea class="form-control" name="Description" id="" cols="30" 
		rows="5">{{ $part->Description}}</textarea>
	</div>

	<div>
		<label for="">Comentario:</label>
		<textarea class="form-control" name="Comentary" id="" cols="30" rows="5">{{ $part->Comentary}}</textarea>
	</div>

<br>

<div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Guardar">
        </div>

    </form>

</div>


@endsection