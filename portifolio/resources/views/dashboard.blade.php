@extends('layouts.layout')
@section('title', 'Dashboard')
@section('content')

<!-- navbar bootstrap 4.6 -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Logo</a>
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
          <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalAbout">ADD</a></li>
          <li><a class="dropdown-item" href="#">LIST</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Serviços
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalServices">ADD</a></li>
          <li><a class="dropdown-item" href="#">LIST</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Portifólios
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalPortfolio">ADD</a></li>
          <li><a class="dropdown-item" href="#">LIST</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Testemunhas
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalTestimonials">ADD</a></li>
          <li><a class="dropdown-item" href="#">LIST</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Assinaturas
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalSignature">ADD</a></li>
          <li><a class="dropdown-item" href="#">LIST</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>

<!-- End Navbar bootstrap 4.6 -->

@php
    $x = "list";
@endphp

@if($x == "teste")
    <p>rodou</p>
@elseif($x == "list")
    <x-dashboard.liste/>
@else
@endif

<!-- Modals  -->

<x-dashboard.about-modal/>
<x-dashboard.portfolio-modal/>
<x-dashboard.services-modal/>
<x-dashboard.signature-modal/>
<x-dashboard.testimonials-modal/>
<!-- End Modals -->

@endsection