@extends('layouts.master')

@section('title')
	Sign up - Tokyo Shop
@stop

@section('style')
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
    text-align: center;
  }
@stop

<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/signin.css" rel="stylesheet">
<link rel="shortcut icon" type="image/jpg" href="img/favicon.ico"/>

@section('content')

  <nav class="navbar navbar-dark bg-dark fixed-top align-middle">
      <a class="navbar-brand" href="{{route('Home')}}">
        <img src="img/clipart2315515.png" width="37" class="d-inline-block align-top" alt="">
        TokyoShop
      </a>
  </nav>

  {{ Form::open(array('url' => 'register', 'class' => 'form-signin'))}}

    <img class="mb-4" src="img/clipart2315515.png" alt="" width="100">
    <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
    <label for="username" class="sr-only">Username</label>
    <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
    <label for="email" class="sr-only">E-mail</label>
    <input type="email" id="email" name="email" class="form-control" placeholder="E-mail" required>
    <label for="password" class="sr-only">Password</label>
    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
  
    <button class="btn btn-lg btn-success btn-block" type="submit">Registro</button>

    {{ HTML::link('login', 'Login', array('class' => 'btn btn-lg btn-primary btn-block'))}}

    <p class="mt-5 mb-3 text-muted">&copy; 2021 TokyoShop</p>
  
  {{ Form::close()}}

@stop

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../js/bootstrap.bundle.min.js"></script>