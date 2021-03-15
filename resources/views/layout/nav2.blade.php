<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>

<body>

<ul class="nav justify-content-end bg-dark">
  <li class="nav-item">
    <a class="navbar-brand"  href="{{ url('/home') }}">Faurecia México</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="{{ route('login') }}">Iniciar Sesión</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="{{ route('register') }}">Rigistrarse</a>
  </li>
</ul>
</nav>
</body>
</html>