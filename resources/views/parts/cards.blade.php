@extends('layouts.plantilla')

@section('title', 'Cards.Parts')

@section('content')

	<div class="row">
		@forelse($parts as $part)
			<!-- renderizar datos -->

			<div class="card col-xs-6 col-sm-6 col-md-5 col-lg-3 mr-3 ml-3">
				<div class="card-header">
					<h2 class="text-primary">{{ $part->Name }} {{ $part->Mark }}</h2>
				</div>
				<div class="card-body">
					<p class="card-text"> {{ $part->Description }}</p>

					<div class="">
						<p class="text-muted">Modelo: {{ $part->Model }}</p>
					</div>

					<div class="">
						<p class="text-muted">Precio: {{ $part->Price }}</p>
					</div>

					<div class="">
						<img style="width: 200px; height: 100; object-fit: cover" src="/imagenes/parts/{{ $part->image }}" alt="{{ $part->Name }} {{ $part->Mark}}" />
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