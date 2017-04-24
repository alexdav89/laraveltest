@extends('master')

@section('content')

<h3>Books list</h3>

	@foreach($books as $book)
		<div>
			<span>{{ $book->title}}</span> - 
			<a href="/books/edit/{{$book->id}}">Edit</a> or
			<a href="/books/delete/{{$book->id}}">Delete</a>
		</div>
	@endforeach

@endsection