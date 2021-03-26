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
    		<h4 class="card-title">Empleados Registrados en la Base de Datos</h4>
    		</center>
    	</div>
    	<div class="col-md-4">
    		<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    			<span onclick="exportToCsv(event.target)" data-href="/exportToCsv" id="export" class="btn btn-secondary">Exportar a CSV</span>
    			<a class="btn btn-success" href="{{ route('employes.create') }}"><b>+ Nuevo</b></a>
     			</div>
     		</div>
  		</div>
  </div>
	
		<div class="card-body">
  			<table class="table table-hover">
						<tr>
							<th><h5>Empleado</h5></th>
							<th><h5>Información</h5></th>
							<th><h5>Detalles</h5></th>
							<th><h5>Consultar</h5></th>
						</tr>
					</thead>


					<tbody>
						<?php foreach ($employes as $employe):?>
							<tr>
								<td>
									<p> <b>Nombre:</b> <?=$employe->Firstname ?></p>
									<p> <b>Apellidos:</b> <?=$employe->Secondname ?></p>
								</td>

								<td>
									<p> <b>Área de Trabajo:</b> <?=$employe->Area ?></p>
									<p> <b>Salario:</b> <?=$employe->Salary ?></p>
									<p> <b>Clave:</b> <?=$employe->Keycode ?></p>
								</td>

								<td>
									<p> <b>Correo:</b> <?=$employe->Email ?></p>
									<p> <b>Teléfono:</b> <?=$employe->Phone ?></p>
								</td>					
			
							<td> 
								<form action="{{ route('employes.destroy', $employe->id) }}" method="post">
      									<a type="submit" class="btn btn-danger" href="{{ route('employes.show', $employe->id) }}">Consultar</a>
      									<!-- <a type="submit" class="btn btn-success" href="{{ route('employes.edit', $employe->id) }}">Editar</a>
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