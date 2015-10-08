@extends('template')

@section('content')
	@foreach ($users as $user)
		{{ $user->name }}
	@endforeach
	
@stop