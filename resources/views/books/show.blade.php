@extends('template')

@section('content')

<div class="container">
	<div class="card">
		<div class="card-header">
		    {{$book->title}}
		</div>
		<div class="card-body">
			<blockquote class="blockquote mb-0">
		      <p>{{$book->description}}</p>
		      <footer class="blockquote-footer">{{$book->created_at}}</footer>
		      </blockquote>
		</div>
	</div>
</div>

@endsection