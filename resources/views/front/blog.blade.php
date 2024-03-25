@extends('layouts.master')
@section('styles1')
<link rel="stylesheet" href="{{asset('assets/css/Team-Boxed.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/Testimonials.css')}}">
<link rel="stylesheet" href="{{asset('assets/fonts/fontawesome-all.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/fonts/fontawesome5-overrides.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/Newsletter-v2.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/vanilla-zoom.min.css')}}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
@endsection
@section('content')

   <main class="page blog-post-list">
        <section class="clean-block clean-blog-list dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">News Post List</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
                <div class="block-content">
                  @foreach ($posts as $post)
                    <div class="clean-blog-post">
                        <div class="row">
                            <div class="col-lg-4"><img class="img-thumbnail img-fluid d-block float-end d-lg-flex align-items-lg-center" src="{{ asset('storage/'.$post->cover) }}" loading="lazy" alt="{{ $post->title }}"></div>
                            <div class="col-lg-5 offset-lg-0">
                                <h3>{{ $post->title }}</h3>
                                <div class="info"><span class="text-muted">{{ Carbon\Carbon::parse($post->created_at)->format("d F, Y") }} by&nbsp;<a href="#">{{ $post->user->name }}</a></span></div>
                                <p>{{ Str::limit( strip_tags( $post->body ), 250 ) }}</p><a href="{{route('blogshow',$post->slug)}}"><button class="btn btn-outline-primary btn-sm" type="button">Read More</button></a>
                            </div>
                        </div>
                    </div>
                   @endforeach 
                </div>
            </div>
        </section>
    </main><div class="newsletter8 py-5">
  <div class="container">
    <div class="row">
      <!-- column  -->

      <!-- column  -->
      <div class="col-lg-6 ml-auto">
        <div class="d-block d-md-flex border-bottom pb-3 text-uppercase">
          <h6 class="no-shrink font-weight-medium align-self-center m-b-0">Latest News</h6>
         
        </div>

        @foreach ($recent as $recent)
        <div class="row blog-row mt-4 mb-3">
          <div class="col-md-4">
            <a href="{{route('blogshow',$recent->slug)}}"><img src="{{ asset('storage/'.$recent->cover) }}" alt="wrapkit" class="img-fluid" /></a>
          </div>
          <div class="col-md-8">
            <h5><a href="{{route('blogshow',$recent->slug)}}" class="text-decoration-none">{{ $recent->title }}</a></h5>
            <p>by <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> / {{ Carbon\Carbon::parse($recent->created_at)->format("d F, Y") }}</p>
          </div>
        </div>
        @endforeach
      </div>
      <!-- column  -->
    </div>
  </div>
</div>

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

