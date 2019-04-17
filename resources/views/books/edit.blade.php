@extends('template')

@section('content')

<h1 class="text-center">Agregar Libros</h1>
<hr>
<div class="container">
	<form action="{{ route('books.update', $book->id) }}" method="POST">
		
		@csrf
		@method('PUT')
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<strong>Titulo:</strong>
					<input type="text" name="title" value="{{ $book->title}}" class="form-control" placeholder="Titulo del libro">
					@if($errors->has('title'))
						<strong class="text-danger">{{ $errors->first('title')}}</strong>
					@endif
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<strong>Descricion:</strong>
					<textarea name="description" class="form-control" placeholder="Reseña">{{ $book->description}}</textarea>
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