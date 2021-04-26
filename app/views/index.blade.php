<!doctype html>
<html lang="es-ES">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Laravel Shop</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      body {
        padding-top: 5rem;
      }

      .starter-template {
        padding: 3rem 1.5rem;
        text-align: center;
      }
    </style>
   
    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <!-- <a class="navbar-brand" href="#">Navbar</a>-->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">LaravelShop <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos</a>
            <div class="dropdown-menu bg-dark" aria-labelledby="dropdown01">
              <a class="dropdown-item bg-dark" style="color: #EEECEB" href="#">Camisetas</a>
              <a class="dropdown-item bg-dark" style="color: #EEECEB" href="#">Figuras</a>
              <a class="dropdown-item bg-dark" style="color: #EEECEB" href="#">Posters</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Comunidad</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Acerca de</a>
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

          <div class="row">

              @foreach($products as $product)

                <div class="col-md-4">
                  <div class="card mb-4 shadow-sm">
                    
                    <span class="img-fluid">{{ HTML::image('img/products/'.$product->image, $product->name, array('width' => '100%', 'height' => '300')) }}</span>

                    <div class="card-body">
                      <h5 class="card-title">{{ $product->name }}</h5>
                      <p class="card-text" style="min-height: 80px">{{ $product->description }}</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-success" disabled>{{ $product->price.'€' }}</button> 
                          <button type="button" class="btn btn-sm btn-info">Añadir al Carrito</button>
                        </div>
                        
                        @foreach($categories as $category)
                          
                          @if($product->category_id == $category->id)
                            
                            <small class="text-muted">{{ $category->name }}</small>
                         
                          @endif
                        
                        @endforeach
                      
                      </div>
                    </div>
                  </div>
                </div>

              @endforeach

          </div>
        </div>
      </div>

    </main><!-- /.container -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.slim.min.js"><\/script>')</script><script src="js/bootstrap.bundle.min.js"></script>
      
  </body>
</html>