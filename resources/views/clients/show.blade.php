@extends('layouts.plantilla')

@section('content')

<div class="container">
<br><br>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-8">
                    <div class="card-title">
                        <h2>Cliente: {{ $client->Firstname }} {{ $client->Secondname }}</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-primary" href="{{ route('clients.index') }}">< Regresar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body">
            <table class="table table-striped">

                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Información</th>
                        <th>Detalles</th>
                    </tr>
                    
                </thead>

                <tbody>
                    <tr>
                        <td>
                            <p>Imagen</p>
                        <td>
                            <p><b>Empleo: </b>{{ $client->Job }}</p>
                            <p><b>Sueldo: </b>{{ $client->Salary }}</p>
                            <p><b>Banco: </b>{{ $client->Bank }}</p>
                            <p class="text-uppercase"><b class="text-capitalize">No.Cuenta: </b>{{ $client->Numcount }}</p>
                        </td>
                        <td>
                          <p><b>Domicilio: </b>{{ $client->Address }}</p>
                          <p><b>Teléfono: </b>{{ $client->Phone }}</p>
                          <p><b>Correo: </b>{{ $client->Email }}</p>
                        </td>
                    </tr>
                
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <div class="col">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-primary" href="{{ route('clients.edit', $client->id) }}">Editar</a>
                    <form action="{{ route('clients.destroy', $client->id) }}" method="post">
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