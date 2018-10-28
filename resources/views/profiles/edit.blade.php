@extends('layouts.app')

@section('content')

<h1>
	Edit user`s profile
</h1>
@if( $profile->image_path )
	<img src="{{ asset('img/' . $profile->image_path) }}" width="100">
@endif
{!! Form::model($profile, [ 'route'=>['profiles.update', $profile->id ], 'method'=>'patch', 'files' => 'true']) !!}
{!! Form::label('image_path', 'Добавете профилна снимка') !!}
{!! Form::file('image_path', ['id'=>'image_path']) !!}
{!! Form::submit('Update profile') !!}
{!! Form::close() !!}
@endsection

