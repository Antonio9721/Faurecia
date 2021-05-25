@extends('layouts.plantilla')

@section('title', 'Cards.Clients')

@section('content')

	<div class="row">
		@forelse($clients as $client)
			<!-- renderizar datos -->

			<div class="card col-xs-6 col-sm-6 col-md-5 col-lg-3 mr-3 ml-3">
				<div class="card-header">
					<h2 class="text-primary">{{ $client->Firstname }} {{ $client->Secondname }}</h2>
				</div>
				<div class="card-body">
					<p class="card-text"> {{ $client->Address }}</p>

					<div class="">
						<p class="text-muted">Oficio: {{ $client->Job }}</p>
					</div>

					<div class="">
						<p class="text-muted">Salario: {{ $client->Salary }}</p>
					</div>

					<div class="">
						<img style="width: 200px; height: 100; object-fit: cover" src="/imagenes/clients/{{ $client->image }}" alt="{{ $client->Firstname }} {{ $client->Secondname}}" />
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