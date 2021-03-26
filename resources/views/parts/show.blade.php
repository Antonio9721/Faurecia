@extends('layout.footer')
@extends('layouts.plantilla')
@section('content')

<center>
  <div class="col-sn-10"><h4>Información de la Autoparte</h4></div>
  </center>


  <div class="d-grid gap-2 d-md-flex justify-content-md-start">
    <a class="btn btn-primary" href="{{ route('parts.index') }}">Volver al Registro</a></div>
</div>


<br>

<div class="card text-center">
  <div class="card-header bg-primary">
     <h5>{{ $part->Name }}</h5>
  </div>

  <div class="card-body bg-light">
    <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Información</h5>
        <p class="card-text"><b>Marca:</b> {{ $part->Mark}} <b>Modelo: </b>{{ $part->Model}}</p>
        <p class="card-text"><b>Precio Unitario:</b> {{ $part->Price}}</p>
         <form action="{{ route('parts.destroy', $part->id) }}" method="post">
         <a type="submit" class="btn btn-success" href="{{ route('parts.edit', $part->id) }}">Editar Registro</a>
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
        <p class="card-text"><b>Descripción:</b> {{ $part->Description}} <b>Disponibilidad:</b> {{ $part->Available}}</p>
          <p class="card-text"><b>Comentario:</b> {{ $part->Comentary}}</p>
        <form action="{{ route('parts.destroy', $part->id) }}" method="post">
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
