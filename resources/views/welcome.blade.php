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
      <img src="https://redrim.com.mx:8443/rim/imagenes/notas/nota284.png" width="1325" height="500">
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
<br>
@endsection
