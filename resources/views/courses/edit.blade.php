<h1>
	Edit course
</h1>

<form action="{{ route('courses.update', $course->id ) }}" method="POST">
	{{ csrf_field() }}
	{{ method_field('PUT') }}
	name
	<input type="text" name="name" value="{{ $course->name }}">
	description
	<textarea name="description">{{ $course->description }}</textarea>
	<input type="submit" name="submit" value="save">
</form>