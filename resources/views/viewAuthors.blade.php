@extends('master')

@section('content')

<h3>Authors list</h3>

	@foreach($authors as $author)
		<div>
			<span>{{ $author->name}}</span>
			<a href="/authors/{{$author->id}}">view author books</a>
		</div>
	@endforeach

@endsection