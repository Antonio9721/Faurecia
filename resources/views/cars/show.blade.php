@extends('layout.layout')
@extends('layout.nav')
@section('content')

<center>
   <div class="col-sn-10"><h4>Industria Automotriz Faurecia</h4></div>
  <div class="col-sn-10"><h5>Información del Vehículo</h5></div>
  </center>


  <div class="d-grid gap-2 d-md-flex justify-content-md-start">
    <a class="btn btn-primary" href="{{ route('cars.index') }}">Volver al Registro</a></div>
</div>


<br>

<div class="card text-center">
  <div class="card-header bg-info">
     <h5>{{ $car->brand }} {{ $car->model }}</h5>
  </div>

  <div class="card-body bg-light">
    <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Información del Vehículo</h5>
        <p class="card-text"><b>Número de Serie:</b> {{ $car->serialNumber}} <b>Matrícula: </b>{{ $car->matricule}}</p>
        <p class="card-text"><b>Número de Puertas:</b> {{ $car->numberDoors}} <b>Número de Asientos: </b>{{ $car->numberChair}}</p>
        <p class="card-text"><b>Color:</b> {{ $car->color}}</p>
         <form action="{{ route('cars.destroy', $car->id) }}" method="post">
         <a type="submit" class="btn btn-success" href="{{ route('cars.edit', $car->id) }}">Editar Registro</a>
       @csrf
      @method('UPDATE')
    </form> 
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Detalles del Vehículo</h5>
        <p class="card-text"><b>Descripcíón:</b> {{ $car->description}} <b>Comentario:</b> {{ $car->comentary}}</p>
          <p class="card-text"><b>Kilometraje:</b> {{ $car->mileage}} <b>Número de Cilindros:</b> {{ $car->numberCylenders}}</p>
          <p class="card-text"><b>Disponible:</b> {{ $car->available}} </p>
        <form action="{{ route('cars.destroy', $car->id) }}" method="post">
       @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger">Eliminar Registro</button>
    </form> 
      </div>
    </div>
  </div>
</div>
<br>
  <div class="card-footer text-muted">
    <b>Última Edición: 12 de Marzo de 2021</b>
  </div>
</div>

@endsection
