@extends('layouts.plantilla')

@section('title', 'Cards.Employes')

@section('content')

	<div class="row">
		@forelse($employes as $employe)
			<!-- renderizar datos -->

			<div class="card col-xs-6 col-sm-6 col-md-5 col-lg-3 mr-3 ml-3">
				<div class="card-header">
					<h2 class="text-primary">{{ $employe->Firstname }} {{ $employe->Secondname }}</h2>
				</div>
				<div class="card-body">
					<p class="card-text"> {{ $employe->Area }}</p>

					<div class="">
						<p class="text-muted">Salario: {{ $employe->Salary }}</p>
					</div>

					<div class="">
						<p class="text-muted">Matrícula: {{ $employe->Keycode }}</p>
					</div>
				</div>

					<div class="">
						<img style="width: 200px; height: 100; object-fit: cover" src="/imagenes/employes/{{ $employe->image }}" alt="{{ $employe->Firstname }} {{ $employe->Secondname}}" />
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