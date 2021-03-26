@extends('layout.footer')
@extends('layouts.plantilla')
@section('content')


<div class="container">
	<center><h4>"Faurecia México"</h4></center>
<div class="card">
  <div class="card-header bg-primary">
  	<div class="row">
  		<div class="col-md-8">
  			<center>
    		<h4 class="card-title">Autopartes Registradas en la Base de Datos</h4>
    		</center>
    	</div>
    	<div class="col-md-4">
    		<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    			<span onclick="exportToCsv(event.target)" data-href="/exportToCsv" id="export" class="btn btn-secondary">Exportar a CSV</span>
    			<a class="btn btn-success" href="{{ route('parts.create') }}"><b>+ Nuevo</b></a>
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
      									<a type="submit" class="btn btn-danger" href="{{ route('parts.show', $part->id) }}">Consultar</a>
      									<!-- <a type="submit" class="btn btn-success" href="{{ route('parts.edit', $part->id) }}">Editar</a>
       									@csrf
      									@method('DELETE')
      									<button type="submit" class="btn btn-danger">Eliminar</button> -->
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
<br>

<script>
	function exportToCsv(_this){
		let _url = $(_this) data('href');
		window.location.href = _url;
	}
</script>
@endsection