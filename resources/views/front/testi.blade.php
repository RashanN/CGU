@extends('layouts.master')
@section('styles1')
<link rel="stylesheet" href="{{asset('assets/css/Team-Boxed.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/Testimonials.css')}}">
<link rel="stylesheet" href="{{asset('assets/fonts/fontawesome-all.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/fonts/fontawesome5-overrides.min.css')}}">
@endsection
@section('content')


        <section class="py-2" style="width:100%;">
           
                <div style="background-image:url({{asset('assets/img/eventpic.jpeg')}});height:500px;background-position:center;background-size:cover;background-repeat:no-repeat;">
                    <div class="d-flex justify-content-center align-items-center" style="height:inherit;min-height:initial;width:100%;position:absolute;left:0;background-color:rgba(30,41,99,0.53);">
                        <div class="d-flex align-items-center order-5" style="height:200px;">
                            <div class="container">
                                <h1 class="text-center" style="color:rgb(242,245,248);font-size:56px;font-weight:bold;font-family:Roboto, sans-serif;">Our team </h1>
                                <h3 class="text-center" style="color:rgb(242,245,248);padding-top:0.25em;padding-bottom:0.25em;font-weight:normal;">We make your life mutch better</h3>
                            </div>
                        </div>
                    </div>
                </div>
             </section>




<section class="team-boxed">
        <div class="container">
            <div class="row people">
            <div class="row align-items-start" style="text-align:center;">
                <h2 class="divider-style"><span>Career Guidance Counselors</span></h2>
                @foreach ($team2 as $team)
                <div class="col-4 item d-flex align-items-stretch">
                    
                    <div class="box"><img class="rounded-circle" src="{{ asset('storage/'.$team->photo) }}">
                        <div  style="height: 100px;width:250px;"><h5 class="mb-0">{{ $team->name }}</h5></div>
                        
                        
                        <div class="social"><a href="{{ $team->linkedin }}"><i class="fa fa-linkedin"></i></a><a href="{{ $team->twitter }}"><i class="fa fa-twitter"></i></a><a href="#"></a></div>
                    </div>
                    
                </div>
                @endforeach
            </div>
                <div class="row align-items-start" style="text-align:center;">
                <h2 class="divider-style"><span>Former Directors in CGU</span></h2>
                @foreach ($team3 as $team)
                <div class="col-4 item d-flex align-items-stretch">
                    
                    <div class="box"><img class="rounded-circle" src="{{ asset('storage/'.$team->photo) }}">
                        <div  style="height: 100px;width:250px;"><h5 class="mb-0">{{ $team->name }}</h5></div>
                        
                        
                        <div class="social"><a href="{{ $team->linkedin }}"><i class="fa fa-linkedin"></i></a><a href="{{ $team->twitter }}"><i class="fa fa-twitter"></i></a><a href="#"></a></div>
                    </div>
                    
                </div>
                @endforeach
                </div>
                <div class="row align-items-start" style="text-align:center;">
                <h2 class="divider-style"><span>Faculty Career Advisors</span></h2>
                @foreach ($team1 as $team)
                <div class="col-4 item d-flex align-items-stretch">
                    
                    <div class="box"><img class="rounded-circle" src="{{ asset('storage/'.$team->photo) }}">
                        <div  style="height: 100px;width:250px;"><h5 class="mb-0">{{ $team->name }}</h5></div>
                        
                        
                        <div class="social"><a href="{{ $team->linkedin }}"><i class="fa fa-linkedin"></i></a><a href="{{ $team->twitter }}"><i class="fa fa-twitter"></i></a><a href="#"></a></div>
                    </div>
                    
                </div>
                @endforeach
                </div>
                <div class="row">
                    <section class="testimonials-clean">
                        <div class="container">
                            <div class="intro">
                                <h2 class="text-center">Testimonials </h2>
                                <p class="text-center">Our greatest pleasure is seeing our undegradutes excel in their respective fields.</p>
                            </div>
                            <div class="row people">
                                @foreach ($testi as $item)
                                <div class="col-md-6 col-lg-4 item">
                                    <div class="box ">
                                        <p class="description">{{ \Illuminate\Support\Str::limit($item->desc, 150, $end='...') }}</p>
                                    </div>
                                    <div class="author"><img class="rounded-circle" src="{{ asset('storage/'.$item->photo) }}">
                                        <h5 class="name">{{ $item->name }}</h5>
                                        <p class="title">{{ $item->profession }}.</p>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
     @endsection
  @section('scripts')
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/bs-init.js')}}"></script>
    <script src="{{asset('assets/js/agency.js')}}"></script>
    <script src="{{asset('assets/js/Client-Logo-Slider.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js')}}"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{asset('assets/js/Image-Tab-Gallery-Horizontal.js')}}"></script>
    <script src="{{asset('assets/js/Modal-commerce-popup-button.js')}}"></script>
    <script src="{{asset('assets/js/Portfolio-with-Category-switcher.js')}}"></script>
  @endsection

