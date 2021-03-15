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
    		<h4 class="card-title"><center>Clientes Registrados en la Base de Datos</center></h4>
    	</div>
    	<div class="col-md-4">
    		<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    			<a class="btn btn-primary" href="{{ route('clients.create') }}">+ Nuevo</a>
     			</div>
     		</div>
  		</div>
  </div>
	
		<div class="card-body">
  			<table class="table table-hover">
						<tr>
							<th><h5>Nombre</h5></th>
							<th><h5>Información</h5></th>
							<th><h5>Detalles</h5></th>
							<th><h5>Acciones</h5></th>
						</tr>
					</thead>

					<tbody>
						<?php foreach ($clients as $client):?>
							<tr>
								<td>
									<p> <b>Nombre:</b> <?=$client->Firstname ?></tp>
									<p> <b>Apellidos:</b> <?=$client->Secondname ?></p>
								</td>

								<td>
									<p> <b>Empleo: </b> <?=$client->Job ?></p>
									<p> <b>Salario: </b> <?=$client->Salary ?></p>
									<p> <b>Banco:</b> <?=$client->Bank ?></p>
									<p> <b>Número de Cuenta:</b> <?=$client->Numcount ?></p>
								</td>

								<td>
									<p> <b>Domicilio: </b> <?=$client->Address ?></p>
									<p> <b>Teléfono:</b> <?=$client->Phone ?></p>
									<p> <b>Correo:</b> <?=$client->Email ?></p>
								</td>

								<td> 
								<form action="{{ route('clients.destroy', $client->id) }}" method="post">
      									<a type="submit" class="btn btn-info" href="{{ route('clients.show', $client->id) }}">Ver</a>
      									<a type="submit" class="btn btn-success" href="{{ route('clients.edit', $client->id) }}">Editar</a>
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