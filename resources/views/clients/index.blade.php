<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">



<!DOCTYPE html>
<html>
<head>
	<title>Registro de Clientes</title>
</head>
<body>
	<div>
		<div align="center">
		<h4>Industria Automotriz Faurecia</h4>
		<h5>Clientes Registrados</h5>
		</div>

		<div class="row">
	<div class="col-sn-2"><a class="btn btn-primary" href="{{ route('clients.create') }}">Registrar Cliente</a></div>

		<div class="card-body">
			 <tr class="table-secondary">
				<table class="table " id="example1" width="100%" cellspacing="0">
					<thead class="table-dark">
						<tr>
							<td>Id</td>
							<td>Nombre</td>
							<td>Apellidos</td>
							<td>Dirección</td>
							<td>Empleo</td>
							<td>Salario</td>
							<td>Banco</td>
							<td>Número de Cuenta</td>
							<td>Teléfono</td>
							<td>Correo Electrónico</td>
					
							<td>Editar</td>
							<td>Eliminar</td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($clients as $client):?>
							<tr>
								<td><?=$client->id ?></td>
								<td><?=$client->Firstname ?></td>
								<td><?=$client->Secondname ?></td>
								<td><?=$client->Address ?></td>
								<td><?=$client->Job ?></td>
								<td><?=$client->Salary ?></td>
								<td><?=$client->Bank ?></td>
								<td><?=$client->Numcount ?></td>
								<td><?=$client->Phone ?></td>
								<td><?=$client->Email ?></td>
								
								
			
								<td> 
								<a href="{{ route('clients.show', $client->id) }}"><button class="form-control btn btn-success" onclick="return Edition()">Consultar</button></a>
								</td>
								<td>
								<a href="{{ route('clients.edit', $client->id) }}"><button class="form-control btn btn-danger" onclick="return Delete()">Editar</button></a>
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