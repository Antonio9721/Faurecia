@extends('layouts.plantilla')

@section('title', 'Cards.Cars')

@section('content')

	<div class="row">
		@forelse($cars as $car)
			<!-- renderizar datos -->

			<div class="card col-xs-6 col-sm-6 col-md-5 col-lg-3 mr-3 ml-3">
				<div class="card-header">
					<h2 class="text-primary">{{ $car->brand }} {{ $car->model }}</h2>
				</div>
				<div class="card-body">
					<p class="card-text"> {{ $car->description }}</p>

					<div class="">
						<p class="text-muted">Color: {{ $car->color }}</p>
					</div>

					<div class="">
						<p class="text-muted">Asientos: {{ $car->numberChair }}</p>
					</div>

					<div class="">
						<img style="width: 200px; height: 100; object-fit: cover" src="/imagenes/cars/{{ $car->image }}" alt="{{ $car->brand }} {{ $car->model}}" />
					</div>
				</div>
					<div class="card-footer bg-light d-grid gap-2 d-md-flex justify-content-md-end">
						<a class="btn btn-outline-info padding-left mr-2" href="#"><i class="fas fa-info"></i>Ver más</a>
					</div>
			</div>
		@empty
			<!-- Mensaje por si no encuentra datos -->
			<h3>No hay registros en la base de datos</h3>
		@endforelse
	</div>

@endsection