<!doctype html>
<html lang="es-ES">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Categorías - Tokyo Shop</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/jpg" href="../img/favicon.ico"/>

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

      .navbar-nav li:hover .dropdown-menu {
        display: block;
      }

      .dropdown-menu {
        margin-top: 0;
      }

    </style>
   
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <a class="navbar-brand" href="{{route('Home')}}">
            <img src="../img/clipart2315515.png" width="37" class="d-inline-block align-top" alt="">
            TokyoShop
          </a>
          <li class="nav-item dropdown">
            <a class="nav-link" href="{{route('Home')}}" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos</a>
            <div class="dropdown-menu bg-dark" aria-labelledby="dropdown01">
              <a class="dropdown-item bg-dark" style="color: #EEECEB" href="{{route('getCategory', ['id' => 2])}}">Figuras</a>
              <a class="dropdown-item bg-dark" style="color: #EEECEB" href="{{route('getCategory', ['id' => 3])}}">Camisetas</a>
              <a class="dropdown-item bg-dark" style="color: #EEECEB" href="{{route('getCategory', ['id' => 5])}}">Posters</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('Contact')}}">Contacto</a>
          </li>
        </ul>

        @if(Auth::check())

          <span class="navbar-text">Bienvenido, {{ Auth::user()->username }} || <a href="{{route('LogOut')}}">Logout</a></span>

        @else

        <span class="navbar-text"><a href="{{url('login')}}">Login</a> || <a href="{{url('register')}}">Registro</a></span>

        @endif

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
                          <button type="button" class="btn btn-sm btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                            Añadir al carrito
                          </button>
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

    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../js/bootstrap.bundle.min.js"></script>

</body>
</html>