@extends('master')

@section('content')

<h3>Books list</h3>

	@foreach($books as $book)
		<div>
			<span>{{ $book->title}}</span>
			<a href="/books/edit/{{$book->id}}">Edit</a>
		</div>
	@endforeach

@endsection