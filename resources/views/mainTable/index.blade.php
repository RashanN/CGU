@extends('layouts.master')
@section('styles1')


    <link rel="stylesheet" href="{{asset('assets/css/Customizable-Background--Overlay.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/Div-Overlay-with-Button.css')}}">
 
    
    <link rel="stylesheet" href="{{asset('assets/css/content_blocks_modernstyle.css')}}">
	<script src="https://use.fontawesome.com/53c818b251.js"></script>
@endsection


@section('content')


    <div style="background-image:url({{asset('assets/img/job-bank.jpeg')}});height:500px;background-position:center;background-size:cover;background-repeat:no-repeat;">
        <div class="d-flex justify-content-center align-items-center" style="height: inherit;min-height: initial;width: 100%;position: absolute;left: 0;background-color: rgba(30,41,99,0.53);">
            <div class="d-flex justify-content-center align-items-center" style="height: 21;min-height: initial;width: 100%;position: absolute;left: 0;background-color: rgba(30,41,99,0.53);filter: saturate(200%);margin: 0;padding-right: 20px;padding-left: 20px;">
                <div class="container">
                    <h1 class="text-center" style="color: rgb(242,245,248);font-size: 56px;font-weight: bold;font-family: Roboto, sans-serif;">Find Career Opportunities</h1>
					
					<form action="{{ route('jobbank.search') }}" method="GET" >
                <div class="row align-items-center">
                    <div class="col">
                        <div class="form-group">
                            
                            <input type="text" name="search" class="form-control" id="name" placeholder="What are you looking for" required="required" />
                        </div>
                      
                        
                    </div>
					<div class="col">
					<div class="form-group">
                            <select name="city_id" class="form-control" placeholder="Job Type">
                                    @foreach ($search_cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                                    @endforeach
                                </select>
                                <p class="help-block"></p>
                                @if($errors->has('city_id'))
                                    <p class="help-block">
                                        {{ $errors->first('city_id') }}
                                    </p>
                                @endif
                        </div>
					</div>
					<div class="col">
					<div class="form-group">
                           
                            <select id="subject" name="categories" class="form-control" placeholder="Category" required="required">
                                @foreach ($search_categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                
                                @endforeach
                            </select>
                            
                              @if($errors->has('categories'))
                                    <p class="help-block">
                                        {{ $errors->first('categories') }}
                            		</p>
                             @endif
                        </div>
					</div>
                     <div align="center">
    <button class="button" type="submit" data-hover="Lets Go"><span>Search now</span></button></div>
                    
                </div>
                </form>
					
					
					
                   
                </div>
                <div class="d-flex align-items-center order-5" style="height:200px;"></div>
            </div>
        </div>
    </div>
	
		<!--==========================================
=            All Category Section            =
===========================================-->


	<!-- Container Start -->
	<div class="features-boxed">
        <div class="container">
            <div class="row justify-content-center features">
            	@foreach ($categories_all->take(8) as $category_all)
					<div class="col-sm-6 col-md-5 col-lg-4 item">
						<div class="box">
						<span class="fa-stack fa-4x">
							<i class="fa fa-circle fa-stack-2x text-primary"></i>
							<i class="{{ $category_all->icon }} fa-stack-1x fa-inverse"></i>
						</span>
							<h3 class="text-muted section-subheading font-weight-bolder"><a class="text-decoration-none link-dark" href="{{ route('category', [$category_all->id]) }}">{{ $category_all->name }} </a>
								<span class="badge bg-primary rounded-pill">{{ $category_all->companies->count() }}</span>
							</h3>
							<ul class="list-group">
								@foreach ( $category_all->companies->shuffle()->take(4) as $singleCompany)
								<li class="list-group-item d-flex justify-content-between align-items-center">
											<a class="text-decoration-none link-secondary" href="{{ route('company', [$singleCompany->id]) }}">{{ $singleCompany->name}} </a>
								</li>
								@endforeach
							</ul>
						</div>
					</div><!-- /Category List -->
				@endforeach
               </div>
        </div>
    </div>
	<!-- Container End -->

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
	@endsection

