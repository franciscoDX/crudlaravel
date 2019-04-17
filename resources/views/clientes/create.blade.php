@extends('template')

@section('content')

<h1 class="text-center">Agregar clientes</h1>
<hr>

<div class="container">
	<form action="{{ route('clientes.store')}}" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<strong>Nombre:</strong>
					<input type="text" name="firstname" class="form-control" placeholder="Ingrese su nombre" value="{{ old('firstname')}}">
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<strong>Apellido:</strong>
					<input type="text" name="lastname" class="form-control" placeholder="Ingrese su apellido" value="{{ old('lastname')}}">
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<strong>email:</strong>
					<input type="email" name="email" class="form-control" placeholder="Ingrese su email" value="{{ old('email')}}">
				</div>
				@if($errors->has('email'))
					<strong class="text-danger">{{ $errors->first('email')}}</strong>
				@endif
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<strong>edad:</strong>
					<input type="number" name="age" class="form-control" placeholder="Ingrese su edad" value="{{ old('age')}}">
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<strong>Foto Perfil:</strong>
					<input type="file" name="avatar">
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