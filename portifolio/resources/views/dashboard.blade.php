@extends('layouts.layout')
@section('title', 'Dashboard')
@section('content')

<!-- navbar bootstrap 4.6 -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Página Inicial <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Sobre mim
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">ADD</a></li>
          <li><a class="dropdown-item" href="#">LIST</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Serviços
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">ADD</a></li>
          <li><a class="dropdown-item" href="#">LIST</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Portifólios
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">ADD</a></li>
          <li><a class="dropdown-item" href="#">LIST</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Testemunhas
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">ADD</a></li>
          <li><a class="dropdown-item" href="#">LIST</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Assinaturas
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">ADD</a></li>
          <li><a class="dropdown-item" href="#">LIST</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>

<!-- fim do navbar bootstrap 4.6 -->



@endsection