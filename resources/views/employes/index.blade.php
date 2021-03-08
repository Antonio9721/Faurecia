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
		<h5>Empleados Registrados</h5>
		</div>

		<div class="row">
	<div class="col-sn-2"><a class="btn btn-primary" href="{{ route('employes.create') }}">Registrar Empleado</a></div>

		<div class="card-body">
			 <tr class="table-secondary">
				<table class="table " id="example1" width="100%" cellspacing="0">
					<thead class="table-dark">
						<tr>
							<td>Id</td>
							<td>Nombre</td>
							<td>Apellidos</td>
							<td>Área de Trabajo</td>
							<td>Salario</td>
							<td>Clave deidentificación</td>
							<td>Correo Electrónico</td>
							<td>Número Teléfonico</td>
					
							<td>Editar</td>
							<td>Eliminar</td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($employes as $employe):?>
							<tr>
								<td><?=$employe->id ?></td>
								<td><?=$employe->Firstname ?></td>
								<td><?=$employe->Secondname ?></td>
								<td><?=$employe->Area ?></td>
								<td><?=$employe->Salary ?></td>
								<td><?=$employe->Keycode ?></td>
								<td><?=$employe->Email ?></td>
								<td><?=$employe->Phone ?></td>
								
			
								<td> 
								<a href="{{ route('employes.show', $employe->id) }}"><button class="form-control btn btn-success" onclick="return Edition()">Consultar</button></a>
								</td>
								<td>
								<a href="{{ route('employes.edit', $employe->id) }}"><button class="form-control btn btn-danger" onclick="return Delete()">Editar</button></a>
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