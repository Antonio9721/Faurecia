@extends('layout.footer')
@extends('layouts.plantilla')
@section('content')

<center>
  <div class="col-sn-10"><h4>Información del Empleado</h4></div>
  </center>


  <div class="d-grid gap-2 d-md-flex justify-content-md-start">
    <a class="btn btn-primary" href="{{ route('employes.index') }}">Volver al Registro</a></div>
</div>


<br>

<div class="card text-center">
  <div class="card-header bg-primary">
     <h5><b>Datos del Empleado</b></h5>
  </div>

  <div class="card-body bg-light">
    <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Datos Personales</h5>
        <p class="card-text"><b>Nombre:</b> {{ $employe->Firstname}} {{ $employe->Secondname}}</p>
        <p class="card-text"><b>Correo Electrónico:</b> {{ $employe->Email}} <b>Número Teléfonico:</b> {{ $employe->Phone}}</p>
         <form action="{{ route('employes.destroy', $employe->id) }}" method="post">
         <a type="submit" class="btn btn-success" href="{{ route('employes.edit', $employe->id) }}">Editar Registro</a>
       @csrf
      @method('UPDATE')
    </form> 
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Datos Laborales</h5>
        <p class="card-text"><b>Área de Trabajo:</b> {{ $employe->Area}}</p>
          <p class="card-text"><b>Salario:</b> {{ $employe->Salary}} <b>Clave:</b> {{ $employe->Keycode}}</p>
        <form action="{{ route('employes.destroy', $employe->id) }}" method="post">
       @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger">Eliminar Registro</button>
    </form> 
      </div>
    </div>
  </div>
</div>

  <div class="card-footer text-muted">
    <b>Última Edición: 12 de Marzo de 2021</b>
  </div>
</div>

@endsection
