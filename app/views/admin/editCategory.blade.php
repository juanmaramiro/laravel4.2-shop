@extends('layouts.master')

@section('title')
	Edita una categoría
@stop

@section('content')
	<h3>Edita la categoría: {{$category->name}} </h3>

	<hr>

	{{ Form::model($category, array('route' => array('updateCategory', $category->id))) }}

	<p>{{ Form::label('Nombre:') }}</p>
	<p>{{ Form::text('name') }}</p>
	<p>{{ $errors->first('name') }}</p>
	
	<p> {{ Form::submit('Editar') }}</p>

	{{ Form::close() }}

	{{ link_to_route('AdminIndex', 'Atrás')}}		

@stop