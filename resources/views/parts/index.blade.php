<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">


<!DOCTYPE html>
<html>
<head>
	<title>Registro de Empleados</title>
</head>
<body>
	<div>
		<div align="center">
		<h4>Industria Automotriz Faurecia</h4>
		<h5>Autopartes Registradas</h5>
		</div>

		<div class="row">
	<div class="col-sn-2"><a class="btn btn-primary" href="{{ route('parts.create') }}">Registrar Autoparte</a></div>

		<div class="card-body">
			 <tr class="table-secondary">
				<table class="table " id="example1" width="100%" cellspacing="0">
					<thead class="table-dark">
						<tr>
							<td>Id</td>
							<td>Nombre</td>
							<td>Marca</td>
							<td>Tipo</td>
							<td>Descripción</td>
							<td>Comentario</td>
							<td>Disponible</td>
							
					
							<td>Editar</td>
							<td>Eliminar</td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($parts as $part):?>
							<tr>
								<td><?=$part->id ?></td>
								<td><?=$part->Name ?></td>
								<td><?=$part->Mark ?></td>
								<td><?=$part->Kind ?></td>
								<td><?=$part->Description ?></td>
								<td><?=$part->Comentary ?></td>
								<td><?=$part->Available ?></td>
								
			
								<td> 
								<a href="{{ route('parts.show', $part->id) }}"><button class="form-control btn btn-success" onclick="return Edition()">Consultar</button></a>
								</td>
								<td>
								<a href="{{ route('parts.edit', $part->id) }}"><button class="form-control btn btn-danger" onclick="return Delete()">Editar</button></a>
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