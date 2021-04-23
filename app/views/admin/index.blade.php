@extends('layouts.master')

@section('title')

@stop

@section('content')
	<h3>Panel de Administración</h3>

	<hr>
	
	<table style="border:1px solid">
		<caption>Categorías</caption>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Borrar</th>
		</tr>
		@foreach($categories as $category)
		<tr>
			<td>{{ $category->id }}</td>
			<td>{{ link_to_route('EditCategory', $category->name, $category->id) }}</td>
			<td>{{ link_to_route('DeleteCategory', 'Eliminar', $category->id) }}</td>
		</tr>
		@endforeach
	</table>
	<br>

	{{ link_to_route('NewCategory', 'Añade una nueva categoría')}} <br><br>

	<table style="border:1px solid">
		<caption>Productos</caption>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Precio</th>
			<th>Categoría</th>
			<th>Borrar</th>
		</tr>
		@foreach($products as $product)
		<tr>
			<td>{{ $product->id }}</td>
			<td>{{ link_to_route('EditProduct', $product->name, $product->id) }}</td>
			<td>{{ $product->price }}</td>
			<td>{{ $product->category_id }}</td>
			<td>{{ link_to_route('DeleteProduct', 'Eliminar', $product->id) }}</td>
		</tr>
		@endforeach
	</table>
	<br>

	{{ link_to_route('NewProduct', 'Añade un nuevo producto')}}
	
@stop

