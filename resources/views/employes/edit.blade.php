@extends('layout.footer')
@extends('layouts.plantilla')
@section('content')


<div class="col-12">
	<body>
		<form action="{{ route('employes.store') }}" method="post">
			@csrf
		<div align="center">
			<h4>Industria Automotriz Faurecia</h4>
			<h5>Actualizar datos del empleado <b>{{ $employe->Firstname }} {{ $employe->Secondname }}</b></h5>
		</div>

<br>
<div class="form-group row">
	<div class="col-2"></div>
	<div class="form-group col-md-3">
	<label for="">Nombre:</label>
	<input class="form-control" type="text" name="Firstname" value="{{ $employe->Firstname }}" required="">
<br>
		
<label for="">Apellidos:</label>
	<input class="form-control" type="text" name="Secondname" value="{{ $employe->Secondname }}" required="">
<br>
		
<label for="">Área de Trabajo:</label>
	<input class="form-control" type="text" name="Area" value="{{ $employe->Area }}" required="">
</div>

<div class="form-group col-md-3">
	<label for="">Salario Quincenal:</label>
	<input class="form-control" type="text" name="Salary" value="{{ $employe->Salary }}" required="">
<br>

<label for="">Clave de Identificación:</label>
	<input class="form-control" type="text" name="Keycode" value="{{ $employe->Keycode }}" required="">
<br>
		
<label for="">Correo Elcetrónico:</label>
	<input class="form-control" type="text" name="Email" value="{{ $employe->Email }}" required="">
</div>
		
<div class="form-group col-md-3">		
	<label for="">Número Teléfonico:</label>
	<input class="form-control" type="int" name="Phone" value="{{ $employe->Phone }}" required="">
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