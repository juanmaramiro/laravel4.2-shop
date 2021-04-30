<!doctype html>
<html lang="es-ES">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contacto - Tokyo Shop</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/jpg" href="img/favicon.ico"/>

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
            <img src="img/clipart2315515.png" width="37" class="d-inline-block align-top" alt="">
            TokyoShop
          </a>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos</a>
            <div class="dropdown-menu bg-dark" aria-labelledby="dropdown01">
              <a class="dropdown-item bg-dark" style="color: #EEECEB" href="{{route('getCategory', ['id' => 2])}}">Figuras</a>
              <a class="dropdown-item bg-dark" style="color: #EEECEB" href="{{route('getCategory', ['id' => 3])}}">Camisetas</a>
              <a class="dropdown-item bg-dark" style="color: #EEECEB" href="{{route('getCategory', ['id' => 5])}}">Posters</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacto</a>
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
          <h3>Formulario de Contacto</h3>
          <form action="mailto:admin@tokyoshop.com" method="post" enctype="text/plain">
            <div class="form-group">
              <label for="inputUsername">Usuario</label>
              <input type="text" class="form-control" id="inputUsername" placeholder="Usuario" value="{{ Auth::user()->username }}" readonly>
            </div>
            <div class="form-group">
              <label for="inputEmail">Email</label>
              <input type="email" class="form-control" id="inputEmail" placeholder="Email" value="{{ Auth::user()->email }}" readonly>
            </div>
            <div class="form-group">
              <label for="inputSubject">Asunto</label>
              <input type="text" class="form-control" id="inputSubject" placeholder="Asunto" required>
            </div>
            <div class="form-group">
              <label for="inputDescription">Descripción</label>
              <textarea class="form-control" id="inputDescription" placeholder="Descripcion" required></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>

        </div>
      </div>

    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.slim.min.js"><\/script>')</script><script src="js/bootstrap.bundle.min.js"></script>
      
  </body>
</html>