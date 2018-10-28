@extends('layouts.app')

@section('content')


<h1>
	Add new course
</h1>

@if(Session::has('message'))
	{{ Session::get('message') }}
@endif

@if( $errors->any() )
	@foreach( $errors->all() as $error)
		{{ $error }}
	@endforeach
@endif

{!! Form::open(['route' => 'courses.store']) !!}

{!! Form::label('name', 'Име на курса') !!}
<p>
	{!! Form::text('name', 'Name here ...')!!}
</p>
{!! Form::label('description', 'Описание на курса') !!}
<p>
	{!! Form::textarea('description', old('description')) !!}
</p>	
{!! Form::submit('Save course') !!}
{!! Form::close() !!}


@endsection