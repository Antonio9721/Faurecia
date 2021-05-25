@extends('layout.layout')

@section('content')

<div>
<h1>Listado de Empleados</h1>
</div>


<table class="table">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nombre</th>
			<th>Apellidos</th>
			<th>Área</th>
			<th>Salario</th>
			<th>Clave</th>
			<th>Correo</th>
			<th>Teléfono</th>
		</tr>
	</thead>

	@foreach ($employes as $employe)
	<tbody>
		<tr>
		<td>{{$employe->id}}</td>
		<td>{{$employe->Firstname}}</td>
		<td>{{$employe->Secondname}}</td>
		<td>{{$employe->Area}}</td>
		<td>{{$employe->Salary}}</td>
		<td>{{$employe->Keycode}}</td>
		<td>{{$employe->Email}}</td>
		<td>{{$employe->Phone}}</td>
	</tr>
	</tbody>
	@endforeach
</table>


@endsection
