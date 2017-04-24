@extends('master')

@section('content')

<form method="post" action="/add" >

	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
		<label for="isbn">ISBN</label>
		<input type="text" name="isbn" id="isbn" >
	</div>
	
	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" name="title" id="title" >
	</div>
	
	<div class="form-group">
		<label for="subtitle">Subtitle</label>
		<input type="text" name="subtitle" id="subtitle" >
	</div>
	
	<div class="form-group">
		<input type="submit" value="Submit">
	</div>
	
</form>

@endsection