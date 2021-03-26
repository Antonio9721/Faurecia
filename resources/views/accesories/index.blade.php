@extends('layout.footer')
@extends('layouts.plantilla')

@section('content')

<div class="container">
	
<div class="card">
  <div class="card-header bg-primary">
  	<div class="row">
  		<div class="col-md-8">
  			<center>
    		<h4 class="card-title">Accesorios Registrados en la Base de Datos</h4>
    		</center>
    	</div>
    	<div class="col-md-4">
    		<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    			<span onclick="exportToCsv(event.target)" data-href="/exportToCsv" id="export" class="btn btn-secondary">Exportar a CSV</span>
    			<a class="btn btn-success" href="{{ route('accesories.create') }}"><b>+ Nuevo</b></a>
     			</div>
     		</div>
  		</div>
  </div>
	
		<div class="card-body">
  			<table class="table table-hover">
						<tr>
							<th>Accesorio</th>
							<th>Información</th>
							<th>Destalles</th>
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
									<p> <b>Fecha de Adquisición:</b> <?=$accesory->Date ?></p>
									<p> <b>Hora de Adquisición:</b> <?=$accesory->Time ?></p>
								</td>

								<td>
									<p> <b>Estado:</b> <?=$accesory->State ?></p>
									<p> <b>Disponible:</b> <?=$accesory->Available ?></p>
									<p> <b>Comentario:</b> <?=$accesory->Comentary ?></p>

								</td>	

							
								
			
								<td> 
								<form action="{{ route('accesories.destroy', $accesory->id) }}" method="post">
      									<a type="submit" class="btn btn-danger" href="{{ route('accesories.show', $accesory->id) }}">Consultar</a>
      									<!-- <a type="submit" class="btn btn-success" href="{{ route('accesories.edit', $accesory->id) }}">Editar</a>
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
<br>

<script>
	function exportToCsv(_this){
		let _url = $(_this) data('href');
		window.location.href = _url;
	}
</script>

@endsection