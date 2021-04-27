@extends('layouts.master')

@section('title')
	Edita un producto
@stop

@section('content')
	<h3>Edita el producto: {{$product->name}} </h3>

	<hr>

	{{ Form::model($product, array('route' => array('updateProduct',$product->id), 'files'=>'true')) }}

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
	<p>{{ Form::select('category', $categories, $product->category_id) }}</p>
	<p>{{ $errors->first('category') }}</p>

	<p>Imagen actual:</p> 
	<p>	{{ HTML::image('img/products/'.$product->image, $product->name, array('width' => '100')) }}</p>
	<p>{{ Form::file('image') }} </p>
	<p>{{ $errors->first('image') }}</p>


	
	<p> {{ Form::submit('Editar') }}</p>

	{{ Form::close() }}

	{{ link_to_route('AdminIndex', 'Atrás')}}		

@stop