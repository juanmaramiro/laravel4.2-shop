@extends('layouts.master')

@section('title')
	Edita un producto - Tokyo Shop
@stop

@section('style')
	body {
  		min-height: 75rem;
  		padding-top: 4.5rem;
	}
@stop

<link href="../../css/bootstrap.min.css" rel="stylesheet">
<link rel="shortcut icon" type="image/jpg" href="../../img/favicon.ico"/>

@section('content')

	<nav class="navbar navbar-dark bg-dark fixed-top align-middle">
  		<a class="navbar-brand" href="{{route('AdminIndex')}}">
  			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
  			<path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
			</svg>
			Atrás
		</a>
    <span class="navbar-text">Bienvenido, {{ Auth::user()->username }} || <a href="{{route('LogOut')}}">Logout</a></span>
	</nav>

	<main role="main" class="container">
  		<div class="jumbotron bg-light">
  			<div class="container">
				<h3>Edita el producto: {{$product->name}} </h3>

				<hr>

				{{ Form::model($product, array('route' => array('updateProduct',$product->id), 'files'=>'true')) }}
				<div class="form-row">
    				<div class="form-group col-md-4">
      					<label for="name">Nombre</label>
      					<input type="text" class="form-control" id="name" name="name" placeholder="Introduce el nombre del producto" value="{{ $product->name }}">
      					<small class="form-text text-muted">{{ $errors->first('name') }}</small>
    				</div>
    				<div class="form-group col-md-4">
      					<label for="price">Precio</label>
      					<input type="text" class="form-control" id="price" name="price" placeholder="Introduce el precio del producto" value="{{ $product->price }}">
      					<small class="form-text text-muted">{{ $errors->first('price') }}</small>
    				</div>
  				</div>
  				<div class="form-row">
  					<div class="form-group col-md-8">
    					<label for="description">Descripción</label>
    					<textarea class="form-control" id="description" name="description" rows="3" placeholder="Introduce la descripción del producto">{{ $product->description }}</textarea>
    					<small class="form-text text-muted">{{ $errors->first('description') }}</small>
  					</div>
  				</div>
  				<div class="form-row">
  					<div class="form-group col-md-2">
    					<label for="category">Categoría</label>
      					<select id="category" name="category" class="form-control">
      						
      						@foreach ($categories as $key => $value)

    							@if ($key == $product->category_id)

    								<option value="{{ $key }}" selected>{{ $value }}</option>

    							@else

    								<option value="{{ $key }}">{{ $value }}</option>

    							@endif
							
							@endforeach
      					
      					</select>
      					<small class="form-text text-muted">{{ $errors->first('category') }}</small>
  					</div>
  				</div>
  				<div class="form-row">
    				<div class="form-group col-md-6">
      					<label for="image">Imagen actual </label><br>
      					<img src="../../img/products/{{ $product->image }}" width="100px" /><br><br>
      					<input type="file" class="form-control-file" id="image" name="image">
    				</div>
  				</div>
	
				    <button type="submit" class="btn btn-primary">Editar</button>

				{{ Form::close() }}

			   </div>
  		</div>
	</main>

@stop

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../../js/bootstrap.bundle.min.js"></script>