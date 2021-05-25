@extends('layouts.plantilla')

@section('content')


<div class="container">
	<h3>Actualizar datos del empleado <b>{{ $employe->Firstname }} {{ $employe->Secondname }}</b></h3>

		<form action="{{ route('employes.update', $employe->id) }}" method="post">

			@csrf
			@method('PUT')

			<input type="hidden" name="id">
		
	<div class="row">
		<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
			<label for="">Nombre:</label>
		<input class="form-control" type="text" name="Firstname" value="{{ 
		$employe->Firstname }}" required="">
	</div>

	<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">		
		<label for="">Apellidos:</label>
		<input class="form-control" type="text" name="Secondname" value="{{ 
		$employe->Secondname }}" required="">
	</div>
		
	<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
		<label for="">Área de Trabajo:</label>
		<input class="form-control" type="text" name="Area" value="{{ $employe->Area }}" required="">
	</div>
</div>
<br>

	<div class="row">
		<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
			<label for="">Salario Quincenal:</label>
			<input class="form-control" type="text" name="Salary" value="{{ $employe->Salary }}" required="">
	</div>

	<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
		<label for="">Clave de Identificación:</label>
		<input class="form-control" type="text" name="Keycode" value="{{ $employe->Keycode }}" required="">
	</div>

	<div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">	
		<label for="">Correo Elcetrónico:</label>
		<input class="form-control" type="text" name="Email" value="{{ $employe->Email }}" required="">
	</div>
</div>
<br>
		
<div>		
	<label for="">Número Teléfonico:</label>
	<input class="form-control" type="int" name="Phone" value="{{ $employe->Phone }}" required="">
</div>
<br>


<div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="btn btn-info" type="reset" value="Restablecer">
            <input class="btn btn-primary" type="submit" value="Guardar">
        </div>

    </form>

</div>


@endsection