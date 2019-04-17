@extends('template')

@section('content')

<h1 class="text-center">Agregar Libros</h1>
<hr>
@if (Session::has('message'))
	<div class="alert alert-info"> {{ Session::get('message')}}</div>
@endif
<div class="container">
	<form action="{{ route('books.store')}}" method="POST">
		@csrf
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<strong>Titulo:</strong>
					<input type="text" name="title" class="form-control" placeholder="Titulo del libro" value="{{ old('title')}}">
					@if($errors->has('title'))
						<strong class="text-danger">{{ $errors->first('title')}}</strong>
					@endif
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<strong>Descricion:</strong>
					<textarea name="description" class="form-control" placeholder="Reseña">{{ old('description')}}</textarea>
					@if($errors->has('description'))
						<strong class="text-danger">{{ $errors->first('description')}}</strong>
					@endif
				</div>
			</div>
			<div class="col-md-12 text-center">
				<button type="submit" class="btn btn-primary">Enviar</button>
			</div>
		</div>
	</form>
</div>

@endsection