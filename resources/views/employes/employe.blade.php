<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Empleados</title>
</head>
<body>
<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Apellidos</th>
			<th>Área</th>
			<th>Salario</th>
			<th>Clave</th>
			<th>Correo</th>
			<th>Teléfono</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($employes as $employe)
			<tr>
				<td>{{ $employe->id }}</td>
				<td>{{ $employe->Firstname }}</td>
				<td>{{ $employe->Secondname }}</td>
				<td>{{ $employe->Area }}</td>
				<td>{{ $employe->Salary }}</td>
				<td>{{ $employe->Keycode }}</td>
				<td>{{ $employe->Email }}</td>
				<td>{{ $employe->Phone }}</td>
			</tr>
		@endforeach
	</tbody>
</table>

</body>
</html>