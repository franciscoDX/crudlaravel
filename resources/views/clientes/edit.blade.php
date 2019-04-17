@extends('template')

@section('content')

<h1 class="text-center">Editar clientes</h1>
<hr>

<div class="container">
	<form action="{{ Route('clientes.update', $cliente->id)}}" method="POST">
		@csrf
		@method('PUT')
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<strong>Nombre:</strong>
					<input type="text" name="firstname" class="form-control" value="{{ $cliente->firstname}}">
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<strong>Apellido:</strong>
					<input type="text" name="lastname" class="form-control" value="{{ $cliente->lastname}}">
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<strong>email:</strong>
					<input type="email" name="email" class="form-control" value="{{ $cliente->email}}">
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<strong>edad:</strong>
					<input type="number" name="age" class="form-control" value="{{ $cliente->age}}">
				</div>
			</div>
			<div class="col-md-12 text-center">
				<button type="submit" class="btn btn-primary">Enviar</button>
			</div>
		</div>
	</form>
	<a class="btn btn-info mb-3" href="{{ url()->previous() }}">Regresar</a>

</div>

@endsection