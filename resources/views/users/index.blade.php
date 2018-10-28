@extends('layouts.app')

@section('content')

<h1>
	Users List
</h1>
<table border="1">
	<tr>
		<td>User name</td>
		<td>User email</td>	
		<td></td>	
	</tr>
	@foreach($users as $user)
	<tr>
		<td>
			<!-- LINK TO USER PROFILE -->
			<a href="">{{ $user->name}}</a>
		</td>
		<td>
			{{ $user->email }}
		</td>
		<td>
			@if( $user->profile )
			<a href="{{ route('profiles.edit', $user->id)}}">Edit Profile</a>
			@endif
		</td>
		
		@if( Auth::user()->role == 'admin')
		<td>
			<a href="{{ route('users.edit', $user->id) }}">Update</a>
		</td>
		<td>
			<form action="{{ route('users.destroy', $user->id) }}" method="POST">
				{{ csrf_field() }}
				{{ method_field('DELETE') }}
				<input type="submit" name="submit" value="delete">
			</form>			
		</td>
		@endif
		
	</tr>
	@endforeach
</table>
@if( Auth::user()->role == 'admin')
<a href="{{ route('users.create') }}"> Add new user </a>
@endif

@endsection







