@extends('layouts.master')
@section('styles1')

<link rel="stylesheet" href="{{asset('assets/fonts/fontawesome-all.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/Newsletter-v2.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/vanilla-zoom.min.css')}}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
@endsection
@section('content')
<main class="page blog-post">
        <section class="clean-block clean-post dark">
            <div class="container">
                <div class="block-content">
                <figure class="figure"><img class="rounded img-fluid figure-img" src="{{ asset('storage/'.$post->cover) }}" alt="A generic square placeholder image with rounded corners in a figure.">
                            
                        </figure>
                    <div class="post-image" style="background-image:url({{ asset('storage/'.$post->cover) }});"></div>
                    <div class="post-body">
                        <h3>{{ $post->title }}</h3>
                        <div class="post-info"><span>By {{ $post->user->name }}</span><span> {{ Carbon\Carbon::parse($post->created_at)->format("d F, Y") }}</span></div>
                        <p>{!! $post->body !!}</p>
                        
                        
                    </div>
                </div>
            </div>
        </section>
    </main>
        @endsection
  @section('scripts')
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/bs-init.js')}}"></script>
    <script src="{{asset('assets/js/agency.js')}}"></script>
    <script src="{{asset('assets/js/Client-Logo-Slider.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{asset('assets/js/Image-Tab-Gallery-Horizontal.js')}}"></script>
    <script src="{{asset('assets/js/Modal-commerce-popup-button.js')}}"></script>
    <script src="{{asset('assets/js/Portfolio-with-Category-switcher.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="{{asset('assets/js/vanilla-zoom.js')}}"></script>
    <script src="{{asset('assets/js/theme.js')}}"></script>

  @endsection
