@extends('layouts.app')

@section('content')

<h1>
	Add New Lecture
</h1>
<form action="{{ route('lectures.store')}}" method="POST">
	{{ csrf_field() }}
	<p>Add Lecture Name</p>

	<input type="text" name="name">
	<p>Add Number of Hours Per Lectute</p>

	<input type="number" name="num_of_hours">
	<p>Select The Course The Lecture Belongs To</p>
	
	<select name="course_id">
		@foreach( $courses as $course )
		<option value="{{ $course->id }}">{{ $course->name }}</option>
		@endforeach
	</select>
	<input type="submit" name="submit" value="Add Lecture">	
</form>


@endsection