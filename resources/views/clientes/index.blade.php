@extends('template')

@section('content')
	<div class="container">
		<h1 class="text-center">Clientes</h1>
		<a class="btn btn-info mb-3" href="{{ route('clientes.create')}}">Agregar clientes</a>

		@if (Session::has('message'))
			<div class="alert alert-warning alert-dismissible fade show" role="alert"> {{ Session::get('message')}}
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  	</button>
			</div>
		@endif

		<table class="table">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">id</th>
		      <th scope="col">nombre</th>
		      <th scope="col">apellido</th>
		      <th scope="col">email</th>
		      <th scope="col">edad</th>
		      <th scope="col">Avatar</th>
		      <th scope="col">acciones</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($cliente as $clientes)
		  	<tr>
				<th scope="row">{{ $clientes->id}}</th>
				<td>{{ $clientes->firstname}}</td>
				<td>{{ $clientes->lastname}}</td>
				<td>{{ $clientes->email}}</td>
				<td>{{ $clientes->age}}</td>
		  	  	<td><img src="{{ asset('images/'.$clientes->avatar)}}" width="200" alt=""></td>
		  	  	<td>
					<a class="btn-sm btn-info" href="{{ route('clientes.edit', $clientes->id)}}"><i class="fas fa-edit"></i></a>
					<form action="{{ route('clientes.destroy', $clientes->id)}}" method="POST">
						@csrf
						@method('DELETE')
						<button type="submit" class="btn-sm btn-danger mt-2"><i class="far fa-trash-alt"></i></button>
		  	  		</form>
		  	  	</td>
		  	</tr>
		  	@endforeach
		  </tbody>
		</table>
		{{ $cliente->links() }}
	</div>

@endsection