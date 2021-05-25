@extends('layout.layout')

@section('content')

<div>
<h1>Listado de Vehículos</h1>
</div>


<table class="table">
	<thead>
		<tr>
			<th>Id</th>
			<th>Marca</th>
			<th>Modelo</th>
			<th>Color</th>
			<th>No. Serie</th>
			<th>Matrícula</th>
			<th>No. Puertas</th>
			<th>No. Asientos</th>
			<th>Kilometraje</th>
			<th>No. Cilindros</th>
			<th>Descripción</th>
			<th>Comentario</th>
			<th>Disponibilidad</th>
		</tr>
	</thead>

	@foreach ($cars as $car)
	<tbody>
		<tr>
		<td>{{$car->id}}</td>
		<td>{{$car->brand}}</td>
		<td>{{$car->color}}</td>
		<td>{{$car->serialNumber}}</td>
		<td>{{$car->matricule}}</td>
		<td>{{$car->numberDoors}}</td>
		<td>{{$car->numberChair}}</td>
		<td>{{$car->mileage}}</td>
		<td>{{$car->numberCylenders}}</td>
		<td>{{$car->description}}</td>
		<td>{{$car->comentary}}</td>
		<td>{{$car->available}}</td>
		
	</tr>
	</tbody>
	@endforeach
</table>


@endsection
