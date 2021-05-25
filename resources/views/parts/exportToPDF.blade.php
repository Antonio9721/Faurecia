@extends('layout.layout')

@section('content')

<div>
<h1>Listado de Autopartes</h1>
</div>


<table class="table">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nombre</th>
			<th>Marca</th>
			<th>Modelo</th>
			<th>Precio</th>
			<th>Descripción</th>
			<th>Comentario</th>
			<th>Disponibilidad</th>
		</tr>
	</thead>

	@foreach ($parts as $part)
	<tbody>
		<tr>
		<td>{{$part->id}}</td>
		<td>{{$part->Name}}</td>
		<td>{{$part->Mark}}</td>
		<td>{{$part->Model}}</td>
		<td>{{$part->Price}}</td>
		<td>{{$part->Description}}</td>
		<td>{{$part->Comentary}}</td>
		<td>{{$part->Available}}</td>
		
	</tr>
	</tbody>
	@endforeach
</table>


@endsection
