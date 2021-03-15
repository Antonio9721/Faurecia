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
    		<h4 class="card-title">Accesorios Registrados en la Base de Datos</h4>
    		</center>
    	</div>
    	<div class="col-md-4">
    		<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    			<a class="btn btn-primary" href="{{ route('accesories.create') }}">+ Nuevo</a>
     			</div>
     		</div>
  		</div>
  </div>
	
		<div class="card-body">
  			<table class="table table-hover">
						<tr>
							<th>Nombre</th>
							<th>Información</th>
							<th>Detalles</th>
							<th>Acciones</th>
							
						</tr>
					</thead>

					<tbody>
						<?php foreach ($accesories as $accesory):?>
							<tr>
								<td>
									<p> <b>Nombre:</b> <?=$accesory->Name ?></p>
									<p> <b>Modelo:</b> <?=$accesory->Model ?></p>
									<p> <b>Número de Serie:</b> <?=$accesory->Numserie ?></p>
								</td>

								<td>
									<p> <b>Precio:</b> <?=$accesory->Price ?></p>
									<p> <b>Estado:</b> <?=$accesory->State ?></p>
									<p> <b>Comentario:</b> <?=$accesory->Comentary ?></p>
								</td>

								<td>
									<p> <b>Disponible:</b> <?=$accesory->Available ?></p>
									<p> <b>Fecha:</b> <?=$accesory->Date ?></p>
									<p> <b>Hora:</b> <?=$accesory->Time ?></p>
									
								</td>
								
			
								<td> 
								<form action="{{ route('accesories.destroy', $accesory->id) }}" method="post">
      									<a type="submit" class="btn btn-info" href="{{ route('accesories.show', $accesory->id) }}">Ver</a>
      									<a type="submit" class="btn btn-success" href="{{ route('accesories.edit', $accesory->id) }}">Editar</a>
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