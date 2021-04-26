@extends('layouts.master')

@section('title')
	Panel de Administración
@stop

@section('style')
	body {
  		min-height: 75rem;
  		padding-top: 4.5rem;
	}

	.container button a {
		color: #FFFFFF !important;
		text-decoration: none !important;
	}

	.container table a {
		color: #000000 !important;
	}

@stop

@section('content')
	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">LaravelShop <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Introduce tu búsqueda" aria-label="Search">
          <button class="btn btn-info my-2 my-sm-0" type="submit">Buscar</button>
      </div>
    </nav>

    <main role="main" class="container">
  		<div class="album py-5 bg-light">
  			<div class="container">
  				<h5>Tabla Categorías</h5>
    			<table class="table table-striped">
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Nombre</th>
						<th scope="col">Borrar</th>
					</tr>
			
					@foreach($categories as $category)
				
					<tr>
						<td>{{ $category->id }}</td>
						<td>{{ link_to_route('EditCategory', $category->name, $category->id) }}</td>
						<td>{{ link_to_route('DeleteCategory', '(X)', $category->id) }}</td>
					</tr>
		
					@endforeach

					</table>

					<button type="button" class="btn btn-info">{{ link_to_route('NewCategory', 'Añade una nueva categoría')}}</button>

					<br>
					<br>
					<hr>	

					<h5>Tabla Productos</h5>
					<table class="table table-striped">
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Precio</th>
							<th>Categoría</th>
							<th>Imagen</th>
							<th>Borrar</th>
						</tr>
		
					@foreach($products as $product)
		
						<tr>
							<td>{{ $product->id }}</td>
							<td>{{ link_to_route('EditProduct', $product->name, $product->id) }}</td>
							<td>{{ $product->price.'€' }}</td>
							
							@foreach($categories as $category)
                          
                          		@if($product->category_id == $category->id)

									<td>{{ $category->name }}</td>

								@endif

							@endforeach

							<td>{{ HTML::image('img/products/'.$product->image, $product->name, array('width' => '50', 'height' => '50')) }}</td>
							<td>{{ link_to_route('DeleteProduct','(X)', $product->id) }}</td>

						</tr>
		
					@endforeach
	
				</table>

				<button type="button" class="btn btn-info">{{ link_to_route('NewProduct', 'Añade un nuevo producto')}}</button>

  			</div>
  		</div>
	</main>
	
@stop