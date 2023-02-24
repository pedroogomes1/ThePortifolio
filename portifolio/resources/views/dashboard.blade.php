@extends('layouts.layout')
@section('title', 'Dashboard')
@section('content')

<!-- navbar bootstrap 4.6 -->
<x-dashboard.navbar/>
<!-- End Navbar bootstrap 4.6 -->

@php
$x = "list";
@endphp

@if($x == "teste")
<p>rodou</p>
@elseif($x == "list")
<x-dashboard.liste />
@else
@endif

<!-- Modals  -->
<x-dashboard.about-modal />
<x-dashboard.portfolio-modal />
<x-dashboard.services-modal />
<x-dashboard.signature-modal />
<x-dashboard.testimonials-modal />
<!-- End Modals -->

@endsection