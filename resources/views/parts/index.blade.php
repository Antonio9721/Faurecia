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
    		<h4 class="card-title">Autopartes Registradas en la Base de Datos</h4>
    		</center>
    	</div>
    	<div class="col-md-4">
    		<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    			<a class="btn btn-primary" href="{{ route('parts.create') }}">+ Nuevo</a>
     			</div>
     		</div>
  		</div>
  </div>
	
		<div class="card-body">
  			<table class="table table-hover">
						<tr>
   						    <th><h5>Autoparte</h5></th>
							<th><h5>Información</h5></th>
							<th><h5>Detalles</h5></th>
							<th><h5>Acciones</h5></th>
						</tr>							
						
					</thead>

					<tbody>
						<?php foreach ($parts as $part):?>
							<tr>
								<td>
									<p> <b>Nombre:</b> <?=$part->Name ?></p>
									<p> <b>Marca: </b> <?=$part->Mark ?></p>
								</td>

								<td>
									<p> <b>Modelo: </b> <?=$part->Model ?></p>
									<p> <b>Descripción: </b> <?=$part->Description ?></p>
									<p> <b>Price: </b> <?=$part->Price ?> </p>
								</td>

								<td>
									<p> <b>Comentario: </b> <?=$part->Comentary ?></p>
									<p> <b>Disponible: </b> <?=$part->Available ?></p>
									</td>

									<td>
										<form action="{{ route('parts.destroy', $part->id) }}" method="post">
      									<a type="submit" class="btn btn-info" href="{{ route('parts.show', $part->id) }}">Ver</a>
      									<a type="submit" class="btn btn-success" href="{{ route('parts.edit', $part->id) }}">Editar</a>
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