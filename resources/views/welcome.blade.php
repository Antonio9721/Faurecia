@extends('layout.footer')
@extends('layout.layout')
@extends('layout.nav2')
@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.plastico.com/documenta/imagenes/126553/Faurecia-amplia-su-planta-de-Puebla-G.jpg" width="1325" height="500">
    </div>
    
    <div class="carousel-item">
      <img src="https://cdn.forbes.com.mx/2017/06/faurecia.jpg" width="1325" height="500">
    </div>

    <div class="carousel-item">
      <img src="http://www.automotores-rev.com/wp-content/uploads/2020/02/Faurecia-Top-Employer-2020-1-1.jpg" width="1325" height="500">
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

<h2><center>faurecia méxico inspiring mobility</center></h2>

<div class="card-group">
  <div class="card">
    <img src="assets/images/directivo.jpg" height="356" class="card-img-top" alt="...">
    <div class="card-body text-white bg-primary">
      <h5 class="card-title"><center><b>¿Conoces qué es faurecia?</b></center></h5>
      <p class="card-text">Faurecia ha crecido hasta convertirse en un jugador importante en la industria automotriz. Líder en sus tres áreas de negocios, el Grupo está respaldado por una red de I + D y producción con sitios en 35 países.</p>
    </div>
    <div class="card-footer bg-dark">
      <small class="text-white">Última edición. 18 de Marzo de 2021</small>
    </div>
  </div>

  <div class="card">
    <img src="assets/images/nota284.png" height="356" class="card-img-top" alt="...">
    <div class="card-body text-white bg-primary">
      <h5 class="card-title "><center><b>Un poco de historia</b></center></h5>
      <p class="card-text">Faurecia se fundó en 1997 después de una fusión entre Bertrand Faure, un especialista en almohadones de asiento para la industria automotriz y ECIA, filial y fabricante de asientos, frontales e interiores de vehículos de Peugeot.</p>
    </div>
    <div class="card-footer bg-dark">
      <small class="text-white">Última edición. 18 de Marzo de 2021</small>
    </div>
  </div>

  <div class="card">
    <img src="assets/images/cliente.jpg" height="356" class="card-img-top" alt="...">
    <div class="card-body text-white bg-primary">
      <h5 class="card-title"><center><b>Faurecia hoy</b></center></h5>
      <p class="card-text">Con 300 sitios que incluyen 30 centros de I + D en 35 países de todo el mundo, Faurecia es ahora líder mundial en sus tres áreas de negocios: asientos de automóviles, sistemas interiores y tecnologías de control de emisiones. </p>
    </div>

    <div class="card-footer bg-dark">
      <small class="text-white">Última edición. 18 de Marzo de 2021</small>
    </div>
  </div>
</div>
<br>
@endsection
