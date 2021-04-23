@extends('layouts.master')

@section('title')
	Añade un nuevo producto
@stop

@section('content')
	<h3>Añade un nuevo producto: </h3>

	<hr>

	{{ Form::open(array('route' => 'storeProduct','files'=>'true')) }}

	<p>{{ Form::label('product_name', 'Nombre:') }}</p>
	<p>{{ Form::text('name') }}</p>
	<p>{{ $errors->first('name') }}</p>

	<p>{{ Form::label('description', 'Descripción:') }}</p>
	<p>{{ Form::textarea('description') }}</p>
	<p>{{ $errors->first('description') }}</p>

	<p>{{ Form::label('price', 'Precio:') }}</p>
	<p>{{ Form::text('price') }}</p>
	<p>{{ $errors->first('price') }}</p>

	<p>{{ Form::label('category', 'Categoría:') }}</p>
	<p>{{ Form::select('category', $categories) }}</p>
	<p>{{ $errors->first('category') }}</p>

	<p>{{ Form::label('image', 'Imagen:') }}</p>
	<p>{{ Form::file('image') }}</p>
	<p>{{ $errors->first('image') }}</p>
	
	<p> {{ Form::submit('Añadir') }}</p>

	{{ Form::close() }}

	{{ link_to_route('AdminIndex', 'Atrás')}}		

@stop