<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<title>Crud laravel</title>
  </head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-custom">
	  <a class="navbar-brand" href="{{ route('books.index')}}">Admin</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="{{ route('books.index')}}">Inicio</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Publicaciones</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="{{route('clientes.index') }}">clientes</a>
	      </li>

	    </ul>
	  </div>
	</nav>


	<section>
		@yield('content')
	</section>


	<script src="{{asset('plugins/jquery/jquery-3.3.1.min.js')}}"></script>
	<script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>