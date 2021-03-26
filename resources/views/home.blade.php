@section('content')
@extends('layouts.plantilla')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>


  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/images/cliente.jpg" width="1325" height="500">
    </div>

    <div class="carousel-item">
      <img src="assets/images/empleado.jpg" width="1325" height="500">
    </div>

    <div class="carousel-item">
      <img src="assets/images/edificio.jpg" width="1325" height="500">
    </div>
  </div>

  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>

  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<h2><center>módulos del sistema</center></h2>

<div class="card-group">
  <div class="card">
    <img src="assets/images/cliente.jpg" width="350" height="320">
    <div class="card-body">
      <h5 class="card-title"><b>Clientes</b></h5>
      <p class="card-text">En este módulo encontraras cada uno de ranchos pertenecientes a la hacienda café colonial del municipio de Tlatlauquitepec.</p>
    </div>
    <center>
    <a href="{{ route('clients.index') }}">
        <button class="btn btn-primary btn-lg btn-block">Acceder</button></a>
        </center>
    <div class="card-footer">
      <small class="text-muted">Última edición. 15 de marzo de 2021</small>
    </div>
  </div>

  <div class="card">
    <img src="assets/images/empleado.jpg" width="350" height="320">
    <div class="card-body">
      <h5 class="card-title"><b>Empleados</b></h5>
      <p class="card-text">En este módulo podrás encontrar todos los trabajadores registrados o que laboran en la hacienda.</p>
    </div>
    <center>
    <a href="{{ route('employes.index') }}">
        <button class="btn btn-primary btn-lg btn-block">Acceder</button></a>
        </center>
    <div class="card-footer">
      <small class="text-muted">Última edición. 15 de marzo de 2021</small>
    </div>
  </div>

  <div class="card">
    <img src="assets/images/carro.jpeg" width="350" height="320">
    <div class="card-body">
      <h5 class="card-title"><b>Vehículos</b></h5>
      <p class="card-text">En el presente módulo, encontrarás todos los registros de las cosechas de café realizadas en cada temporada.</p>
    </div>
    <center>
    <a href="{{ route('cars.index') }}">
        <button class="btn btn-primary btn-lg btn-block">Acceder</button></a>
        </center>
    <div class="card-footer">
      <small class="text-muted">Última edición. 15 de marzo de 2020.</small>
    </div>
  </div>
</div>
 
<div class="card-group">
  <div class="card">
    <img src="assets/images/autoparte.jpg" width="350" height="320">
    <div class="card-body">
      <h5 class="card-title"><b>Autopartes</b></h5>
      <p class="card-text">En el presente módulo podrás consultar todos los productos agricolas que la hacienda pone en venta, dichos productos son procesados en cada predio.</p>
    </div>
    <center>
    <a href="{{ route('parts.index') }}">
        <button class="btn btn-primary btn-lg btn-block">Acceder</button></a>
        </center>
    <div class="card-footer">
      <small class="text-muted">Última edición. 15 de marzo de 2021</small>
    </div>
  </div>

  <div class="card">
    <img src="assets/images/accesorio.jpg" width="350" height="320">
    <div class="card-body">
      <h5 class="card-title"><b>Accesorios</b></h5>
      <p class="card-text">En este módulo podrás consultar todos los almacenes con los que cuenta la hacienda en cada uno de sus predios. </p>
    </div>
    <center>
    <a href="{{ route('accesories.index') }}">
        <button class="btn btn-primary btn-lg btn-block">Acceder</button></a>
        </center>
    <div class="card-footer">
      <small class="text-muted">Última edición. 15 de marzo de 2021</small>
    </div>
  </div>


  <div class="card">
    <img src="assets/images/edificio.jpg" width="350" height="320">
    <div class="card-body">
      <h5 class="card-title"><b>Compra de Vehiculos</b></h5>
      <p class="card-text">En este módulo podrás administrar los insumos que son invertidos cada temporada para poder obtener una cosecha lo bastante satisfactoria.</p>
    </div>
    <center>
    <a href="{{ route('clients.index') }}">
        <button class="btn btn-primary btn-lg btn-block">Acceder</button></a>
        </center>
    <div class="card-footer">
      <small class="text-muted">Última edición. 15 de marzo de 2021</small>
    </div>
  </div>
</div>
<br>

<!DOCTYPE html>
<html>
<head>
  <title>faurecia méxico</title>
</head>

<body>

<footer class="page-footer teal">
<footer style="background: black">
<footer>
  <div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-6 text-left">
            <h6 class="text-muted lead"><b>Dirección de la empresa:</b></h6>
            <h6 class="text-muted">
            Aut. México-Puebla<br>
            No. Km. 117<br>
            Tel. 222-229-87-14<br>

            Colonia: Finsa<br>
            Municipio: Cuautlancingo<br>
            Email: alejandra.sanchez@faurecia.com<br>
            </h6>
        </div>

        <div class="col-xs-12 col-md-6 text-right">
            <h6 class="text-muted lead"><b>Siguenos de nuestras redes sociales:</b></h6>
            <div class="redes-footer">
              <a href="#"><img src="assets/images/facebook.png" width="130"></a>
              <a href="#"><img src="assets/images/whats.png" width="130"></a>
              <a href="#"><img src="assets/images/Tw-log.png" width="130"></a>
            </div>
        </div>
    </div>
    <div class="row"> 

        <div class="col-md-12 text-right">
            <p class="text-muted small">Lic. Alejandra Sanchez Sandoval 
              <br>Directora de Recursos Humanos</p>
        </div>
        <div class="footer-copyright">
      <div class="container">
      <b>Desarrollado por </b> <a class="brown-text text-lighten-3" href="https://www.facebook.com/profile.php?id=100008366922650">Juan Antonio Islas Agustín</a>
      </div>
    </div>
    </div>

    </div>
  </div>  
</div>
</footer>
    
  </footer> 


</body>
</html>

@endsection


