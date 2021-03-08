<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">


<!DOCTYPE html>
<html>
<head>
	<title>Registro de Accesorios</title>
</head>
<body>
	<div>
		<div align="center">
		<h4>Industria Automotriz Faurecia</h4>
		<h5>Autos Registrados</h5>
		</div>

		<div class="row">
	<div class="col-sn-2"><a class="btn btn-primary" href="{{ route('accesories.create') }}">Registrar Accesorio</a></div>

		<div class="card-body">
			 <tr class="table-secondary">
				<table class="table " id="example1" width="100%" cellspacing="0">
					<thead class="table-dark">
						<tr>
							<td>Id</td>
							<td>Nombre</td>
							<td>Tipo</td>
							<td>Precio</td>
							<td>Estado</td>
							<td>Fecha de Adquisición</td>
							<td>Hora de Adquisición</td>
					
							<td>Editar</td>
							<td>Eliminar</td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($accesories as $accesory):?>
							<tr>
								<td><?=$accesory->id ?></td>
								<td><?=$accesory->Name ?></td>
								<td><?=$accesory->Kind ?></td>
								<td><?=$accesory->Price ?></td>
								<td><?=$accesory->State ?></td>
								<td><?=$accesory->Date ?></td>
								<td><?=$accesory->Time ?></td>
								
			
								<td> 
								<a href="{{ route('accesories.show', $accesory->id) }}"><button class="form-control btn btn-success" onclick="return Edition()">Consultar</button></a>
								</td>
								<td>
								<a href="{{ route('accesories.edit', $accesory->id) }}"><button class="form-control btn btn-danger" onclick="return Delete()">Editar</button></a>
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