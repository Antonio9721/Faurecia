@extends('layouts.plantilla')

@section('content')

<div class="container">
<br><br>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-8">
                    <div class="card-title">
                        <h2>Autoparte: {{ $part->Name }} {{ $part->Mark }}</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-primary" href="{{ route('parts.index') }}">< Regresar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body">
            <table class="table table-striped">

                <thead>
                    <tr>
                        <th>Autoparte</th>
                        <th>Información</th>
                       
                        <th>Descripción</th>
                        <th>Comentario</th>
                    </tr>
                    
                </thead>

                <tbody>
                    <tr>
                        <td>
                            <p>Imagen</p>
                        <td>
                            <p><b>Modelo: </b>{{ $part->Model }}</p>
                            <p><b>Precio: </b>{{ $part->Price }}</p>
                            <p class="text-uppercase"><b class="text-capitalize">Disponibilidad: </b>{{ $part->Available }}</p>
                        </td>
                        <td>
                          <p><b>: </b>{{ $part->Description }}</p>
                        </td>
                        <td><p>{{ $part->Comentary }}</p></td>
                    </tr>
                
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <div class="col">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-primary" href="{{ route('parts.edit', $part->id) }}">Editar</a>
                    <form action="{{ route('parts.destroy', $part->id) }}" method="post">
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