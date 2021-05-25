@extends('layouts.plantilla')

@section('content')

<div>
<h1>Listado de Clientes</h1>
</div>


<table class="table">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nombre</th>
			<th>Apellidos</th>
			<th>Domicilio</th>
			<th>Empleo</th>
			<th>Salario</th>
			<th>Banco</th>
			<th>No. Cuenta</th>
			<th>Teléfono</th>
			<th>Correo Electrónico</th>
		</tr>
	</thead>

	@foreach ($clients as $client)
	<tbody>
		<tr>
		<td>{{$client->id}}</td>
		<td>{{$client->Firstname}}</td>
		<td>{{$client->Secondname}}</td>
		<td>{{$client->Address}}</td>
		<td>{{$client->Job}}</td>
		<td>{{$client->Salary}}</td>
		<td>{{$client->Bank}}</td>
		<td>{{$client->Numcount}}</td>
		<td>{{$client->Phone}}</td>
		<td>{{$client->Email}}</td>
	</tr>
	</tbody>
	@endforeach
</table>


@endsection
