@extends('layouts.plantilla')

@section('content')

<div class="container">
	<h3>Actualizar datos del accesorio <b>{{ $accesory->Name }} {{ $accesory->Model }}</b></h3>
	
<form action="{{ route('accesories.update', $accesory->id) }}" method="post">

	@csrf
	@method('PUT')
	
	<input type="hidden" name="id">

	<div class="row">
		<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
		<label for="">Nombre:</label>
		<input class="form-control" type="text" name="Name" value="{{ 
		$accesory->Name }}" required="">
	</div>

	<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">	
		<label for="">Modelo:</label>
		<input class="form-control" type="text" name="Model" value="{{ 
		$accesory->Model }}" required="">
	</div>

	<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
		<label for="">Número de Serie:</label>
		<input class="form-control" type="int" name="Numserie" value="{{ 
		$accesory->Numserie }}" required="">
	</div>
</div>
<br>

	<div class="row">
		<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
			<label for="">Precio:</label>
			<input class="form-control" type="text" name="Price" value="{{ 
			$accesory->Price }}" required="">
		</div>

	<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
		<label for="">Estado:</label>
		<input class="form-control" type="text" name="State" value="{{ 
		$accesory->State }}" required="">
	</div>

	<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
		<label for="">Disponible:</label>
		<input class="form-control" type="number" name="Available" value="{{ 
		$accesory->Available }}" required="">
	</div>
</div>
<br>

	<div class="row">
		<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
		<label for="">Fecha de Adquisición:</label>
		<input class="form-control" type="date" name="Date" value="{{ 
		$accesory->Date }}" required="">
	</div>

	<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
		<label for="">Hora de Adquisición:</label>
		<input class="form-control" type="time" name="Time" value="{{ 
		$accesory->Time }}" required="">
	</div>
</div>
<br>

	<div>	
		<label for="">Comentario:</label>
		<textarea class="form-control" name="Comentary" id="" cols="30" 
		rows="10">{{ $accesory->Comentary }}</textarea>
</div>
<br>

<div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Guardar">
        </div>

    </form>

</div>


@endsection
