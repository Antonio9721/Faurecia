@extends('layout.layout')
@extends('layout.nav')
@section('content')

<center>
   <div class="col-sn-10"><h4>Industria Automotriz Faurecia</h4></div>
  <div class="col-sn-10"><h5>Información del Accesorio</h5></div>
  </center>


  <div class="d-grid gap-2 d-md-flex justify-content-md-start">
    <a class="btn btn-primary" href="{{ route('accesories.index') }}">Volver al Registro</a></div>
</div>


<br>

<div class="card text-center">
  <div class="card-header bg-info">
     <h5>{{ $accesory->Name }} {{ $accesory->Model }}</h5>
  </div>

  <div class="card-body bg-light">
    <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Descripción</h5>
        <p class="card-text"><b>Precio:</b> {{ $accesory->Price}} <b>Estado: </b>{{ $accesory->State}}</p>
        <p class="card-text"><b>Número de Serie:</b> {{ $accesory->Numserie}}</p>
         <form action="{{ route('accesories.destroy', $accesory->id) }}" method="post">
         <a type="submit" class="btn btn-success" href="{{ route('accesories.edit', $accesory->id) }}">Editar Registro</a>
       @csrf
      @method('UPDATE')
    </form> 
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Detalles</h5>
        <p class="card-text"><b>Fecha de Adquisición:</b> {{ $accesory->Date}} <b>Hora de Adquisición:</b> {{ $accesory->Time}}</p>
          <p class="card-text"><b>Disponible:</b> {{ $accesory->Available}} <b>Comentario: </b>{{$accesory->Comentary}}
        <form action="{{ route('accesories.destroy', $accesory->id) }}" method="post">
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

@endsection
