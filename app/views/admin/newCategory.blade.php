@extends('layouts.master')

@section('title')
	Añade una nueva categoría
@stop

@section('content')
	<h3>Añade una nueva categoría: </h3>

	<hr>

	{{ Form::open(array('route' => 'storeCategory')) }}

	<p>{{ Form::label('name', 'Nombre:') }}</p>
	<p>{{ Form::text('name') }}</p>
	<p>{{ $errors->first('name') }}</p>
	
	<p> {{ Form::submit('Añadir') }}</p>

	{{ Form::close() }}

	{{ link_to_route('AdminIndex', 'Atrás')}}		

@stop