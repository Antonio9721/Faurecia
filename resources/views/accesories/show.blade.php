@extends('layouts.plantilla')

@section('content')

<div class="container">
<br><br>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-8">
                    <div class="card-title">
                        <h2>Vehículo: {{ $accesory->Name }} {{ $accesory->Model }}</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-primary" href="{{ route('accesories.index') }}">< Regresar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body">
            <table class="table table-striped">

                <thead>
                    <tr>
                        <th>Accesorio</th>
                        <th>Información</th>
                        <th>Detalles</th>
                        <th>Comentario</th>
                    </tr>
                    
                </thead>

                <tbody>
                    <tr>
                        <td>
                            <p>Imagen</p>
                        <td>
                            <p><b>No.Serie: </b>{{ $accesory->Numserie }}</p>
                            <p><b>Precio: </b>{{ $accesory->Price }}</p>
                            <p><b>Estado: </b>{{ $accesory->State }}</p>
                            <p class="text-uppercase"><b class="text-capitalize">Disponibilidad: </b>{{ $accesory->Available }}</p>
                        </td>
                        <td>
                          <p><b>Fecha: </b>{{ $accesory->Date }}</p>
                          <p><b>Hora: </b>{{ $accesory->Time }}</p>
                        </td>
                        <td><p>{{ $accesory->Comentary }}</p></td>
                    </tr>
                
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <div class="col">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-primary" href="{{ route('accesories.edit', $accesory->id) }}">Editar</a>
                    <form action="{{ route('accesories.destroy', $accesory->id) }}" method="post">
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