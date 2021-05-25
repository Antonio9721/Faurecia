@extends('layouts.plantilla')
@section('title','Importar datos')

@section('content')

<div class="container">
	<h3 class="mb-5">Carga el archivo xlsx para importar los datos</h3>
	

	<form action="{{ url('employes/importData') }}" enctype="multipart/form-data" method="post">
		@csrf
		<div class="row">
			<div class="col">
				<input type="file" name="excel" id="" class="form-group" accept=".xlsx, .xls">

			</div>
			<div class="col">
				<input type="submit" value="importar" class="btn btn-outline-info">
			</div>
	</form>
</div>

<div class="container">
	<h3 class="mb-5">Carga el archivo de texto para importar los datos</h3>
	
	<form action="{{ url('employes/importText') }}" enctype="multipart/form-data" method="post">
		@csrf
		<div class="row">
			<div class="col">
				<input type="file" name="text" id="" class="form-group" accept=".text">

			</div>
			<div class="col">
				<input type="submit" value="importar" class="btn btn-outline-info">
			</div>
	</form>
</div>

<div class="container">
	<h3 class="mb-5">Carga el archivo de CSV para importar los datos</h3>
	
	<form action="{{ url('employes/importCSV') }}" enctype="multipart/form-data" method="post">
		@csrf
		<div class="row">
			<div class="col">
				<input type="file" name="csv" id="" class="form-group" accept=".csv">

			</div>
			<div class="col">
				<input type="submit" value="importar" class="btn btn-outline-info">
			</div>
	</form>
</div>

@endsection