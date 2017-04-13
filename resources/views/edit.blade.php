@extends('master')

@section('content')

<form method="post" action="/books/{{$book->id}}" >

	{{method_field('PATCH')}}
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	
	<input type="hidden" name="bookid" value="{{$book->id}}">
	
	<div class="form-group">
		<label for="isbn">ISBN</label>
		<input type="text" name="isbn" id="isbn" value="{{$book->isbn}}">
	</div>
	
	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" name="title" id="title" value="{{$book->title}}">
	</div>
	
	<div class="form-group">
		<label for="subtitle">Subtitle</label>
		<input type="text" name="subtitle" id="subtitle" value="{{$book->subtitle}}">
	</div>
	
	<div class="form-group">
		<input type="submit" value="Submit">
	</div>
	
</form>

@endsection