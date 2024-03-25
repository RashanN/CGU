<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>
    @yield('title')
    {{ $general->title }}</title>
    <meta content="{{ $general->meta_desc }}" name="description">
  	<meta content="{{ $general->keyword }}" name="keywords">
  	 @yield('meta')
  	  <!-- Favicons -->
  	<link href="{{ asset('storage/'.$general->favicon) }}" rel="icon">
  	<link href="{{ asset('storage/'.$general->favicon) }}" rel="apple-touch-icon">

    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,700&amp;display=swap">
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome5-overrides.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/best-carousel-slide.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Bootstrap-4---Team-Members.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Client-Logo-Slider.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/divider-text-middle.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Footer-Dark.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/Image-Tab-Gallery-Horizontal.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Large-Dropdown-Menu-BS3-1.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Large-Dropdown-Menu-BS3.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Modal-commerce-popup-button-1.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Modal-commerce-popup-button.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/News-Cards-4-Columns-v2.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/News-Cards.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Portfolio-with-Category-switcher.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Responsive-Product-Slider.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Staff-Directory.css')}}">

        @yield('styles1')
</head>
<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="54">
    	<!--Navigation bar content -->
	
		<nav class="navbar navbar-dark navbar-expand-lg fixed-top " id="mainNav" style="background: var(--bs-yellow);border-color: var(--bs-red); background-color:{{$general->gverification}};">
			<div class="container">
			<img src="{{ asset('storage/'.$general->logo) }}">
				<button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
				<div class="collapse navbar-collapse" id="navbarResponsive" style="width: 100%;padding: 0px 100px;">
					
					
						<ul class="navbar-nav ms-auto text-uppercase" style="transform: translateX(-94px);width: 724.638px;">
							<li class="nav-item"><a class="nav-link" href="{{ route('homepage') }}">home</a></li>
							<li class="nav-item"><a class="nav-link" href="{{ route('portfolio') }}">gallery</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('jobbank') }}">opportunities</a></li>
							<li class="nav-item"><a class="nav-link" href="{{ route('homepage') }}/#about">about</a></li>
							<li class="nav-item"><a class="nav-link" href="{{ route('testi') }}">staff</a></li>
							<li class="nav-item"><a class="nav-link" href="{{ $general->facebook }}">facebook</a></li>
							<li class="nav-item"><a class="nav-link" href="{{ $general->instagram }}">youtube</a></li>
						</ul>
						
						<a class="btn btn-primary btn-lg" data-bss-hover-animate="bounce" href="{{ route('contact') }}" type="button">ContactUs</a>
				</div>
			</div>
		</nav>
	<!--End Navigation bar content -->
    @yield('content1')
    @yield("content")

    
    
    			<!-- Start: Footer Dark -->
			<footer class="footer-dark" style="background-color:{{$general->gverification}}";>
			<div class="container">
			<div class="row">
			<!-- Start: Services -->
			<div class="col-sm-6 col-md-3 item">
			<h3>Useful Links</h3>
			<ul>
			 @foreach ($link as $link)
              <li><i class="bx bx-chevron-right"></i> <a href="{{ $link->link }}">{{ $link->name }}</a></li>
              @endforeach
			</ul>
			</div>
			<!-- End: Services -->
			<!-- Start: About -->
			<div class="col-sm-6 col-md-3 item">
			<h3>Latest News</h3>
			<ul>
     			@foreach ($lpost as $lpost)
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('blogshow',$lpost->slug) }}">{{ $lpost->title }}</a></li>
              @endforeach
			</ul>
			</div>
			<!-- End: About -->
			<!-- Start: Footer Text -->
			<div class="col-md-6 item text">
			<h3>{{ $general->footer }}</h3>
			<p>{!! $general->sharethis !!}
			</p>
			</div>
			<!-- End: Footer Text -->
			<!-- Start: Social Icons -->
			<div class="col item social">
			<a href="{{ $general->facebook }}"><i class="icon ion-social-facebook"></i></a>
			<a href="{{ $general->twitter }}"><i class="icon ion-social-twitter"></i></a>
			<a href="{{ $general->linkedin }}"><i class="icon ion-social-linkedin"></i></a>
			<a href="{{ $general->instagram }}"><i class="icon ion-social-youtube"></i></a>
			</div>
			<!-- End: Social Icons -->
			</div>
			<!-- Start: Copyright -->
			<p class="copyright">{{ $general->footer }} © {{ now()->year }}</p>
			<!-- End: Copyright -->
			</div>
			</footer>
			<!-- End: Footer Dark -->
			</footer>
            @yield('scripts')
           

</body>
</html>