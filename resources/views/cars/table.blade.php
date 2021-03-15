<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

<!-- @forelse ($coches as $car)
<li>
	<h3>{{ $car->brand }} {{ $car->model }}</h3>
	<p>{{ $car->color}}</p>

@empty
	<h2>La tabla no tiene registros</h2>
@endforelse -->

<!DOCTYPE html>
<html>
<head>
	<title>Registro de Automóviles</title>
</head>
<body>
	<div>
		<div align="center">
		<h4>Industria Automotriz Faurecia</h4>
		<h5>Autos Registrados</h5>
		</div>

		<div class="row">
	<div class="col-sn-2"><a class="btn btn-primary" href="{{ route('cars.create') }}">Registrar Auto</a></div>

		<div class="card-body">
			 <tr class="table-secondary">
				<table class="table " id="example1" width="100%" cellspacing="0">
					<thead class="table-dark">
						<tr>
							<td>Id</td>
							<td>Marca</td>
							<td>Modelo</td>
							<td>Número de Serie</td>
							<td>Matricula</td>
							<td>Número Puertas</td>
							<td>Número Asientos</td>
							<td>Kilometraje</td>
							<td>Cilindros</td>
							<td>Descripción</td>
							<td>Comentario</td>
							<td>Disponibilidad</td>
					
							<td>Editar</td>
							<td>Eliminar</td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($coches as $car):?>
							<tr>
								<td><?=$car->id ?></td>
								<td><?=$car->brand ?></td>
								<td><?=$car->model ?></td>
								<td><?=$car->color ?></td>
								<td><?=$car->serialNumber ?></td>
								<td><?=$car->matricule ?></td>
								<td><?=$car->numberDoors ?></td>
								<td><?=$car->numberChair ?></td>
								<td><?=$car->mileage ?></td>
								<td><?=$car->numberCylenders ?></td>
								<td><?=$car->numberChair ?></td>
								<td><?=$car->description ?></td>
								<td><?=$car->comentary ?></td>
								<td><?=$car->available ?></td>
								
			
								<td> 
								<a href="{{ route('cars.show', $car->id) }}"><button class="form-control btn btn-success" onclick="return Edition()">Consultar</button></a>
								</td>
								<td>
								<a href="{{ route('cars.edit', $car->id) }}"><button class="form-control btn btn-danger" onclick="return Delete()">Editar</button></a>
								</td>
								<td>
								
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>

<script type="text/javascript">
	function Edition() {
		if (confirm("¿Desea Editar este Registro?")) {
			return true;
		}else{
			return false;
		}
	}
	function Delete(){
		if (confirm("¿Desea Eliminar este Registro?")) {
			return true;
		}else{
			return false;
		}
	}
</script>
</html>