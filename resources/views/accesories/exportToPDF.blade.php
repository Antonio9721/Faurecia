@extends('layout.layout')
@section('content')

<div>
<h1>Listado de Accesorios</h1>
</div>

<table class="table">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nombre</th>
			<th>Modelo</th>
			<th>No. Serie</th>
			<th>Precio</th>
			<th>Estado</th>
			<th>Comentario</th>
			<th>Disponibilidad</th>
			<th>Fecha de Entrega</th>
			<th>Hora de Entrega</th>
		</tr>
	</thead>

	@foreach ($accesories as $accesory)
	<tbody>
		<tr>
		<td>{{$accesory->id}}</td>
		<td>{{$accesory->Name}}</td>
		<td>{{$accesory->Model}}</td>
		<td>{{$accesory->Numserie}}</td>
		<td>{{$accesory->Price}}</td>
		<td>{{$accesory->State}}</td>
		<td>{{$accesory->Cometary}}</td>
		<td>{{$accesory->Available}}</td>
		<td>{{$accesory->Date}}</td>
		<td>{{$accesory->Time}}</td>
	</tr>
	</tbody>
	@endforeach
</table>


@endsection
