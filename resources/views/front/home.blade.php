@extends('layouts.master')
@section('content')



	
	<!-- Start: best carousel slide -->
	<header class="masthead" style="height: 649px;">
		<section id="carousel" style="padding: 0px 0px;width: 100%;">
			<!-- Start: Carousel Hero -->
				<div class="carousel slide" data-bs-ride="carousel" id="carousel-1" style="width: 100%;height: 600px;padding: 0px 0px;">
					<div class="carousel-inner" style="width: 100%;">
					
					@foreach ($banner as $key => $banner)

						<div class="carousel-item {{ $key == 0 ? 'active' : '' }}" style="width: 100%;">
							<div class="bg-light border rounded border-light pulse animated hero-technology carousel-hero jumbotron py-5 px-4" style="height: 600px;padding: 9px 24px;width: 100%;background-image: url({{asset('storage/'.$banner->cover)}});">
							<div style="padding: 100px 0px;">	
								<h1 class="hero-title">{{ $banner->title }}</h1>
									<p class="hero-subtitle" style="font-size: 21px;">  
										{{ $banner->desc }}</p>
							</div>
									@isset($banner->link)
									<p><a class="btn btn-primary hero-button plat" role="button" href="{{ $banner->link }}" style="width: 146.963px;height: 60px;margin: 1px;padding: 12px 12px;">Learn more</a></p>
								
								@endisset
							</div>
						</div>
        			@endforeach
						
					</div>
					<div>
						<a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev">
							<span class="carousel-control-prev-icon"></span>
							<span class="visually-hidden">Previous</span>
						</a>
						
						
						<a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next">
							<span class="carousel-control-next-icon"></span>
							<span class="visually-hidden">Next</span>
						</a>
					</div>
					
					<ol class="carousel-indicators">
						<li data-bs-target="#carousel-1" data-bs-slide-to="0"></li>
						<li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
						<li data-bs-target="#carousel-1" data-bs-slide-to="2" class="active"></li>
					</ol>
				</div>
				<!-- End: Carousel Hero -->
			</section>
		</header>
		
		
		
		
		<!-- Service section -->
		<section id="services" class="py-3">
			<div class="container">
			
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2 class="text-uppercase section-heading">Services</h2>
							<h3 class="text-muted section-subheading">we always on behalf of you</h3>
					</div>
				</div>
				
				
				<div class="row text-center">
					@foreach ($service as $service)
					<div class="col-md-4">
						<span class="fa-stack fa-4x">
							<i class="fa fa-circle fa-stack-2x text-primary"></i>
							<i class="{{ $service->icon }} fa-stack-1x fa-inverse"></i>
						</span>
						<h4 class="section-heading">{{ $service->title }}</h4>
						<p class="text-muted">{{ $service->quote }}&nbsp;</p>
					</div>
					@endforeach

				</div>
			</div>
			  
		</section>
		<!-- End Service section -->
		
		<!-- news section -->
		
    <section class="bg-light py-3 " id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading">Latest news</h2>
                    <h3 class="text-muted section-subheading">Keep in touch for more</h3>
                </div>
            </div>
            <div class="row">
				<div class="container">
					<div class="row">
					@foreach ($recent as $recent)
						<div class="col-sm-6 col-md-4 d-flex align-items-stretch">
						
							<figure class="snip1527" >
								<div class="image"><img src="{{ asset('storage/'.$recent->cover) }}" alt="pr-sample25"></div>
								<figcaption style="width:100%; height:25%;">
									<div class="date"><span class="day"><time datetime="2020-01-01">{{ Carbon\Carbon::parse($recent->created_at)->format("d ") }}</time></span><span class="month"><time datetime="2020-01-01">{{ Carbon\Carbon::parse($recent->created_at)->format("M") }}</time></span></div>
									<h6>{{ $recent->title }}</h6>
									
								</figcaption>
								<a href="{{ route('blogshow',$recent->slug) }}"></a>
							</figure>
							
						</div>
						@endforeach
					</div>
				</div>
			</div>
        </div>
        <div class="text-center"><a class="bs4_modal_trigger" href="{{ route('blog') }}" data-modal-id="bs4_sngl_cmrce" >See more</a></div>
    </section>
	<!-- End Service section -->
	
	<section id="about" class = "py-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2 class="text-uppercase">About us</h2>
						<h3 class="text-muted section-subheading"><strong>Career</strong>&nbsp;<strong>{{ $about->title }}</strong>.</h3>
						<p>{!! $about->desc !!} <br><br></p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<ul class="list-group timeline">
							<li class="list-group-item">
								<div class="timeline-image">
									<img class="rounded-circle img-fluid" src="{{ asset('/assets/img/about/1.jpg') }}">
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4>Our</h4>
										<h4 class="subheading">Vision<br></h4>
									</div>
									<div class="timeline-body">
										<p class="text-muted">
											<br><i class="fa fa-quote-left" style="color: var(--bs-success);font-size: 21px;"></i>
											&nbsp;To be the most trusted and empowered career hub bridging the gap between the undergraduate education and the job market expectations&nbsp;
											<i class="fa fa-quote-right" style="color: var(--bs-success);font-size: 21px;"></i>
											<br><br>
										</p>
									</div>
								</div>
							</li>
							<li class="list-group-item timeline-inverted">
								<div class="timeline-image">
									<img class="rounded-circle img-fluid" src="{{ asset('/assets/img/about/2.jpg') }}">
								</div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4>Our&nbsp;</h4>
										<h4 class="subheading">Mission<br></h4>
									</div>
									<div class="timeline-body">
										<p class="text-muted">
											<i class="fa fa-quote-left" style="color: var(--bs-success);font-size: 21px;"></i>
											&nbsp; &nbsp;To assist students to realize their competencies and creativity, and to provide them with appropriate trainings to enhance their employability and to guide them to make optimum decisions on educational and occupational choices in order achieve the future goals of their personal life, academicand professional career in a challenging world of work
											<i class="fa fa-quote-right" style="color: var(--bs-success);font-size: 21px;"></i><br>
										</p>
									</div>
								</div>
							</li>
							<li class="list-group-item timeline-inverted">
								<div class="timeline-image">
									<h4>Be Part<br>&nbsp;Of Our<br>&nbsp;Story!</h4>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		
		
		<section class="bg-light py-3" id="team">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						@foreach ($testi as $item)
						<div class="team-member">

							<img class="rounded-circle mx-auto" src="{{ asset('storage/'.$item->photo) }}">
							<h4><strong>{{ $item->name }}</strong><br></h4>
							<p class="text-muted"><strong>{{ $item->profession }}&nbsp;</strong></p>
							<ul class="list-inline social-buttons">
								
								<li class="list-inline-item"><a href="https://www.linkedin.com/in/thusitha-gunawardana-04822314/"><i class="fa fa-linkedin-square"></i></a></li>
								<li class="list-inline-item"><a href="mailto:gunawardana@badm.ruh.ac.lk"><i class="fa fa-envelope"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col">
						<h1>Message from the Director<br></h1>
						<p>
							<i class="fa fa-quote-left" style="font-size: 47px;color: var(--bs-pink);"></i>	
								{{ $item->desc }}	
							<i class="fa fa-quote-right" style="font-size: 47px;color: var(--bs-pink);"></i><br><br>
						</p>
					</div>
					@endforeach
				</div>
			</div>
				
				<!-- Start: Staff Directory -->
				
			<div class="container">
				
					<!-- Start: hm cinel cursos heading -->
					
					<h1 class="text-center" style="padding: 10;padding-top: 10;padding-bottom: 10;"><strong>Career Guidance Counselors</strong><br></h1>
					<!-- End: hm cinel cursos heading -->
					<!-- Start: Bootstrap 4 - Team Members -->
					<div class="container">
						<div class="row text-center">

							<!-- Team item -->
							@foreach ($team as $team)
								@if($team->position === 'Career Guidance Counselors')
								<div class="col-lg-3 col-md-6 d-flex align-items-stretch" >
									<div class="bg-white rounded shadow-sm  " ><img src="{{ asset('storage/'.$team->photo) }}" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
										<div  style="height: 100px;width:250px;"><h5 class="mb-0">{{ $team->name }}</h5></div>
										
											<ul class="social mb-3 list-inline mt-0">
												
												<li class="list-inline-item"><a href="{{ $team->twitter }}" class="social-link"><i class="fa fa-twitter"></i></a></li>
												
												<li class="list-inline-item"><a href="{{ $team->linkedin }}" class="social-link"><i class="fa fa-linkedin"></i></a></li>
											</ul>
									</div>
								</div>
							<!-- End -->
								@endif
							@endforeach
						</div>
					</div>
					<!-- End: Bootstrap 4 - Team Members -->
					
					

				
			</div>
			<!-- End: Staff Directory -->
		</section>

 
        <section id="portfolio" class="portfolio py-3">
            <div class="container">
                <div class="section-title pt-4 pb-4">
                    <h2>Gallery</h2>
                    <p>We organize many events for students.following are some of them.come an see our photo album.</p>
                </div>
                <div class="row portfolio-container ">
                	@foreach ($portfolio as $portfolio)
                    <div class="col-lg-4 col-md-6 portfolio-item {{ $portfolio->pcategory_id }} "><img class="img-fluid rounded-1 " src="{{ asset('storage/'.$portfolio->cover) }}">
                        <div class="portfolio-info">
                            <h4>{{ $portfolio->name }}</h4>
                            <p>branding</p><a class="portfolio-lightbox preview-link" href="{{ asset('storage/'.$portfolio->cover) }}" data-gallery="portfolioGallery" title="{{ $portfolio->name }}"><i class="fas fa-plus"></i></a><a class="details-link" href=""><i class="fas fa-link"></i></a>
                        </div>
                    </div>
                     @endforeach
                </div>
            </div>
            <div class="text-center"><a class="bs4_modal_trigger" href="{{ route('portfolio') }}" data-modal-id="bs4_sngl_cmrce" >See more</a></div>
        </section>
  
				<!-- Start:Company section new -->
				<section class="py-3">
            <div class="container">
                <section class="customer-logos slider">
                	@foreach ($partner as $partner)
                    <div class="col-sm-4 col-md-3 col-lg-2 col-xl-2 slide">
                    	<a href="{{ $partner->link }}" target="_blank" rel="noopener noreferrer">
                    	<img src="{{ asset('storage/'.$partner->cover) }}" alt="{{ $partner->name }}" width="100%">
                    	</a>
                    </div>
                    @endforeach
                </section>
            </div>
        </section>
			<!-- End:Company section new -->
   
   
	@endsection
	@section('scripts')
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/agency.js"></script>
    <script src="assets/js/Client-Logo-Slider.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="assets/js/Image-Tab-Gallery-Horizontal.js"></script>
    <script src="assets/js/Modal-commerce-popup-button.js"></script>
    <script src="assets/js/Portfolio-with-Category-switcher.js"></script>
	@endsection


	<!-- 
	++++++++++++++++++++++++++++++++++++++
				Design by,
	++++++++++++++++++++++++++++++++++++++
	!									!
	!									!
	!									!
	!									!
	!			1.Kushan Maduranga		!
	!			1.Heshan namal			!
	!									!
	!									!
	!			41 Science Batch		!
	++++++++++++++++++++++++++++++++++++++
		
 -->