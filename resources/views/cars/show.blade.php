@extends('layouts.plantilla')

@section('content')

<div class="container">
<br><br>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-8">
                    <div class="card-title">
                        <h2>Vehículo: {{ $car->brand }} {{ $car->model }}</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a class="btn btn-primary" href="{{ route('cars.index') }}">< Regresar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body">
            <table class="table table-striped">

                <thead>
                    <tr>
                        <th>Vehículo</th>
                        <th>Información</th>
                        <th>Detalles</th>
                        <th>Descripción</th>
                        <th>Comentario</th>
                    </tr>
                    
                </thead>

                <tbody>
                    <tr>
                        <td>
                            <p>Imagen</p>
                        <td>
                            <p><b>Número de serie: </b>{{ $car->serialNumber }}</p>
                            <p><b>Color: </b>{{ $car->color }}</p>
                            <p><b>Puertas: </b>{{ $car->numberDoors }}</p>
                            <p><b>Asientos: </b>{{ $car->numberChair }}</p>
                            <p class="text-uppercase"><b class="text-capitalize">Matrícula: </b>{{ $car->matricule }}</p>
                        </td>
                        <td>
                          <p><b>Kilometraje: </b>{{ $car->mileage }}</p>
                          <p><b>Cilindros: </b>{{ $car->numberCylenders }}</p>
                          <p><b>Disponibilidad1: </b>{{ $car->available }}</p>
                        </td>
                        <td><p>{{ $car->description }}</p></td>
                        <td><p>{{ $car->comentary }}</p></td>
                    </tr>
                
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <div class="col">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-primary" href="{{ route('cars.edit', $car->id) }}">Editar</a>
                    <form action="{{ route('cars.destroy', $car->id) }}" method="post">
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