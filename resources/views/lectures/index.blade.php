@extends('layouts.app')

@section('content')

@foreach ($lectures as $lecture)
<pre>
	{{ var_dump($lecture) }}
</pre>

@endforeach

@endsection