@extends('layouts.plantilla')

@section('content')

<div class="container">
<br><br>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-8">
                    <div class="card-title">
                        <h2>Empleado: {{ $employe->Firstname }} {{ $employe->Secondname }}</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-primary" href="{{ route('employes.index') }}">< Regresar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body">
            <table class="table table-striped">

                <thead>
                    <tr>
                        <th>Información</th>
                        <th>Detalles</th>
                    </tr>
                    
                </thead>

                <tbody>
                    <tr>
                        <td>
                            <p>Imagen</p>
                        <td>
                            <p><b>Área de Trabajo: </b>{{ $employe->Area }}</p>
                            <p><b>Sueldo: </b>{{ $employe->Salary }}</p>
                            <p class="text-uppercase"><b class="text-capitalize">Matrícula: </b>{{ $employe->Keycode }}</p>
                        </td>
                        <td>
                          <p><b>Teléfono: </b>{{ $employe->Phone }}</p>
                          <p><b>Correo: </b>{{ $employe->Email }}</p>
                        </td>
                    </tr>
                
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <div class="col">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-primary" href="{{ route('employes.edit', $employe->id) }}">Editar</a>
                    <form action="{{ route('employes.destroy', $employe->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-danger" type="submit" value="Eliminar">
                    </form>
                </div>
            </div>
        </div>
      </div>
</div>

@endsection