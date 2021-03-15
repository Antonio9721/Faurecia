@extends('layout.layout')
@extends('layout.nav')
@section('content')

<center>
   <div class="col-sn-10"><h4>Industria Automotriz Faurecia</h4></div>
  <div class="col-sn-10"><h5>Información del Cliente</h5></div>
  </center>


  <div class="d-grid gap-2 d-md-flex justify-content-md-start">
    <a class="btn btn-primary" href="{{ route('clients.index') }}">Volver al Registro</a></div>
</div>


<br>

<div class="card text-center">
  <div class="card-header bg-info">
     <h5>{{ $client->Firstname }} {{ $client->Secondname }}</h5>
  </div>

  <div class="card-body bg-light">
    <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Datos Laborales</h5>
        <p class="card-text"><b>Profesión:</b> {{ $client->Job}} <b>Salario Quincenal:</b>{{ $client->Salary}}</p>
        <p class="card-text"><b>Compañia Bancaria:</b> {{ $client->Bank}} <b>No.Cuenta:</b> {{$client->Numcount}}</p>
         <form action="{{ route('clients.destroy', $client->id) }}" method="post">
         <a type="submit" class="btn btn-success" href="{{ route('clients.edit', $client->id) }}">Editar Registro</a>
       @csrf
      @method('UPDATE')
    </form> 
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Datos Personales</h5>
        <p class="card-text"><b>Domicilio:</b> {{ $client->Address}} <b>Número Teléfonico:</b> {{ $client->Phone}}</p>
          <p class="card-text"><b>Correo Electrónico:</b> {{ $client->Email}}</p>
        <form action="{{ route('clients.destroy', $client->id) }}" method="post">
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
