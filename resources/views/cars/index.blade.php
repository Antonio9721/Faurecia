@extends('layout.layout')
@extends('layout.nav')
@section('content')

<div class="container">
	<center><h4>Proveedor Mundial de Automóviles</h4></center>
	<center><h5>"Faurecia México"</h5></center>
<div class="card">
  <div class="card-header bg-success">
  	<div class="row">
  		<div class="col-md-8">
  			<center>
    		<h4 class="card-title">Vehículos Registrados en la Base de Datos</h4>
    		</center>
    	</div>
    	<div class="col-md-4">
    		<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    			<a class="btn btn-primary" href="{{ route('cars.create') }}">+Nuevo</a>
     			</div>
     		</div>
  		</div>
  </div>

  <div class="card-body">
  	<table class="table table-hover">
  		<thead>
  			<tr>
  				<th><h5>Vehículo</h5></th>
  				<th><h5>Información</h5></th>
  				<th><h5>Descripción</h5></th>
  				<th><h5>Detalles</h5></th>
  				<th><h5>Acciones</h5></th>
  			</tr>

  		</thead>

  		<tbody>
  			<?php foreach ($cars as $car):?>
							<tr>
								<td>
									<p> <b> Marca:</b> <?=$car->brand ?> </p>
									<p> <b> Modelo:</b> <?=$car->model ?> </p> 
								</td>

								<td>
									<p> <b> Número de serie:</b> <?=$car->serialNumber ?> </p>
									<p> <b> Puertas:</b> <?=$car->numberDoors ?> </p>
									<p> <b> Asientos:</b> <?=$car->numberChair ?> </p>
									<p> <b> Matrícula:</b> <?=$car->matricule ?> </p>
							</td>

							<td>
								<p> <b> Descripción:</b> <?=$car->description ?> </p>
								<p> <b> Comentario:</b> <?=$car->comentary ?> </p>
							</td>
								<td>
								<p> <b>Kilometraje:</b> <?=$car->mileage ?></p>
								<p> <b>Cilindros:</b> <?=$car->numberCylenders ?></p>
								<p> <b>Color:</b> <?=$car->color ?> </p>
								<p> <b>Disponible:</b> <?=$car->available ?></p>
							</td>


							<td> 
								<form action="{{ route('cars.destroy', $car->id) }}" method="post">
      									<a type="submit" class="btn btn-info" href="{{ route('cars.show', $car->id) }}">Ver</a>
      									<a type="submit" class="btn btn-success" href="{{ route('cars.edit', $car->id) }}">Editar</a>
       									@csrf
      									@method('DELETE')
      									<button type="submit" class="btn btn-danger">Eliminar</button>
    								</form> 
								</div>
							</td>
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
@endsection